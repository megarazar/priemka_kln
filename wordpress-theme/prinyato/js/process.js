/* ===== Лента этапов — нативная scroll-snap карусель (без скролл-джекинга) =====
   Базовый вид и горизонтальный скролл работают без JS (прогрессивно).
   JS добавляет: точки-прогресс, стрелки ‹/›, перетаскивание мышью, активное состояние.
   Никакого pin/scrolljacking — страница на месте, едет только лента. */
(function () {
  'use strict';
  var track = document.getElementById('processTrack');
  var dotsBox = document.getElementById('procDots');
  var prevBtn = document.getElementById('procPrev');
  var nextBtn = document.getElementById('procNext');
  if (!track) return;

  var steps = Array.prototype.slice.call(track.querySelectorAll('.pstep'));
  if (!steps.length) return;

  var current = 0;

  // --- точки навигации ---
  var dots = [];
  if (dotsBox) {
    steps.forEach(function (step, i) {
      var b = document.createElement('button');
      b.type = 'button';
      b.className = 'proc-dot' + (i === 0 ? ' is-active' : '');
      b.setAttribute('role', 'tab');
      b.setAttribute('aria-label', 'Шаг ' + (i + 1));
      b.addEventListener('click', function () { goTo(i); });
      dotsBox.appendChild(b);
      dots.push(b);
    });
  }

  function gutter() {
    return parseFloat(getComputedStyle(track).paddingLeft) || 0;
  }
  function maxScroll() {
    return Math.max(0, track.scrollWidth - track.clientWidth);
  }

  // целевой scrollLeft (клампленный), чтобы левый край шага i встал к началу колонки
  function scrollLeftFor(i) {
    return Math.max(0, Math.min(maxScroll(), steps[i].offsetLeft - gutter()));
  }

  // активный шаг = ближайшая клампленная цель к текущему scrollLeft; при ничьей — больший индекс
  function nearestIndex() {
    var sl = track.scrollLeft, idx = 0, min = Infinity;
    steps.forEach(function (s, n) {
      var d = Math.abs(scrollLeftFor(n) - sl);
      if (d <= min) { min = d; idx = n; } // <= → при равенстве берём дальний шаг
    });
    return idx;
  }

  // плавная rAF-анимация: присваиваем scrollLeft по кадрам
  // (браузерный scrollTo({behavior:'smooth'}) на вложенном треке сбивается тикером Lenis)
  var animId = null, animSafety = null;
  function finishAnim(target) {
    if (animId) { cancelAnimationFrame(animId); animId = null; }
    if (animSafety) { clearTimeout(animSafety); animSafety = null; }
    track.scrollLeft = target;
    track.style.scrollSnapType = '';
  }
  function animateTo(target) {
    if (animId) cancelAnimationFrame(animId);
    if (animSafety) clearTimeout(animSafety);
    var max = track.scrollWidth - track.clientWidth;
    target = Math.max(0, Math.min(max, target));
    var start = track.scrollLeft, dist = target - start, t0 = null, dur = 420;
    if (Math.abs(dist) < 2) { track.scrollLeft = target; return; }
    var reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    if (reduce) { track.scrollLeft = target; return; }
    // глушим snap на время анимации — иначе mandatory снапит промежуточные кадры обратно
    track.style.scrollSnapType = 'none';
    function ease(p) { return 1 - Math.pow(1 - p, 3); } // easeOutCubic
    function frame(ts) {
      if (t0 === null) t0 = ts;
      var p = Math.min(1, (ts - t0) / dur);
      track.scrollLeft = start + dist * ease(p);
      if (p < 1) { animId = requestAnimationFrame(frame); }
      else { finishAnim(target); }
    }
    animId = requestAnimationFrame(frame);
    // страховка от заморозки rAF (фоновая вкладка/троттлинг): доводим до цели по таймеру
    animSafety = setTimeout(function () { finishAnim(target); }, dur + 180);
  }

  function goTo(i) {
    i = Math.max(0, Math.min(steps.length - 1, i));
    animateTo(scrollLeftFor(i));
    setActive(i);
  }

  function setActive(i) {
    if (i === current) return;
    current = i;
    dots.forEach(function (d, n) { d.classList.toggle('is-active', n === i); });
    if (prevBtn) prevBtn.disabled = (i === 0);
    if (nextBtn) nextBtn.disabled = (i === steps.length - 1);
  }

  // --- активный шаг по позиции скролла (rAF-троттлинг) ---
  var ticking = false;
  track.addEventListener('scroll', function () {
    if (ticking) return;
    ticking = true;
    requestAnimationFrame(function () { setActive(nearestIndex()); ticking = false; });
  }, { passive: true });

  // --- стрелки ---
  if (prevBtn) prevBtn.addEventListener('click', function () { goTo(current - 1); });
  if (nextBtn) nextBtn.addEventListener('click', function () { goTo(current + 1); });

  // --- клавиатура (когда трек в фокусе) ---
  track.addEventListener('keydown', function (e) {
    if (e.key === 'ArrowRight') { e.preventDefault(); goTo(current + 1); }
    else if (e.key === 'ArrowLeft') { e.preventDefault(); goTo(current - 1); }
  });

  // --- перетаскивание мышью (drag-to-scroll) ---
  var down = false, startX = 0, startScroll = 0, moved = 0;
  track.addEventListener('pointerdown', function (e) {
    if (e.pointerType === 'touch') return; // тач скроллит сам
    down = true; moved = 0;
    startX = e.clientX; startScroll = track.scrollLeft;
    track.classList.add('is-dragging');
    track.setPointerCapture(e.pointerId);
  });
  track.addEventListener('pointermove', function (e) {
    if (!down) return;
    var dx = e.clientX - startX;
    moved = Math.abs(dx);
    track.scrollLeft = startScroll - dx;
  });
  function endDrag() {
    if (!down) return;
    down = false;
    track.classList.remove('is-dragging');
    goTo(nearestIndex()); // доводим до ближайшего шага
  }
  track.addEventListener('pointerup', endDrag);
  track.addEventListener('pointercancel', endDrag);
  // глушим переход по ссылке/клик, если это был драг
  track.addEventListener('click', function (e) {
    if (moved > 6) { e.preventDefault(); e.stopPropagation(); }
  }, true);
})();
