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

  /* ---------- header CTA: тёмная у верха, краснеет после 2-го экрана (#trust) ----------
     Стартовый класс .cta-dark ставит PHP на главной (без вспышки). Здесь снимаем его,
     когда низ 2-го экрана ушёл под шапку, и возвращаем при скролле вверх. */
  var ctaHeader = document.querySelector('.site-header.cta-dark');
  var ctaAnchor = document.getElementById('trust');
  if (ctaHeader && ctaAnchor) {
    var syncCta = function () {
      ctaHeader.classList.toggle('cta-dark', ctaAnchor.getBoundingClientRect().bottom > (ctaHeader.offsetHeight || 0));
    };
    window.addEventListener('scroll', syncCta, { passive: true });
    window.addEventListener('resize', syncCta, { passive: true });
    syncCta();
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
      var mode = box.getAttribute('data-hscroll');
      var mqStr = mode === 'desktop' ? '(min-width:681px)'
                : mode === 'all' ? '(min-width:1px)'
                : '(max-width:680px)';
      return {
        box: box,
        pin: box.querySelector('.hs-pin'),
        track: box.querySelector('[data-hscroll-track]'),
        mq: window.matchMedia(mqStr),
        direct: mode === 'all',
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
        if (it.dist) { it.lastVh = window.innerHeight; it.box.style.height = (it.lastVh + it.dist) + 'px'; }
        else it.box.classList.remove('hs-on');
      });
    }
    /* непрерывный rAF + lerp: лента плавно догоняет цель, как Lenis догоняет колесо.
       Жёсткая привязка к scroll-событию на таче дёргается — скролл идёт в компо-
       зиторе, а JS отстаёт на кадр; сглаживание это маскирует. */
    function raf() {
      var vv = window.visualViewport;
      /* при пинч-зуме визуальный вьюпорт != layout-вьюпорта → координаты rect/innerHeight
         рассинхронятся и лента дёргается. На время зума замораживаем transform. */
      if (vv && (vv.scale > 1.01 || vv.scale < 0.99)) { requestAnimationFrame(raf); return; }
      var vh = window.innerHeight;
      items.forEach(function (it) {
        if (!it.dist || !it.mq.matches) return;
        if (it.lastVh !== vh) { it.box.style.height = (vh + it.dist) + 'px'; it.lastVh = vh; }
        var r = it.box.getBoundingClientRect();
        var total = it.dist;
        if (total <= 0) return;
        var p = Math.min(1, Math.max(0, -r.top / total));
        var target = -p * it.dist;
        it.x += (target - it.x) * (it.direct ? 1 : 0.14);
        if (Math.abs(target - it.x) < 0.1) it.x = target;
        it.track.style.transform = 'translate3d(' + it.x.toFixed(2) + 'px,0,0)';
      });
      requestAnimationFrame(raf);
    }
    window.addEventListener('resize', function () { requestAnimationFrame(measure); });
    if (window.visualViewport) window.visualViewport.addEventListener('resize', function () { requestAnimationFrame(measure); });
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
      text: 'Пройдём 90+ параметров, найдём скрытые дефекты, оформим официальный акт осмотра. Цену зафиксируем в договоре заранее — без доплат на месте.' },
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

/* ===== Поведенческий слой: count-up счётчиков [data-count] при появлении ===== */
(function () {
  var els = document.querySelectorAll('[data-count]');
  if (!els.length || !('IntersectionObserver' in window)) return;
  var reduce = window.matchMedia && window.matchMedia('(prefers-reduced-motion:reduce)').matches;
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (!e.isIntersecting) return;
      io.unobserve(e.target);
      var node = e.target,
          end = parseInt(node.getAttribute('data-count'), 10) || 0,
          suf = node.getAttribute('data-suffix') || '';
      if (reduce) { node.textContent = end + suf; return; }
      var dur = 1100, start = null;
      function step(ts) {
        if (start === null) start = ts;
        var p = Math.min((ts - start) / dur, 1),
            eased = 1 - Math.pow(1 - p, 3);
        node.textContent = Math.round(end * eased) + suf;
        if (p < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    });
  }, { threshold: 0.4 });
  els.forEach(function (el) { io.observe(el); });
})();

/* ===== Мобильное меню: аккордеон «Услуги» ===== */
(function () {
  var grp = document.getElementById('mmServices');
  var btn = document.getElementById('mmServicesToggle');
  if (!grp || !btn) return;
  btn.addEventListener('click', function () {
    var open = grp.classList.toggle('open');
    btn.setAttribute('aria-expanded', open ? 'true' : 'false');
  });
})();

/* ===== Sticky-CTA: показываем после прокрутки (не сразу при загрузке) ===== */
(function () {
  var cta = document.querySelector('.sticky-cta');
  if (!cta) return;
  function upd() {
    if (window.pageYOffset > window.innerHeight * 0.8) cta.classList.add('is-visible');
    else cta.classList.remove('is-visible');
  }
  window.addEventListener('scroll', upd, { passive: true });
  window.addEventListener('resize', upd);
  upd();
})();

/* ===== Услуги: мобильная свайп-«колода» карт (≤680px) =====
   Переиспользует существующие .svc внутри #uslugi .svc-grid. Десктоп не трогаем.
   Жест Pointer Events: тянем верхнюю карту влево → улетает и встаёт в низ колоды. */
(function () {
  var section = document.getElementById('uslugi');
  if (!section) return;
  var grid = section.querySelector('.svc-grid');
  if (!grid) return;
  var cards = Array.prototype.slice.call(grid.querySelectorAll('.svc'));
  if (cards.length < 2) return;

  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var mq = window.matchMedia('(max-width:680px)');
  var order = cards.map(function (_, i) { return i; });
  var active = false, ui = null, dots = [], busy = false, drag = null;
  var THRESHOLD = 0.30, TAP_SLOP = 8;

  function depthStyle(depth) {
    var n = cards.length;
    if (depth === 0) return { t: 'translate3d(0,0,0) scale(1)', o: 1, z: n };
    if (depth === 1) return { t: 'translate3d(0,9px,0) scale(.965)', o: .9, z: n - 1 };
    if (depth === 2) return { t: 'translate3d(0,18px,0) scale(.93)', o: .65, z: n - 2 };
    return { t: 'translate3d(0,18px,0) scale(.93)', o: 0, z: n - depth };
  }
  function topCard() { return cards[order[0]]; }

  function paint() {
    order.forEach(function (idx, depth) {
      var c = cards[idx], s = depthStyle(depth);
      c.style.zIndex = String(s.z);
      c.style.opacity = String(s.o);
      if (!c.classList.contains('is-dragging') && !c.classList.contains('is-flying')) {
        c.style.transform = s.t;
      }
      c.classList.toggle('is-top', depth === 0);
      var hidden = depth > 2;
      Array.prototype.forEach.call(c.querySelectorAll('a'), function (a) {
        if (hidden) a.setAttribute('tabindex', '-1'); else a.removeAttribute('tabindex');
      });
      c.setAttribute('aria-hidden', hidden ? 'true' : 'false');
    });
    dots.forEach(function (d, i) { d.classList.toggle('on', i === order[0]); });
    var cnt = ui && ui.querySelector('.svc-deck-count');
    if (cnt) cnt.textContent = (order[0] + 1) + ' / ' + cards.length;
  }

  function measure() {
    if (!active) return;
    var prev = cards.map(function (c) { return c.style.cssText; });
    grid.style.height = '';
    cards.forEach(function (c) {
      c.style.position = 'static'; c.style.transform = 'none';
      c.style.opacity = '1'; c.style.width = '';
    });
    var maxH = 0;
    cards.forEach(function (c) { if (c.offsetHeight > maxH) maxH = c.offsetHeight; });
    cards.forEach(function (c, i) { c.style.cssText = prev[i]; });
    grid.style.height = (maxH + 24) + 'px';
    paint();
  }

  function cycleToBack() { order.push(order.shift()); }

  function onDown(e) {
    if (!active || busy || drag) return;
    var c = topCard();
    if (e.currentTarget !== c) return;
    if (e.pointerType === 'mouse' && e.button !== 0) return;
    drag = { id: e.pointerId, x0: e.clientX, y0: e.clientY, dx: 0, dy: 0, card: c, moved: false };
    c.classList.add('is-dragging');
    try { c.setPointerCapture(e.pointerId); } catch (_) {}
  }
  function onMove(e) {
    if (!drag || e.pointerId !== drag.id) return;
    drag.dx = e.clientX - drag.x0; drag.dy = e.clientY - drag.y0;
    if (!drag.moved && Math.sqrt(drag.dx * drag.dx + drag.dy * drag.dy) > TAP_SLOP) {
      drag.moved = true; section.classList.add('swiped');
    }
    if (!drag.moved) return;
    drag.card.style.transform = 'translate3d(' + drag.dx.toFixed(1) + 'px,0,0) rotate(' + (drag.dx * 0.04).toFixed(2) + 'deg)';
  }
  function onUp(e) {
    if (!drag || e.pointerId !== drag.id) return;
    var c = drag.card, dx = drag.dx, moved = drag.moved;
    try { c.releasePointerCapture(e.pointerId); } catch (_) {}
    c.classList.remove('is-dragging');
    if (!moved) { c.style.transform = depthStyle(0).t; drag = null; return; }
    var w = grid.clientWidth || 320;
    var fly = Math.abs(dx) > w * THRESHOLD;
    var right = dx > 0;
    drag = null;
    if (!fly) { c.style.transform = depthStyle(0).t; c.style.opacity = '1'; return; }
    if (right) {                         // свайп вправо → вернуть предыдущую карту наверх
      if (reduced) { order.unshift(order.pop()); paint(); return; }
      rewind(w);                         // старый верх (c) уедет в стопку через paint()
      return;
    }
    // свайп влево → текущая верхняя улетает, следующая выходит наверх
    if (reduced) { cycleToBack(); paint(); return; }
    busy = true;
    c.classList.add('is-flying');
    c.style.transform = 'translate3d(' + (-w * 1.3) + 'px,40px,0) rotate(-12deg)';
    c.style.opacity = '0';
    var done = function () {
      c.removeEventListener('transitionend', done);
      c.classList.remove('is-flying');
      cycleToBack();
      c.style.transition = 'none';
      paint();
      requestAnimationFrame(function () {
        requestAnimationFrame(function () { c.style.transition = ''; busy = false; });
      });
    };
    c.addEventListener('transitionend', done);
    setTimeout(function () { if (c.classList.contains('is-flying')) done(); }, 540);
  }

  function rewind(w) {
    busy = true;
    var inc = cards[order[order.length - 1]];   // карта снизу колоды → станет верхней
    inc.style.transition = 'none';
    inc.style.zIndex = String(cards.length + 1);
    inc.style.opacity = '1';
    inc.style.transform = 'translate3d(' + (-w * 1.3) + 'px,40px,0) rotate(-12deg)'; // за левым краем
    order.unshift(order.pop());
    requestAnimationFrame(function () {
      requestAnimationFrame(function () {
        inc.style.transition = '';        // вернуть плавность → въезжает слева в центр
        paint();                          // старый верх уезжает в стопку (depth 1)
      });
    });
    setTimeout(function () { busy = false; }, 460);
  }

  function bindCard(c) {
    c.addEventListener('pointerdown', onDown);
    c.addEventListener('pointermove', onMove);
    c.addEventListener('pointerup', onUp);
    c.addEventListener('pointercancel', onUp);
    c.addEventListener('dragstart', function (ev) { ev.preventDefault(); });
  }
  function unbindCard(c) {
    c.removeEventListener('pointerdown', onDown);
    c.removeEventListener('pointermove', onMove);
    c.removeEventListener('pointerup', onUp);
    c.removeEventListener('pointercancel', onUp);
  }

  function buildUI() {
    ui = document.createElement('div');
    ui.className = 'svc-deck-ui';
    var hint = document.createElement('div');
    hint.className = 'svc-deck-hint';
    var arr = document.createElement('i');
    arr.className = 'svc-deck-arrow';
    arr.setAttribute('aria-hidden', 'true');
    arr.textContent = '↔';
    var lbl = document.createElement('span');
    lbl.textContent = 'Листайте в стороны';
    hint.appendChild(arr); hint.appendChild(lbl);
    var dw = document.createElement('div');
    dw.className = 'svc-deck-dots';
    dots = cards.map(function () { var b = document.createElement('b'); dw.appendChild(b); return b; });
    var cnt = document.createElement('span');
    cnt.className = 'svc-deck-count';
    ui.appendChild(hint); ui.appendChild(dw); ui.appendChild(cnt);
    grid.insertAdjacentElement('beforebegin', ui);
  }

  function enable() {
    if (active) return;
    active = true;
    order = cards.map(function (_, i) { return i; });
    section.classList.add('svc-deck');
    cards.forEach(bindCard);
    if (!ui) buildUI();
    measure();
    if (document.fonts && document.fonts.ready) document.fonts.ready.then(measure);
  }
  function disable() {
    if (!active) return;
    active = false; busy = false; drag = null;
    section.classList.remove('svc-deck', 'swiped');
    cards.forEach(function (c) {
      unbindCard(c);
      c.style.cssText = '';
      c.classList.remove('is-top', 'is-dragging', 'is-flying');
      c.removeAttribute('aria-hidden');
      Array.prototype.forEach.call(c.querySelectorAll('a'), function (a) { a.removeAttribute('tabindex'); });
    });
    grid.style.height = '';
    if (ui && ui.parentNode) ui.parentNode.removeChild(ui);
    ui = null; dots = [];
  }
  function sync() { if (mq.matches) enable(); else disable(); }

  window.addEventListener('resize', function () { if (active) requestAnimationFrame(measure); });
  window.addEventListener('orientationchange', function () { if (active) requestAnimationFrame(measure); });
  if (window.visualViewport) window.visualViewport.addEventListener('resize', function () { if (active) requestAnimationFrame(measure); });
  if (mq.addEventListener) mq.addEventListener('change', sync);
  else if (mq.addListener) mq.addListener(sync);
  window.addEventListener('load', function () { if (active) measure(); });
  sync();
})();

/* ===== Док-стопка «реальный акт»: листание по клику (#garant) =====
   Клик по стопке → верхняя страница уезжает влево и встаёт в низ стопки. reduced-motion = мгновенная смена.
   Автоплея нет: листание только по клику (подсказка + стрелка-курсор показывают, что нужно нажать). */
(function () {
  var stack = document.querySelector('[data-doc-stack]');
  if (!stack) return;
  var deck = stack.querySelector('.doc-stack__deck');
  if (!deck) return;
  var cards = Array.prototype.slice.call(deck.querySelectorAll('.doc-card'));
  if (cards.length < 2) return;

  var reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var ANIM = 700;
  var order = cards.map(function (_, i) { return i; });
  var busy = false;

  stack.classList.add('is-live');

  function paint() {
    order.forEach(function (idx, depth) {
      var c = cards[idx];
      c.setAttribute('data-depth', depth > 2 ? 'back' : String(depth));
      c.setAttribute('aria-hidden', depth === 0 ? 'false' : 'true');
    });
  }

  function advance() {
    if (busy) return;
    var top = cards[order[0]];
    if (reduced) { order.push(order.shift()); paint(); return; }
    busy = true;
    top.classList.add('is-leaving');
    var done = function () {
      top.removeEventListener('transitionend', done);
      order.push(order.shift());            // ушедшая страница — в низ стопки
      top.classList.remove('is-leaving');
      top.style.transition = 'none';        // не анимировать возврат в низ
      paint();
      requestAnimationFrame(function () {
        requestAnimationFrame(function () { top.style.transition = ''; busy = false; });
      });
    };
    top.addEventListener('transitionend', done);
    setTimeout(function () { if (top.classList.contains('is-leaving')) done(); }, ANIM);
  }

  deck.addEventListener('click', function () { stack.classList.add('interacted'); advance(); });

  paint();
})();
