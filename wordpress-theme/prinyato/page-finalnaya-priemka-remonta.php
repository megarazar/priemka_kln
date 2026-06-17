<?php
/**
 * Шаблон страницы «Финальная приёмка ремонта» (/finalnaya-priemka-remonta/).
 * Подхватывается автоматически по слагу. Продукт №4 Продуктовой матрицы 2.0.
 * Дизайн-система темы prinyato (AURADESIGN). Те же ID секций, что у /tseny/ —
 * рваные края/фоны работают без правок CSS. Текст — подготовка_страниц/06-finalnaya-priemka-ФИНАЛ.md.
 * Meta title/description задаются в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Финальная приёмка ремонта","item":"https://prinyatopro.ru/finalnaya-priemka-remonta/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Финальная приёмка ремонта",
  "serviceType":"Приёмка ремонта перед расчётом с подрядчиком",
  "description":"Техническая проверка квартиры или дома перед окончательным расчётом со строителями: финишная отделка, доступная инженерия, фотофиксация, акт.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="final" data-section="final">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуга</span>
      <h1 class="sh">Финальная приёмка ремонта</h1>
      <p class="sec-lead">Проверяем ремонт перед тем, как вы окончательно рассчитаетесь со строителями. Находим, что осталось доделать или переделать, и фиксируем это в акте — чтобы потом не исправлять недочёты за свой счёт.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
  </div>
</section>

<!-- ===== КОГДА НУЖНА ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Кому подходит</span>
      <h2 class="sh">Когда заказывают финальную приёмку</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Ремонт завершён или почти закончен, а подрядчик просит финальную оплату.</li>
        <li>Хотите принять работу осознанно, а не «на глаз».</li>
        <li>Нужен документ с замечаниями, по которому строители доделают недочёты.</li>
      </ul>
      <p>Это последняя точка, где замечания ещё можно предъявить до полного расчёта.</p>
    </div>
  </div>
</section>

<!-- ===== ЧТО ВХОДИТ ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что вы получаете</span>
      <h2 class="sh">Что проверяем</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Полный осмотр объекта и финишного состояния ремонта.</li>
        <li>Качество отделки: окрашенные стены, обои, напольные покрытия, плитку, примыкания и отверстия.</li>
        <li>Доступную инженерию и, при наличии, установленную мебель.</li>
        <li>Фотофиксацию каждого замечания.</li>
        <li>Акт финальной приёмки ремонта с перечнем недочётов и рекомендациями.</li>
      </ul>
    </div>
  </div>
</section>

<!-- ===== СКОЛЬКО СТОИТ (бежевая, icon-list) ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Стоимость</span>
      <h2 class="sh">Сколько стоит</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/></svg><span><b>Цена — от 15 000 ₽, по площади объекта.</b> Калькулятор покажет сумму за минуту.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/><path d="M9 12l3 3 5-6"/></svg><span><b>До 2 повторных проверок — по 50% от тарифа.</b> После того как бригада устранит замечания.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v5"/></svg><span><b>На месячном технадзоре?</b> Финальная проверка может пройти как один из плановых выездов оплаченного месяца.</span></li>
    </ul>
  </div>
</section>

<!-- ===== ЧТО НЕ ВХОДИТ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Чего финальная приёмка не делает</h2>
      <p class="sec-lead">Сразу честно про границы услуги.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор с подрядчиком от вашего имени.</li>
        <li>Не гарантируем, что все замечания устранят, и не управляем переделками.</li>
        <li>Не проверяем скрытые этапы, к которым уже нет доступа без вскрытия.</li>
        <li>Не решаем за вас вопрос оплаты — даём техническое заключение, а решение остаётся за вами.</li>
      </ul>
      <p>Нужна претензия — передадим запрос юристу-партнёру, и акт станет для неё основой.</p>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Чем финальная приёмка отличается от разового аудита?</summary><p>Аудит обычно проверяет промежуточный этап или общее состояние. Финальная приёмка — это проверка готового ремонта перед последним платежом подрядчику.</p></details>
      <details data-reveal><summary>Что делать с найденными замечаниями?</summary><p>Они попадают в акт. С этим документом вы просите бригаду доделать работы до окончательного расчёта.</p></details>
      <details data-reveal><summary>Сколько стоит повторная проверка?</summary><p>После устранения замечаний — 50% от тарифа, до двух повторных выездов.</p></details>
      <details data-reveal><summary>Успею ли до расчёта с бригадой?</summary><p>Осмотр занимает 1–2 часа, полный акт — до 24 часов. Финальную приёмку лучше заказывать до того, как отдадите последнюю оплату.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Проверьте ремонт перед финальным расчётом</h2>
      <p class="sec-lead">Расскажите про объект — посчитаем стоимость и согласуем удобное время выезда.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
