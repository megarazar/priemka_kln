/* ПринятоПро — квиз «Расчёт стоимости» (4 вопроса → контакты → Битрикс24).
 * Ответы пишутся в hidden-поле pp_quiz формы CF7 внутри квиза;
 * functions.php добавляет их в комментарий лида. Цена — ориентир, не оферта. */
(function () {
  'use strict';

  // Ориентировочные цены «от …₽»: тип объекта × площадь (s/m/l/xl).
  // Квартира — строго по тарифной сетке 2.0 (приёмка: до40=8000, 41-60=10000, 61-80=12000, 81-100=14000).
  // Дом в сетке отдельно не тарифицирован — оставляем прежний ориентир (≥ минимального чека 8000).
  var PRICES = {
    rough:     { s: 8000,  m: 10000, l: 12000, xl: 14000 },
    whitebox:  { s: 8000,  m: 10000, l: 12000, xl: 14000 },
    house:     { s: 9900,  m: 12500, l: 15500, xl: 19000 },
    renovated: { s: 8000,  m: 10000, l: 12000, xl: 14000 }
  };

  var quiz, steps, backBtn, stepNum, barFill;
  var current = 1, TOTAL = 5;
  var answers = {};       // {Объект: "...", Площадь: "...", ...}
  var priceType = '', priceArea = '';

  function show(n) {
    current = n;
    for (var i = 0; i < steps.length; i++) {
      steps[i].classList.toggle('is-active', Number(steps[i].dataset.step) === n);
    }
    stepNum.textContent = n;
    barFill.style.width = (n / TOTAL * 100) + '%';
    backBtn.hidden = (n === 1);
    if (n === 5) renderFinal();
    // Квиз на месте не дёргаем. Подкручиваем страницу только если его верх
    // ушёл под шапку (шаги разной высоты) — и то мягко, с отступом под header.
    var HEAD = 96;
    var top = quiz.getBoundingClientRect().top;
    if (top < HEAD - 26) {
      if (window.__lenis) { window.__lenis.scrollTo(quiz, { offset: -HEAD }); }
      else { window.scrollTo({ top: window.scrollY + top - HEAD, behavior: 'smooth' }); }
    }
  }

  function renderFinal() {
    var box = document.getElementById('ppqResult');
    var el = document.getElementById('ppqPrice');
    var p = (PRICES[priceType] || {})[priceArea];
    if (p) {
      el.textContent = 'от ' + p.toLocaleString('ru-RU') + ' ₽';
      box.hidden = false;
    } else {
      box.hidden = true;
    }
    // ответы → hidden pp_quiz в форме квиза
    var form = quiz.querySelector('form.wpcf7-form');
    if (!form) return;
    var hid = form.querySelector('input[name="pp_quiz"]');
    if (!hid) {
      hid = document.createElement('input');
      hid.type = 'hidden'; hid.name = 'pp_quiz';
      form.appendChild(hid);
    }
    var parts = [];
    Object.keys(answers).forEach(function (k) { parts.push(k + ': ' + answers[k]); });
    if (p) parts.push('Ориентир цены: от ' + p.toLocaleString('ru-RU') + ' ₽');
    hid.value = parts.join('; ');
  }

  document.addEventListener('DOMContentLoaded', function () {
    quiz = document.getElementById('ppQuiz');
    if (!quiz) return;
    steps = quiz.querySelectorAll('.ppq-step');
    backBtn = document.getElementById('ppqBack');
    stepNum = document.getElementById('ppqStepNum');
    barFill = document.getElementById('ppqBarFill');

    quiz.addEventListener('click', function (e) {
      var opt = e.target.closest('.ppq-opt');
      if (!opt) return;
      var step = opt.closest('.ppq-step');
      var key = step.dataset.key;
      answers[key] = opt.dataset.value;
      if (opt.dataset.price) priceType = opt.dataset.price;
      if (opt.dataset.area)  priceArea = opt.dataset.area;
      // подсветить выбор и перейти дальше
      var sib = step.querySelectorAll('.ppq-opt');
      for (var i = 0; i < sib.length; i++) sib[i].classList.remove('is-picked');
      opt.classList.add('is-picked');
      setTimeout(function () { show(Number(step.dataset.step) + 1); }, 180);
    });

    backBtn.addEventListener('click', function () { if (current > 1) show(current - 1); });
  });
})();
