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

  /* ---------- rough-notation (рукописная обводка) ---------- */
  window.addEventListener('load', function () {
    try {
      var el = document.getElementById('mark-lead');
      if (el && window.RoughNotation && !reduced) {
        var a = window.RoughNotation.annotate(el, { type: 'underline', color: '#cc2018', strokeWidth: 3, padding: 2, multiline: true, iterations: 2 });
        setTimeout(function () { a.show(); }, 600);
      }
    } catch (e) {}
  });

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
    A: { title: 'Вам подойдёт: приёмка квартиры в новостройке', price: 'Ориентировочно: от 4 900 ₽',
      text: 'Пройдём 90+ параметров, найдём скрытые дефекты, оформим акт с печатью. Бесплатная повторная проверка после устранения уже в комплекте.' },
    B: { title: 'Вам подойдёт: дистанционная приёмка «под ключ»', price: 'Ориентировочно: от 9 900 ₽',
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
