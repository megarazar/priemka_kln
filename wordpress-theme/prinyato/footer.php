<?php $T = get_template_directory_uri(); ?>
<!-- ===================== 14. ФУТЕР ===================== -->
<footer class="site-footer" data-section="footer">
  <div class="ft-inner">
    <div class="wrap">
      <h2>ПринятоПро — приёмка квартир и домов в Калининграде и области</h2>
      <p>Независимая приёмка квартир, домов и таунхаусов у застройщика и технический надзор за ремонтом в Калининграде, области и на побережье — Зеленоградск, Светлогорск, Пионерский. Находим скрытые дефекты, оформляем официальный акт осмотра, добиваемся устранения за счёт застройщика. Принимаем дистанционно по доверенности, даже если вы не в Калининграде.</p>

      <div class="ft-cols">
        <div>
          <h4>Услуги</h4>
          <ul>
            <li><a href="/priemka-kvartiry-v-novostroyke/">Приёмка в новостройке</a></li>
            <li><a href="/priemka-kvartiry-ot-zastroyschika/">Приёмка от застройщика</a></li>
            <li><a href="/priemka-domov/">Приёмка домов</a></li>
            <li><a href="/priemka-kvartiry-posle-remonta/">Приёмка после ремонта</a></li>
            <li><a href="/tehnadzor-remonta-kvartiry/">Технадзор за ремонтом</a></li>
            <li><a href="/distantsionnaya-priemka/">Дистанционная приёмка</a></li>
          </ul>
        </div>
        <div>
          <h4>Компания</h4>
          <ul>
            <li><a href="/o-nas/">О нас</a></li>
            <li><a href="/tseny/">Цены</a></li>
            <li><a href="/blog/">Блог</a></li>
            <li><a href="/zhk/">Объекты и ЖК</a></li>
            <li><a href="/kontakty/">Контакты</a></li>
          </ul>
        </div>
        <div>
          <h4>География</h4>
          <ul>
            <li><a href="/priemka-kvartir-zelenogradsk/">Зеленоградск</a></li>
            <li><a href="/priemka-kvartir-svetlogorsk/">Светлогорск</a></li>
            <li><a href="/priemka-kvartir-pionerskiy/">Пионерский</a></li>
            <li>Балтийск</li>
            <li>Янтарный</li>
            <li>Гурьевск</li>
          </ul>
        </div>
        <div>
          <h4>Контакты</h4>
          <ul>
            <li><a href="tel:+79062377902">+7 (906) 237-79-02</a></li>
            <li><a href="https://t.me/prinyatopro" target="_blank" rel="noopener noreferrer">Telegram</a> · <a href="https://vk.com/prinyatopro" target="_blank" rel="noopener noreferrer">ВКонтакте</a></li>
            <li>Калининград, ул. Челнокова, 9, помещение 4, кабинет 410</li>
            <li>Ежедневно 9:00–19:00</li>
          </ul>
        </div>
      </div>
      <nav class="ft-policy" aria-label="Правовая информация">
        <a href="/privacy-policy/">Политика конфиденциальности</a>
        <a href="/soglasie-na-obrabotku-pd/">Согласие на обработку персональных данных</a>
        <a href="/politika-cookie/">Политика cookies</a>
      </nav>
      <div class="ft-legal">© 2026 ПринятоПро. ИП Куличкин Владислав Андреевич, ИНН 391405987495, ОГРНИП 325390000055413. Цены на сайте ориентировочные, не являются публичной офертой; точная стоимость фиксируется в договоре.</div>
    </div>
  </div>
</footer>

<!-- ===================== МОДАЛЬНАЯ ФОРМА ЗАЯВКИ ===================== -->
<div class="lead-modal" id="lead-modal" aria-hidden="true">
  <div class="lead-modal__overlay" data-lead-close></div>
  <?php $pp_lc = prinyato_lead_copy(); /* заголовок попапа под услугу текущей страницы */ ?>
  <div class="lead-modal__card" role="dialog" aria-modal="true" aria-label="Заявка на приёмку">
    <button class="lead-modal__close" type="button" data-lead-close aria-label="Закрыть">&times;</button>
    <span class="eyebrow"><?php echo esc_html( $pp_lc['eyebrow'] ); ?></span>
    <h2 class="lead-modal__title"><?php echo esc_html( $pp_lc['title'] ); ?></h2>
    <p class="lead-modal__sub"><?php echo esc_html( $pp_lc['sub'] ); ?></p>
    <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
  </div>
</div>

<!-- Уведомление о сборе данных (152-ФЗ) — показывается один раз (запоминается в localStorage) -->
<div class="pd-consent" id="pdConsent" role="region" aria-label="Уведомление об обработке персональных данных">
  <button class="pd-consent__close" type="button" data-pd-close aria-label="Скрыть сообщение">&times;</button>
  <p class="pd-consent__text">При посещении сайта происходит автоматический сбор обезличенных данных с использованием сервиса Яндекс.Метрика. <a href="/privacy-policy/">Обработка персональных данных</a> осуществляется в соответствии с Федеральным законом №152-ФЗ «О персональных данных».</p>
  <button class="pd-consent__btn" type="button" data-pd-close>ОК, скрыть сообщение</button>
</div>

<?php /* [АРХИВ] Кастомный виджет быстрой связи (TG+MAX) отключён; вместо него чат-виджет Suvvy (скрипт ниже). Разметка сохранена для быстрого возврата; стили .cfab (css/styles.css) и логика #contactFab (js/main.js) инертны без этого блока. */ if (false): ?>
<!-- Плавающий виджет быстрой связи (TG + MAX) — появляется после 2-го экрана -->
<div class="cfab" id="contactFab">
  <div class="cfab__opts">
    <a class="cfab__opt cfab__opt--tg" href="https://t.me/prinyatoprokld" target="_blank" rel="noopener noreferrer" aria-label="Написать менеджеру в Telegram" tabindex="-1"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a>
    <a class="cfab__opt cfab__opt--max" href="https://max.ru/u/f9LHodD0cOK3Yq9kgn81PXJtOp0m5d_rycDzkp4gQoCqpfLeI7UFhFmELIk" target="_blank" rel="noopener noreferrer" aria-label="Написать менеджеру в MAX" tabindex="-1"><svg viewBox="0 0 1000 1000" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M508.211 878.328c-75.007 0-109.864-10.95-170.453-54.75-38.325 49.275-159.686 87.783-164.979 21.9 0-49.456-10.95-91.248-23.36-136.873-14.782-56.21-31.572-118.807-31.572-209.508 0-216.626 177.754-379.597 388.357-379.597 210.785 0 375.947 171.001 375.947 381.604.707 207.346-166.595 376.118-373.94 377.224m3.103-571.585c-102.564-5.292-182.499 65.7-200.201 177.024-14.6 92.162 11.315 204.398 33.397 210.238 10.585 2.555 37.23-18.98 53.837-35.587a189.8 189.8 0 0 0 92.71 33.032c106.273 5.112 197.08-75.794 204.215-181.95 4.154-106.382-77.67-196.486-183.958-202.574Z"/></svg></a>
  </div>
  <button class="cfab__toggle" type="button" id="contactFabToggle" aria-expanded="false" aria-label="Быстрая связь: Telegram и MAX">
    <svg class="cfab__ic cfab__ic--chat" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/></svg>
    <svg class="cfab__ic cfab__ic--close" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" aria-hidden="true"><path d="M18 6 6 18M6 6l12 12"/></svg>
  </button>
</div>
<?php endif; /* /АРХИВ cfab */ ?>

<!-- вендоры (локально, buildless, вне критического пути LCP) -->
<?php
/* версия = mtime файла: сбрасывает 7-дневный браузерный кэш статики при каждом деплое */
function prinyato_js($T, $rel) {
  echo '<script src="' . $T . '/js/' . $rel . '?v=' . filemtime(get_template_directory() . '/js/' . $rel) . '" defer></script>' . "\n";
}
prinyato_js($T, 'vendor/lenis.min.js');
prinyato_js($T, 'vendor/rough-notation.iife.js');
/* наши скрипты */
prinyato_js($T, 'smooth-scroll.js');
prinyato_js($T, 'process.js');
prinyato_js($T, 'main.js');
prinyato_js($T, 'lead.js');
prinyato_js($T, 'quiz.js');
?>
<!-- Suvvy — виджет ИИ-чата (агент: консультация + запись через YClients/CRM; внутри ссылки на Telegram/MAX).
     Грузим не сразу, а после прокрутки первого экрана — чтобы кнопка не появлялась при первом взгляде.
     НЕ грузим на арбитражных лендингах /telegram/ и /max/ — там ничего не продаём. -->
<?php if ( ! is_page( array( 'telegram', 'max' ) ) ) : ?>
<script>
(function () {
  var loaded = false;
  function loadSuvvy() {
    if (loaded) return;
    loaded = true;
    window.removeEventListener('scroll', onScroll);
    var s = document.createElement('script');
    s.src = 'https://storage1.suvvy.ai/widget/loader.js';
    s.async = true;
    s.setAttribute('data-widget-id', '6a043e6c21465c6acd75b9756a4e3f231d6ab0d238c3b2fa');
    s.setAttribute('data-lang', 'ru');
    document.body.appendChild(s);
  }
  function onScroll() {
    if (window.pageYOffset > window.innerHeight * 0.9) loadSuvvy();
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
})();
</script>
<?php endif; /* /Suvvy — не на /telegram/ и /max/ */ ?>
<?php wp_footer(); /* обязателен: грузит AJAX-скрипт CF7 (отправка без перезагрузки + событие wpcf7mailsent для редиректа на /spasibo/) */ ?>
</body>
</html>
