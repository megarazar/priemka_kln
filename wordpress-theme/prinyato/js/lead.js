/* ПринятоПро — UTM-захват + модальная форма заявки.
 * UTM из URL → cookie (90 дней) → скрытые поля во всех формах CF7 → $_POST → Битрикс24.
 * Попап: открытие по [data-lead-open], закрытие — крестик/оверлей/Esc. */
(function () {
  'use strict';

  var UTM_KEYS = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];

  function getCookie(n) {
    var m = document.cookie.match('(^|;)\\s*' + n + '\\s*=\\s*([^;]+)');
    return m ? decodeURIComponent(m.pop()) : '';
  }
  function setCookie(n, v, days) {
    var d = new Date();
    d.setTime(d.getTime() + days * 864e5);
    document.cookie = n + '=' + encodeURIComponent(v) + ';expires=' + d.toUTCString() + ';path=/;SameSite=Lax';
  }

  function capture() {
    var p = new URLSearchParams(location.search), store = {}, has = false;
    UTM_KEYS.forEach(function (k) { var v = p.get(k); if (v) { store[k] = v; has = true; } });
    if (has) { setCookie('pp_utm', JSON.stringify(store), 90); }
    if (!getCookie('pp_landing')) { setCookie('pp_landing', location.pathname + location.search, 90); }
    if (!getCookie('pp_referrer')) { setCookie('pp_referrer', document.referrer || '', 90); }
  }

  function getUTM() { try { return JSON.parse(getCookie('pp_utm') || '{}'); } catch (e) { return {}; } }

  function injectHidden(form) {
    if (form.dataset.ppInjected) return;
    form.dataset.ppInjected = '1';
    var utm = getUTM();
    var data = {
      utm_source: utm.utm_source || '', utm_medium: utm.utm_medium || '',
      utm_campaign: utm.utm_campaign || '', utm_content: utm.utm_content || '',
      utm_term: utm.utm_term || '',
      pp_referrer: getCookie('pp_referrer'),
      pp_landing: getCookie('pp_landing'),
      pp_page: location.pathname
    };
    Object.keys(data).forEach(function (k) {
      var i = document.createElement('input');
      i.type = 'hidden'; i.name = k; i.value = data[k];
      form.appendChild(i);
    });
  }
  function initForms() {
    var forms = document.querySelectorAll('form.wpcf7-form');
    for (var i = 0; i < forms.length; i++) injectHidden(forms[i]);
  }

  var modal;
  function openModal() {
    if (!modal) return;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.documentElement.style.overflow = 'hidden';
    initForms();
  }
  function closeModal() {
    if (!modal) return;
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    document.documentElement.style.overflow = '';
  }

  document.addEventListener('DOMContentLoaded', function () {
    capture();
    initForms();
    modal = document.getElementById('lead-modal');

    document.addEventListener('click', function (e) {
      var opener = e.target.closest('[data-lead-open]');
      if (opener) { e.preventDefault(); openModal(); return; }
      if (modal && modal.classList.contains('is-open')) {
        if (e.target.closest('[data-lead-close]') || e.target.classList.contains('lead-modal__overlay')) {
          e.preventDefault(); closeModal();
        }
      }
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' || e.keyCode === 27) closeModal();
    });
    // Закрыть модалку через 1.6с после успешной отправки формы внутри неё.
    document.addEventListener('wpcf7mailsent', function (e) {
      if (modal && modal.contains(e.target)) setTimeout(closeModal, 1600);
    });
  });
})();
