<?php
/**
 * Шаблон страницы «Услуги» (/uslugi/). Подхватывается по слагу (WP page ID 17).
 * Короткий обзор-навигатор: 4 услуги Продуктовой матрицы 2.0 + дистанционная + частные случаи приёмки.
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у /tseny/ — рваные края без правок CSS.
 * Перелинковка-хаб на услуги и SEO-детей. Цены по тарифной сетке. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Услуги","item":"https://prinyatopro.ru/uslugi/" }
]}
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="uslugi-hero" data-section="uslugi-hero">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуги</span>
      <h1 class="sh">Услуги ПринятоПро</h1>
      <p class="sec-lead">Независимая техническая проверка на всех этапах: принять квартиру у застройщика, проконтролировать ремонт и принять работу у бригады. Ниже — что входит в каждую услугу и сколько стоит.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Подобрать и рассчитать</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
  </div>
</section>

<!-- ===== ОСНОВНЫЕ УСЛУГИ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что мы делаем</span>
      <h2 class="sh">Основные услуги</h2>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc">
        <span class="num-tag">01</span>
        <h3>Приёмка квартиры от застройщика</h3>
        <p>Инструментальный осмотр до или после подписания акта: геометрия, окна, электрика, сантехника, вентиляция, тепловой контур. Дефектная ведомость и официальный акт с печатью.</p>
        <div class="price">от 8 000 ₽ <small>по площади</small></div>
        <a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">02</span>
        <h3>Технический надзор ремонта</h3>
        <p>Контроль качества ремонта на ключевых этапах, пока работает ваша бригада: инженерка, гидроизоляция, стяжка, плитка, финиш. Акт после каждого выезда.</p>
        <div class="price">от 16 000 ₽/мес <small>«Мини»</small></div>
        <a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">03</span>
        <h3>Разовый технический аудит ремонта</h3>
        <p>Один выезд инженера: проверить состояние ремонта или принять отдельный этап перед расчётом с подрядчиком. Акт с фотофиксацией и рекомендациями.</p>
        <div class="price">от 10 000 ₽ <small>разовый выезд</small></div>
        <a class="more" href="/razovyy-audit-remonta/">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">04</span>
        <h3>Финальная приёмка ремонта</h3>
        <p>Проверка готового ремонта перед окончательным расчётом со строителями: качество отделки, доступная инженерия, недочёты — всё в акт.</p>
        <div class="price">от 15 000 ₽ <small>по площади</small></div>
        <a class="more" href="/finalnaya-priemka-remonta/">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">05</span>
        <h3>Дистанционная приёмка</h3>
        <p>Для иногородних: примем квартиру по доверенности, покажем всё по видеосвязи и пришлём официальный акт — без вашего приезда в Калининград.</p>
        <div class="price">от 11 000 ₽ <small>по доверенности</small></div>
        <a class="more" href="/distantsionnaya-priemka/">Подробнее →</a>
      </div>
      <div class="svc" style="justify-content:center;align-items:flex-start;background:var(--ink);color:var(--paper-2)">
        <h3 style="color:#fff">Не знаете, что выбрать?</h3>
        <p style="color:#d3c8b2">Опишите объект и стадию — подберём услугу и посчитаем ориентировочную цену.</p>
        <a class="btn" href="#lead-modal" data-lead-open style="margin-top:14px">Подобрать и рассчитать</a>
      </div>
    </div>
    <p class="micro" data-reveal>Точную цену зафиксируем в договоре, без «доплат на месте». Полный прайс — на странице <a class="more" href="/tseny/">цены</a>.</p>
  </div>
</section>

<!-- ===== ЧАСТНЫЕ СЛУЧАИ ПРИЁМКИ ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Ваш случай</span>
      <h2 class="sh">Частные случаи приёмки</h2>
      <p class="sec-lead">У каждой ситуации свои нюансы — выберите свой случай приёмки от застройщика.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Приёмка квартиры в новостройке</h3><p>Голые стены или предчистовая отделка — проверяем перед подписанием акта.</p><a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Приёмка домов и таунхаусов</h3><p>Кровля, фундамент, участок, инженерия — дом сложнее квартиры.</p><a class="more" href="/priemka-domov/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Приёмка квартиры после ремонта</h3><p>Принимаем квартиру с чистовой отделкой от застройщика.</p><a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Подберём услугу под ваш объект</h2>
      <p class="sec-lead">Опишите квартиру, дом или стадию ремонта — поможем выбрать формат и посчитаем стоимость.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

<a class="sticky-cta" href="#lead-modal" data-lead-open>Подобрать услугу</a>
</main>
<?php get_footer(); ?>
