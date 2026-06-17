<?php $T = get_template_directory_uri(); ?>
<!-- ===================== 14. ФУТЕР ===================== -->
<footer class="site-footer" data-section="footer">
  <div class="ft-inner">
    <div class="wrap">
      <h2>ПринятоПро — приёмка квартир и домов в Калининграде и области</h2>
      <p>Независимая приёмка квартир, домов и таунхаусов у застройщика и технический надзор за ремонтом в Калининграде, области и на побережье — Зеленоградск, Светлогорск, Пионерский. Находим скрытые дефекты, оформляем официальный акт с печатью, добиваемся устранения за счёт застройщика. Принимаем дистанционно по доверенности, даже если вы не в Калининграде.</p>

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
            <li><a href="/otzyvy/">Отзывы</a></li>
            <li><a href="/blog/">Блог</a></li>
            <li><a href="/kontakty/">Контакты</a></li>
          </ul>
        </div>
        <div>
          <h4>География</h4>
          <ul>
            <li><a href="/priemka-kvartir-zelenogradsk/">Зеленоградск</a></li>
            <li><a href="/priemka-kvartir-svetlogorsk/">Светлогорск</a></li>
            <li><a href="/priemka-kvartir-pionerskiy/">Пионерский</a></li>
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
  <div class="lead-modal__card" role="dialog" aria-modal="true" aria-label="Заявка на приёмку">
    <button class="lead-modal__close" type="button" data-lead-close aria-label="Закрыть">&times;</button>
    <span class="eyebrow">Заявка на приёмку</span>
    <h2 class="lead-modal__title">Узнайте стоимость приёмки вашей квартиры</h2>
    <p class="lead-modal__sub">Перезвоним в течение 15 минут, уточним детали объекта и назовём точную цену.</p>
    <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
  </div>
</div>

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
<?php wp_footer(); /* обязателен: грузит AJAX-скрипт CF7 (отправка без перезагрузки + событие wpcf7mailsent для редиректа на /spasibo/) */ ?>
</body>
</html>
