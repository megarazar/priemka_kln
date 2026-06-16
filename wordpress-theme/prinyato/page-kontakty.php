<?php
/**
 * Шаблон страницы «Контакты» (/kontakty/). Подхватывается автоматически по слагу.
 * Дизайн-система темы prinyato (AURADESIGN). NAP/телефон — память client-nap.
 * Meta title/description задаются в Yoast (см. подготовка_страниц/04-kontakty-ФИНАЛ.md).
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Контакты","item":"https://prinyatopro.ru/kontakty/" }
]}
</script>

<!-- ===== HERO / КОНТАКТЫ ===== -->
<section class="sec" id="kontakty" data-section="kontakty">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <h1 class="sh">Контакты</h1>
      <p class="sec-lead">Позвоните или напишите — согласуем выезд инженера на приёмку квартиры или технадзор по Калининграду и области.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><h3>Телефон</h3><p><a href="tel:+79062377902">+7 (906) 237-79-02</a></p></div>
      <div class="svc"><h3>Telegram</h3><p><a href="https://t.me/prinyatopro" target="_blank" rel="noopener noreferrer">@prinyatopro</a></p></div>
      <div class="svc"><h3>ВКонтакте</h3><p><a href="https://vk.com/prinyatopro" target="_blank" rel="noopener noreferrer">vk.com/prinyatopro</a></p></div>
      <div class="svc"><h3>E-mail</h3><p><a href="mailto:v.kuli4kin.pro@yandex.ru">v.kuli4kin.pro@yandex.ru</a></p></div>
      <div class="svc"><h3>Режим работы</h3><p>Ежедневно с 9:00 до 19:00</p></div>
      <div class="svc"><h3>Адрес</h3><p>Калининград, ул. Челнокова, 9, помещение 4, кабинет 410</p></div>
    </div>
    <div class="cta-row" data-reveal style="margin-top:22px">
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
