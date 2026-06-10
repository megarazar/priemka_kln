/* ===== Плавный скролл (Lenis) =====
   Свой RAF-цикл (без зависимости от GSAP — его убрали ради скорости).
   reduced-motion → Lenis off, нативный скролл. */
(function () {
  'use strict';
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;
  if (typeof window.Lenis === 'undefined') return;

  var lenis = new window.Lenis({
    lerp: 0.12,            // ровное сглаживание без «медленно→разгон»
    smoothWheel: true,
    wheelMultiplier: 1,
    touchMultiplier: 1.2,
    syncTouch: false
  });
  window.__lenis = lenis;

  function raf(t) { lenis.raf(t); requestAnimationFrame(raf); }
  requestAnimationFrame(raf);

  /* якорные ссылки — плавно через Lenis, с поправкой на липкий хедер */
  document.querySelectorAll('a[href^="#"]').forEach(function (a) {
    a.addEventListener('click', function (e) {
      var href = a.getAttribute('href');
      if (href.length <= 1) return;
      var target = document.querySelector(href);
      if (!target) return;
      e.preventDefault();
      lenis.scrollTo(target, { offset: -72 });
    });
  });
})();
