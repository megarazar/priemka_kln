<?php
/**
 * Шаблон страницы «Цены» (/tseny/). Подхватывается автоматически по слагу.
 * Дизайн-система темы prinyato (AURADESIGN). Цены — строго Продуктовая матрица 2.0.
 * Текст — подготовка_страниц/02-tseny-ФИНАЛ.md. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Цены","item":"https://prinyatopro.ru/tseny/" }
]}
</script>

<!-- ===== HERO / ВВОДНЫЙ ===== -->
<section class="sec" id="tseny" data-section="tseny">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Цены</span>
      <h1 class="sh">Цены на услуги</h1>
      <p class="sec-lead">Цена зависит от объекта: тип, площадь, набор работ. Мы считаем её заранее и записываем в договор — на выезде доплат не появится. Точную сумму по вашей квартире или ремонту калькулятор покажет за минуту.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Оставить заявку</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
  </div>
</section>

<!-- ===== ОСНОВНЫЕ УСЛУГИ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуги</span>
      <h2 class="sh">Основные услуги и стоимость</h2>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc">
        <span class="num-tag">01</span>
        <h3>Приёмка квартиры от застройщика</h3>
        <p>Осматриваем квартиру до или после подписания акта приёма-передачи. Находим дефекты, фиксируем фото и в акте, говорим простым языком: что принимать, а что застройщик обязан исправить. Повторный выезд после устранения — 50% от первичной приёмки.</p>
        <div class="price">по площади <small>расчёт за минуту</small></div>
        <a class="more" href="/priemka-kvartir/">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">02</span>
        <h3>Технический надзор ремонта</h3>
        <p>Регулярно проверяем качество ремонта на ключевых этапах, акт после каждого выезда. «Мини» (до 80 м², 2 выезда/мес) — 16 000 ₽/мес. «Стандарт» (4 выезда/мес) — от 30 000 ₽/мес.</p>
        <div class="price">от 16 000 ₽/мес <small>«Мини»</small></div>
        <a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">03</span>
        <h3>Разовый технический аудит ремонта</h3>
        <p>Один выезд инженера: проверить состояние ремонта или принять отдельный этап перед расчётом с подрядчиком. Каждый следующий этап в том же выезде — +4 000 ₽.</p>
        <div class="price">8 000 ₽ <small>за этап</small></div>
        <a class="more" href="/tseny/#dop">Подробнее →</a>
      </div>
      <div class="svc">
        <span class="num-tag">04</span>
        <h3>Финальная приёмка ремонта</h3>
        <p>Проверяем квартиру или дом перед окончательным расчётом со строителями: финишная отделка, доступная инженерия, фотофиксация, акт. До 2 повторных проверок — по 50% от тарифа.</p>
        <div class="price">по площади <small>расчёт за минуту</small></div>
        <a class="more" href="/tseny/#dop">Подробнее →</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Дополнительно</span>
      <h2 class="sh">Дополнительные услуги</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 11.5a8.5 8.5 0 0 1-12.5 7.5L3 21l2-5.5A8.5 8.5 0 1 1 21 11.5z"/></svg><span><b>Онлайн-консультация инженера.</b> До 1 часа, без выезда и акта — 5 000 ₽.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 14.8V5a2 2 0 1 0-4 0v9.8a4 4 0 1 0 4 0z"/></svg><span><b>Тепловизионное обследование.</b> Отдельным выездом — 6 000 ₽. В составе основной услуги — +3 000 ₽.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2 4 14h6l-1 8 9-12h-6l1-8z"/></svg><span><b>Срочный выезд.</b> В течение 3 часов, если есть свободный инженер — +50% к тарифу.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><path d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg><span><b>Выезд по области.</b> Радиус до 70 км — +500 ₽. Суббота — рабочий день; воскресенье и праздники — двойной тариф.</span></li>
    </ul>
  </div>
</section>

<!-- ===== ЧТО ВХОДИТ ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">В любой услуге</span>
      <h2 class="sh">Что вы получаете в любом случае</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Выезд профильного инженера на объект.</li>
        <li>Осмотр с профессиональным оборудованием: правило и рейка, уровень, рулетка, склерометр. Тепловизор — по запросу.</li>
        <li>Фотофиксацию всех замечаний.</li>
        <li>Акт с перечнем дефектов, комментариями и рекомендациями.</li>
        <li>Понятное резюме: что критично, что можно принять, что требовать устранить.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== ЧЕГО НЕ ДЕЛАЕМ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что в стоимость не входит</h2>
      <p class="sec-lead">Мы защищаем клиента технически, поэтому сразу про границы.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор с застройщиком или подрядчиком от вашего имени.</li>
        <li>Не гарантируем устранение замечаний и не обещаем исход суда.</li>
        <li>Не вскрываем конструкции и не считаем полную смету ремонта.</li>
      </ul>
      <p>Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наш акт станет для этого основой. Это техническая работа, а не судебная экспертиза, если её не оформить отдельно.</p>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Вопросы о стоимости</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>От чего зависит цена приёмки?</summary><p>От площади и типа объекта (студия, 1–4-комнатная, дом, таунхаус) и набора опций — например, тепловизора или выезда в область. Точную сумму считает калькулятор и фиксирует договор.</p></details>
      <details data-reveal><summary>Нужно ли доплачивать за повторный выезд?</summary><p>Да. Повторная проверка ранее найденных замечаний стоит 50% от первичной услуги. Если это полноценная новая проверка, она оплачивается как новый выезд.</p></details>
      <details data-reveal><summary>Берёте ли предоплату?</summary><p>Технадзор оплачивается помесячно вперёд. По разовым услугам условия фиксируются в договоре.</p></details>
      <details data-reveal><summary>Выезжаете ли в область?</summary><p>Да, по Калининградской области в радиусе до 70 км. Доплата за выезд за город — 500 ₽.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, рваные края сверху/снизу) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Расчёт</span>
      <h2 class="sh">Рассчитайте цену по своему объекту</h2>
      <p class="sec-lead">Ответьте на несколько вопросов — покажем стоимость и согласуем удобное время выезда.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать цену</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
