/* ===== ПринятоПро — главная: интерактив =====
   Базовый вид корректен без JS. Здесь: бургер, rough-notation,
   reveal-анимации, конфиг-квиз. GSAP-лента этапов — отдельным слоем.
   Рендер квиза — через безопасные DOM-методы (без innerHTML). */
(function () {
  'use strict';
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- reveal-анимации ---------- */
  document.documentElement.classList.add('js-anim');
  if (reduced || !('IntersectionObserver' in window)) {
    document.querySelectorAll('[data-reveal]').forEach(function (el) { el.classList.add('is-in'); });
  } else {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) { e.target.classList.add('is-in'); io.unobserve(e.target); }
      });
    }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
    document.querySelectorAll('[data-reveal]').forEach(function (el, i) {
      el.style.transitionDelay = (Math.min(i % 6, 5) * 0.05) + 's';
      io.observe(el);
    });
  }

  /* ---------- бургер-меню ---------- */
  var burger = document.getElementById('burger');
  var menu = document.getElementById('mobileMenu');
  if (burger && menu) {
    burger.addEventListener('click', function () {
      var open = menu.classList.toggle('open');
      burger.classList.toggle('open', open);
      burger.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    menu.querySelectorAll('a').forEach(function (a) {
      a.addEventListener('click', function () {
        menu.classList.remove('open'); burger.classList.remove('open');
        burger.setAttribute('aria-expanded', 'false');
      });
    });
  }

  /* ---------- выпадающее меню «Услуги» (клик/клавиатура) ---------- */
  var navDD = document.getElementById('navDD');
  var ddToggle = document.getElementById('ddToggle');
  if (navDD && ddToggle) {
    ddToggle.addEventListener('click', function (e) {
      e.preventDefault();
      var open = navDD.classList.toggle('open');
      ddToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
    document.addEventListener('click', function (e) {
      if (!navDD.contains(e.target)) { navDD.classList.remove('open'); ddToggle.setAttribute('aria-expanded', 'false'); }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') { navDD.classList.remove('open'); ddToggle.setAttribute('aria-expanded', 'false'); }
    });
  }

  /* ---------- rough-notation: «красный карандаш» ---------- */
  window.addEventListener('load', function () {
    if (reduced || !window.RoughNotation) return;
    var RN = window.RoughNotation;

    /* hero: подчёркивание ключевой фразы */
    try {
      var el = document.getElementById('mark-lead');
      if (el) {
        var a = RN.annotate(el, { type: 'underline', color: '#cc2018', strokeWidth: 3, padding: 2, multiline: true, iterations: 2 });
        setTimeout(function () { a.show(); }, 600);
      }
    } catch (e) {}

    /* hero: обводка блока «Telegram · ВКонтакте · Позвонить» — все три разом */
    try {
      var msgs = document.getElementById('heroMsgs');
      if (msgs) {
        var m = RN.annotate(msgs, { type: 'circle', color: '#cc2018', strokeWidth: 2.5, padding: 8, iterations: 2, animationDuration: 800 });
        setTimeout(function () { m.show(); }, 1500);
      }
    } catch (e) {}

    /* заголовки секций: пометка рисуется, когда заголовок попадает в кадр.
       По умолчанию подчёркивание; отдельным секциям — рамка/обводка для разнообразия */
    var MARK_TYPES = { uslugi: 'box', faq: 'box', experts: 'circle', geo: 'circle' };
    if (!('IntersectionObserver' in window)) return;
    var mio = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (!en.isIntersecting) return;
        mio.unobserve(en.target);
        var h = en.target;
        var sec = h.closest('section[id]');
        var type = MARK_TYPES[sec ? sec.id : ''] || 'underline';
        var dark = !!h.closest('.distance');
        try {
          var an = RN.annotate(h, {
            type: type,
            color: dark ? '#ff6258' : '#cc2018',
            strokeWidth: type === 'underline' ? 3 : 2.5,
            padding: type === 'circle' ? 12 : 6,
            multiline: true,
            iterations: 2,
            animationDuration: 900
          });
          /* ждём конца reveal-съезда секции, иначе пометка встанет мимо текста */
          setTimeout(function () { an.show(); }, 650);
        } catch (e) {}
      });
    }, { threshold: 0.6 });
    document.querySelectorAll('h2.sh, h3.sh3').forEach(function (h) { mio.observe(h); });
  });

  /* ---------- мобильный «скролл-джек»: вертикальный скролл двигает ленту влево ----------
     [data-hscroll] — «взлётка» (JS растягивает её по высоте на длину ленты),
     .hs-pin — липкий экран, [data-hscroll-track] — лента карточек.
     Фолбэк без JS / reduced-motion: обычная горизонтальная прокрутка пальцем (CSS). */
  (function () {
    if (reduced) return;
    var boxes = Array.prototype.slice.call(document.querySelectorAll('[data-hscroll]'));
    if (!boxes.length) return;
    /* data-hscroll="desktop" → джек на ПК (на мобиле остаётся ручной свайп);
       data-hscroll без значения → джек на мобиле */
    var items = boxes.map(function (box) {
      var desktop = box.getAttribute('data-hscroll') === 'desktop';
      return {
        box: box,
        pin: box.querySelector('.hs-pin'),
        track: box.querySelector('[data-hscroll-track]'),
        mq: window.matchMedia(desktop ? '(min-width:681px)' : '(max-width:680px)'),
        dist: 0, x: 0
      };
    }).filter(function (it) { return it.pin && it.track; });
    if (!items.length) return;

    function measure() {
      items.forEach(function (it) {
        it.track.style.transform = '';
        it.box.style.height = '';
        it.x = 0;
        if (!it.mq.matches) { it.box.classList.remove('hs-on'); it.dist = 0; return; }
        it.box.classList.add('hs-on');
        var dist = Math.ceil(it.track.getBoundingClientRect().width - it.pin.clientWidth);
        it.dist = Math.max(0, dist);
        if (it.dist) it.box.style.height = (window.innerHeight + it.dist) + 'px';
        else it.box.classList.remove('hs-on');
      });
    }
    /* непрерывный rAF + lerp: лента плавно догоняет цель, как Lenis догоняет колесо.
       Жёсткая привязка к scroll-событию на таче дёргается — скролл идёт в компо-
       зиторе, а JS отстаёт на кадр; сглаживание это маскирует. */
    function raf() {
      var vh = window.innerHeight;
      items.forEach(function (it) {
        if (!it.dist || !it.mq.matches) return;
        var r = it.box.getBoundingClientRect();
        var total = r.height - vh;
        if (total <= 0) return;
        var p = Math.min(1, Math.max(0, -r.top / total));
        var target = -p * it.dist;
        it.x += (target - it.x) * 0.14;
        if (Math.abs(target - it.x) < 0.1) it.x = target;
        it.track.style.transform = 'translate3d(' + it.x.toFixed(2) + 'px,0,0)';
      });
      requestAnimationFrame(raf);
    }
    window.addEventListener('resize', function () { requestAnimationFrame(measure); });
    items.forEach(function (it) {
      if (it.mq.addEventListener) it.mq.addEventListener('change', measure);
    });
    window.addEventListener('load', measure);
    measure();
    requestAnimationFrame(raf);
  })();

  /* ---------- КВИЗ ---------- */
  var STEPS = [
    { key: 'type', title: 'Тип объекта', sub: 'Что нужно принять?', options: [
      { v: 'studio', t: 'Квартира-студия' }, { v: '1-2', t: 'Квартира 1–2 комнаты' },
      { v: '3-4', t: 'Квартира 3–4 комнаты' }, { v: 'house', t: 'Дом / таунхаус' } ] },
    { key: 'finish', title: 'Отделка', sub: 'В каком состоянии объект?', options: [
      { v: 'none', t: 'Без отделки (черновая)' }, { v: 'whitebox', t: 'Предчистовая (white box)' },
      { v: 'fine', t: 'Чистовая отделка от застройщика' }, { v: 'repair', t: 'После ремонта (своя бригада)' } ] },
    { key: 'area', title: 'Площадь', sub: 'Сколько примерно квадратных метров?', options: [
      { v: 's', t: 'До 40 м²' }, { v: 'm', t: '40–60 м²' }, { v: 'l', t: '60–90 м²' }, { v: 'xl', t: 'Больше 90 м²' } ] },
    { key: 'city', title: 'Город', sub: 'Где находится объект?', options: [
      { v: 'klgd', t: 'Калининград' }, { v: 'coast', t: 'Зеленоградск / Светлогорск / Пионерский' },
      { v: 'region', t: 'Другой город области' } ] },
    { key: 'pain', title: 'Что беспокоит больше всего?', sub: 'Выберите главное', options: [
      { v: 'defects', t: 'Боюсь принять с дефектами и платить за ремонт сам' },
      { v: 'remote', t: 'Я в другом городе и не могу приехать' },
      { v: 'complex', t: 'Сложный объект: дом, большая площадь' },
      { v: 'conflict', t: 'Уже есть дефекты или конфликт с застройщиком' } ] },
    { key: 'when', title: 'Когда приёмка?', sub: 'Сроки помогут спланировать выезд', options: [
      { v: 'week', t: 'На этой неделе' }, { v: 'month', t: 'В течение месяца' },
      { v: 'choosing', t: 'Пока выбираю, узнаю цену' }, { v: 'unknown', t: 'Точная дата ещё неизвестна' } ] }
  ];

  var RESULTS = {
    A: { title: 'Вам подойдёт: приёмка квартиры в новостройке', price: 'Ориентировочно: от 8 000 ₽',
      text: 'Пройдём 90+ параметров, найдём скрытые дефекты, оформим акт с печатью. Цену зафиксируем в договоре заранее — без доплат на месте.' },
    B: { title: 'Вам подойдёт: дистанционная приёмка «под ключ»', price: 'Ориентировочно: от 11 000 ₽',
      text: 'Примем квартиру по доверенности, покажем всё по видеосвязи, пришлём видеообзор и акт. Сэкономите минимум два приезда в Калининград.' },
    V: { title: 'Вам подойдёт: приёмка дома / таунхауса + технадзор', price: 'Ориентировочно: от 12 000 ₽',
      text: 'Проверим объект целиком: фундамент, кровля, инженерия, тепловой контур. Захотите — продолжим контролировать ремонт независимым технадзором.' },
    G: { title: 'Вам подойдёт: экспертная приёмка с документами для застройщика', price: 'Обсудим индивидуально',
      text: 'Зафиксируем дефекты официальным актом и ведомостью, поможем составить претензию застройщику. Конкретные шаги зависят от вашей ситуации.' }
  };

  function computeResult(a) {
    if (a.type === 'house' || a.pain === 'complex') return 'V';
    if (a.pain === 'conflict') return 'G';
    if (a.city === 'coast' || a.city === 'region' || a.pain === 'remote') return 'B';
    return 'A';
  }

  function el(tag, cls, text) {
    var n = document.createElement(tag);
    if (cls) n.className = cls;
    if (text != null) n.textContent = text;
    return n;
  }

  var form = document.getElementById('quizForm');
  if (form) {
    var stepsWrap = document.getElementById('quizSteps');
    var progress = document.getElementById('quizProgress');
    var barFill = document.getElementById('quizBarFill');
    var prevBtn = document.getElementById('quizPrev');
    var nextBtn = document.getElementById('quizNext');
    var nav = document.getElementById('quizNav');
    var result = document.getElementById('quizResult');
    var answers = {};
    var cur = 0;

    function render() {
      var s = STEPS[cur];
      stepsWrap.textContent = '';
      var step = el('div', 'quiz-step');
      step.appendChild(el('h3', null, s.title));
      step.appendChild(el('div', 'q-sub', s.sub));
      var opts = el('div', 'q-options');
      s.options.forEach(function (o) {
        var label = el('label', 'q-opt');
        var input = document.createElement('input');
        input.type = 'radio'; input.name = s.key; input.value = o.v;
        if (answers[s.key] === o.v) input.checked = true;
        input.addEventListener('change', function () { answers[s.key] = o.v; });
        label.appendChild(input);
        label.appendChild(el('span', 'card', o.t));
        opts.appendChild(label);
      });
      step.appendChild(opts);
      stepsWrap.appendChild(step);

      progress.textContent = 'Шаг ' + (cur + 1) + ' из ' + STEPS.length;
      barFill.style.width = ((cur + 1) / STEPS.length * 100) + '%';
      prevBtn.disabled = cur === 0;
      nextBtn.textContent = cur === STEPS.length - 1 ? 'Показать результат' : 'Далее';
    }

    function showResult() {
      var r = RESULTS[computeResult(answers)];
      document.getElementById('resTitle').textContent = r.title;
      document.getElementById('resText').textContent = r.text;
      var priceEl = document.getElementById('resPrice');
      priceEl.textContent = r.price + ' ';
      var small = el('small', null, '(финальная цена — в договоре)');
      small.style.fontWeight = '400'; small.style.color = 'var(--ink-faint)';
      priceEl.appendChild(small);
      stepsWrap.style.display = 'none';
      nav.style.display = 'none';
      progress.textContent = 'Готово';
      barFill.style.width = '100%';
      result.classList.add('active');
    }

    nextBtn.addEventListener('click', function () {
      var s = STEPS[cur];
      if (!answers[s.key]) {
        var first = stepsWrap.querySelector('.q-opt .card');
        if (first) { first.style.borderColor = 'var(--red)'; setTimeout(function () { first.style.borderColor = ''; }, 600); }
        return;
      }
      if (cur === STEPS.length - 1) { showResult(); return; }
      cur++; render();
    });
    prevBtn.addEventListener('click', function () { if (cur > 0) { cur--; render(); } });

    form.addEventListener('submit', function (e) {
      e.preventDefault();
      var name = document.getElementById('leadName').value.trim();
      var phone = document.getElementById('leadPhone').value.trim();
      if (!name || phone.replace(/\D/g, '').length < 10) {
        document.getElementById('leadPhone').focus();
        return;
      }
      var payload = { name: name, phone: phone, answers: answers, segment: computeResult(answers) };
      // backend-ready: позже заменить на fetch в CRM/WPForms (data-endpoint)
      try { console.log('LEAD', payload); localStorage.setItem('prinyato_last_lead', JSON.stringify(payload)); } catch (e) {}
      document.querySelector('.lead-form').style.display = 'none';
      document.getElementById('leadSuccess').style.display = 'block';
    });

    render();
  }
})();
