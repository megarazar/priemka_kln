<?php
/**
 * 404 — страница не найдена. WP отдаёт этот шаблон (вместо fallback index.php)
 * с корректным HTTP-статусом 404. Стиль — карточка «акт/досье», как /spasibo/:
 * переиспользуем классы .thanks-* (штамп, заголовок, кнопка), без правок общего CSS.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="thanks-main">
  <div class="wrap">
    <div class="thanks-card" data-reveal>
      <div class="thanks-hand" role="img" aria-label="Ошибка 404"><span class="thanks-hand-text">404</span></div>
      <h1 class="thanks-title">Такой страницы нет</h1>
      <p class="thanks-text">Похоже, адрес введён с ошибкой или страницу перенесли. Ничего страшного — вернитесь на главную или сразу перейдите к тому, что искали.</p>

      <nav class="e404-nav" aria-label="Куда пойти дальше" style="margin:26px auto 4px;display:flex;flex-wrap:wrap;gap:10px 24px;justify-content:center">
        <a class="thanks-call" href="/uslugi/">Услуги</a>
        <a class="thanks-call" href="/tseny/">Цены</a>
        <a class="thanks-call" href="/priemka-kvartiry-ot-zastroyschika/">Приёмка квартиры</a>
        <a class="thanks-call" href="/tehnadzor-remonta-kvartiry/">Технадзор ремонта</a>
        <a class="thanks-call" href="/kontakty/">Контакты</a>
      </nav>

      <div class="thanks-actions">
        <a class="btn" href="<?php echo esc_url( home_url( '/' ) ); ?>">Вернуться на главную</a>
        <a class="thanks-call" href="tel:+79062377902">Или позвоните: +7 (906) 237-79-02</a>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>
