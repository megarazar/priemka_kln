<?php
/**
 * Шаблон страницы «О компании» (/o-nas/). Подхватывается автоматически по слагу.
 * Дизайн-система темы prinyato (AURADESIGN). Текст — подготовка_страниц/03-o-nas-ФИНАЛ.md.
 * Эксперты на странице не показываем (решение клиента). Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"О компании","item":"https://prinyatopro.ru/o-nas/" }
]}
</script>

<!-- ===== HERO / КТО МЫ ===== -->
<section class="sec" id="o-nas" data-section="o-nas">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <h1 class="sh">О компании ПринятоПро</h1>
      <p class="sec-lead">Инженеры, которые работают на стороне клиента: помогаем понять реальное состояние квартиры или ремонта до того, как вы подпишете акт или рассчитаетесь со строителями.</p>
    </div>
    <div class="prose" data-reveal>
      <p>Покупаете квартиру у застройщика или делаете ремонт — и остаётесь один на один с теми, кому выгодно сдать работу побыстрее. Мы выравниваем эту ситуацию: приходим с приборами, проверяем объект по нормам и переводим «строительный язык» в понятные выводы.</p>
    </div>
    <div class="cta-row" data-reveal style="margin-top:18px">
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
  </div>
</section>

<!-- ===== ПРИНЦИПЫ ===== -->
<section class="sec" id="principy" data-section="principy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Принципы</span>
      <h2 class="sh">Как мы работаем</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Мы независимы от застройщиков и подрядчиков, поэтому смотрим в ваших интересах, а не в интересах «закрыть объект». Свою позицию подкрепляем доказательствами — актом, фотофиксацией, показаниями приборов, а не громкими гарантиями.</p>
      <p>Не запугиваем. Честно говорим, что критично, что подождёт, а что можно принять как есть. На выходе вы получаете не список терминов, а ясный ответ: принимать, принимать с замечаниями или требовать устранения.</p>
    </div>
  </div>
</section>

<!-- ===== ЧТО ДЕЛАЕМ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуги</span>
      <h2 class="sh">Чем мы помогаем</h2>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Приёмка квартиры от застройщика</h3><p>Проверка до или после подписания акта приёма-передачи.</p><a class="more" href="/priemka-kvartir/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Технический надзор ремонта</h3><p>Контроль качества на ключевых этапах ремонта.</p><a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Разовый технический аудит ремонта</h3><p>Один выезд: понять состояние работ или принять этап.</p><a class="more" href="/tseny/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">04</span><h3>Финальная приёмка ремонта</h3><p>Проверка перед окончательным расчётом со строителями.</p><a class="more" href="/tseny/">Подробнее →</a></div>
    </div>
    <p data-reveal style="margin-top:16px"><a class="more" href="/tseny/">Все услуги и цены →</a></p>
  </div>
</section>

<!-- ===== ЧЕМ ОТЛИЧАЕМСЯ ===== -->
<section class="sec" id="otlichiya" data-section="otlichiya">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Отстройка</span>
      <h2 class="sh">Почему выбирают нас</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span><b>Официальный акт с печатью.</b> Документ для переговоров с застройщиком и основа для юриста, а не «бумажка для галочки».</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg><span><b>Фотофиксация с привязкой к объекту.</b> Каждое замечание задокументировано — отмахнуться «фото чужое» не получится.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg><span><b>Дистанционная приёмка «под ключ».</b> Для клиентов из других регионов: осмотрим квартиру, пришлём акт, при необходимости покажем всё по видеосвязи.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Работаем по договору.</b> Цена и объём зафиксированы заранее, без доплат на месте.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="M12 12l5-3"/></svg><span><b>Профессиональное оборудование.</b> Приборы, которых нет под рукой у обычного покупателя.</span></li>
    </ul>
  </div>
</section>

<!-- ===== ЧЕГО НЕ ДЕЛАЕМ (бежевая, финальная, стык с футером) ===== -->
<section class="sec" id="granicy-o" data-section="granicy-o">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Чего мы не делаем</h2>
      <p class="sec-lead">Мы техническая, а не юридическая компания, и не обещаем лишнего.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор с застройщиком или подрядчиком от вашего имени.</li>
        <li>Не гарантируем, что все замечания устранят, и не обещаем исход суда.</li>
        <li>Не решаем за вас, платить подрядчику или нет, — мы даём техническое заключение, решение остаётся за вами.</li>
      </ul>
      <p>Нужна претензия или сопровождение — передадим запрос юристу-партнёру, и наш акт станет для этого основой.</p>
    </div>
    <div class="cta-row" data-reveal style="margin-top:22px">
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
