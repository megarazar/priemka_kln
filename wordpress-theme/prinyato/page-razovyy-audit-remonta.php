<?php
/**
 * Шаблон страницы «Разовый технический аудит ремонта» (/razovyy-audit-remonta/).
 * Подхватывается автоматически по слагу. Продукт №3 Продуктовой матрицы 2.0.
 * Дизайн-система темы prinyato (AURADESIGN). Те же ID секций, что у /tseny/ —
 * рваные края/фоны работают без правок CSS. Текст — подготовка_страниц/05-razovyy-audit-ФИНАЛ.md.
 * Meta title/description задаются в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Разовый технический аудит ремонта","item":"https://prinyatopro.ru/razovyy-audit-remonta/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Разовый технический аудит ремонта",
  "serviceType":"Технический аудит ремонта",
  "description":"Один выезд инженера, чтобы проверить состояние ремонта или принять отдельный этап перед расчётом с подрядчиком. Акт с фотофиксацией и рекомендациями.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"},
  "offers":{"@type":"Offer","priceCurrency":"RUB","price":"8000","description":"Приёмка одного этапа ремонта"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="audit" data-section="audit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуга</span>
      <h1 class="sh">Разовый технический аудит ремонта</h1>
      <p class="sec-lead">Один выезд инженера, чтобы понять реальное состояние ремонта или принять отдельный этап до того, как платить подрядчику. Осмотрим объект, сфотографируем замечания и выдадим акт — без помесячного договора.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
  </div>
</section>

<!-- ===== КОГДА НУЖЕН ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Кому подходит</span>
      <h2 class="sh">Когда нужен разовый аудит</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Ремонт идёт, но вы не уверены, что работы делают качественно.</li>
        <li>Подрядчик закончил этап — электрику, стяжку, штукатурку — и просит за него рассчитаться.</li>
        <li>Появились сомнения или спор с бригадой, нужен независимый взгляд.</li>
        <li>Хотите проверить объект разово, без месячного технадзора.</li>
      </ul>
      <p>Аудит отвечает на простой вопрос: нормально ли выполнены работы и что требовать от строителей, пока деньги ещё у вас.</p>
    </div>
  </div>
</section>

<!-- ===== ЧТО ВХОДИТ ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что вы получаете</span>
      <h2 class="sh">Что входит в аудит</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Выезд инженера на объект в удобное время.</li>
        <li>Осмотр текущего состояния ремонта или выбранного этапа с профессиональным оборудованием.</li>
        <li>Проверку доступных объёмов: качество, технологию, соответствие нормам и проекту.</li>
        <li>Фотофиксацию каждого замечания с привязкой к месту.</li>
        <li>Акт разового технического аудита с перечнем замечаний и рекомендациями.</li>
        <li>Понятное резюме: что критично, что можно принять, что переделать.</li>
      </ul>
      <p>Принять можно и один конкретный этап: электрику, сантехнику, инженерные сети, штукатурные, малярные или плиточные работы.</p>
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
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Приёмка одного этапа — 8 000 ₽.</b> Электрика, сантехника, стяжка, штукатурка, плитка или другой завершённый этап.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="M12 8v8M8 12h8"/></svg><span><b>Каждый следующий этап — +4 000 ₽.</b> Если в одном выезде нужно принять несколько этапов сразу.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/></svg><span><b>Аудит объекта — от 10 000 ₽.</b> По площади: до 40 м² — 10 000 ₽, дальше больше; точную сумму покажет калькулятор.</span></li>
    </ul>
    <p class="micro" data-reveal>Повторно пригласить инженера на этот же объект можно как новый выезд или перейти на месячный <a class="more" href="/tehnadzor-remonta-kvartiry/">технадзор ремонта</a>.</p>
  </div>
</section>

<!-- ===== ЧТО НЕ ВХОДИТ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что аудит не покрывает</h2>
      <p class="sec-lead">Сразу честно про границы услуги.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор со строителями от вашего имени.</li>
        <li>Не управляем устранением дефектов и не отвечаем за работу бригады.</li>
        <li>Не вскрываем уже закрытые конструкции — проверяем то, что доступно на момент выезда.</li>
        <li>Не решаем за вас, платить подрядчику или нет: даём техническое заключение, решение остаётся за вами.</li>
      </ul>
      <p>Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наш акт станет для этого основой.</p>
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
      <details data-reveal><summary>Чем разовый аудит отличается от технадзора?</summary><p>Технадзор — это сопровождение всего ремонта с регулярными выездами. Аудит — один выезд под конкретный вопрос: проверить этап или общее состояние объекта.</p></details>
      <details data-reveal><summary>Сколько длится осмотр?</summary><p>Обычно 1–2 часа. Предварительное резюме — за 2–3 часа, полный акт — в течение 24 часов.</p></details>
      <details data-reveal><summary>Можно ли вызвать инженера повторно?</summary><p>Да. Это оформляется как новый выезд либо как переход на месячный технадзор со своими условиями.</p></details>
      <details data-reveal><summary>Принимаете ли скрытые работы?</summary><p>Только пока они доступны для осмотра. После того как этап закрыт — например, стяжка залита поверх коммуникаций, — проверить его без вскрытия уже нельзя.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Закажите выезд инженера</h2>
      <p class="sec-lead">Опишите объект и этап работ — посчитаем стоимость и согласуем удобное время.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
