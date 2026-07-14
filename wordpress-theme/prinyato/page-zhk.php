<?php
/**
 * Шаблон страницы-хаба «Объекты и ЖК Калининграда» (/zhk/, WP page ID 19).
 * Подхватывается по слагу. Каталог реальных жилых комплексов региона (сданы/строятся)
 * с перелинковкой на гео-страницы и услуги — навигатор по рынку + повод для заявки.
 *
 * Фактура (названия ЖК, застройщики, сроки) собрана из открытых источников
 * (novostroyka39.ru, zastroyschiki39.ru) на дату публикации; часть объектов с
 * противоречивыми данными между источниками (напр. «Венецианский квартал»,
 * «Морская лагуна» в Зеленоградске) сюда НЕ включена как карточки — см. дисклеймер
 * в hero и упоминание без даты на соответствующих гео-страницах.
 *
 * CPT `zhk` не реализован (прод-стек — ручные page-{slug}.php, без CPT/ACF) —
 * карточки собраны как статичный список на `.svc-grid`/`.svc` (готовый слот
 * .price+ <small> под статус/срок сдачи), картинок ЖК в теме нет.
 * Слаг `zhk` НЕ добавлен в prinyato_service_map() — каталожной странице подходит
 * дефолтный текст попапа заявки. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-zhk">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Объекты и ЖК Калининграда","item":"https://prinyatopro.ru/zhk/" }
]}
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="zhk" data-section="zhk">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Каталог новостроек</span>
      <h1 class="sh">Объекты и ЖК Калининграда: где мы принимаем квартиры</h1>
      <p class="sec-lead">Собрали жилые комплексы Калининграда и побережья — какие уже сданы, какие строятся и когда должны сдать следующие очереди. Это навигатор по рынку, а не реестр наших приёмок: работаем по любому объекту в области, независимо от того, есть он в этом списке или нет.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость приёмки</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <div class="statband" data-reveal>
      <div class="stat"><b data-count="16">16</b><span>объектов в базе</span></div>
      <div class="stat"><b data-count="4">4</b><span>города и района</span></div>
      <div class="stat"><b>2026–2028</b><span>сроки сдачи</span></div>
      <div class="stat"><b>от 8 000 ₽</b><span>приёмка квартиры</span></div>
    </div>
    <p class="micro" data-reveal>Сроки сдачи и застройщиков уточняйте у самого застройщика — рынок меняется быстрее сайта. Данные собраны из открытых источников (наш.дом.рф, каталоги новостроек) на дату публикации страницы и не являются официальным подтверждением сроков.</p>
  </div>
</section>

<!-- ===== КАЛИНИНГРАД ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Калининград</span>
      <h2 class="sh">Новостройки Калининграда</h2>
      <p class="sec-lead">Город строит больше всего в области — здесь чаще всего заказывают приёмку <a class="more" href="/priemka-kvartiry-ot-zastroyschika/">от застройщика</a> и <a class="more" href="/priemka-kvartiry-v-novostroyke/">в новостройке</a>.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>ЖК «Русская Европа»</h3><p>ГК «Русская Европа», ул. Молодой Гвардии, 36.</p><div class="price">Первая очередь сдана <small>продолжение — 2026</small></div></div>
      <div class="svc"><span class="num-tag">02</span><h3>ЖК «Танго»</h3><p>ГК «Домарт», ул. Каблукова, Центральный р-н.</p><div class="price">Строится <small>сдача 2026</small></div></div>
      <div class="svc"><span class="num-tag">03</span><h3>ЖК «Кант Сити»</h3><p>СК «МПК», ул. Портовая.</p><div class="price">Строится <small>сдача 2026</small></div></div>
      <div class="svc"><span class="num-tag">04</span><h3>ЖК «Родина»</h3><p>ГК «Модуль-Стройград», ул. Коммунистическая, Московский р-н.</p><div class="price">Первая очередь сдана <small>продолжение — 2026</small></div></div>
    </div>
  </div>
</section>

<!-- ===== ЗЕЛЕНОГРАДСК ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зеленоградск</span>
      <h2 class="sh">Новостройки Зеленоградска</h2>
      <p class="sec-lead">Курортный город у дюн и Куршского залива — подробнее про приёмку здесь на странице <a class="more" href="/priemka-kvartir-zelenogradsk/">«Приёмка квартиры в Зеленоградске»</a>.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>ЖК «Яркий»</h3><p>Ул. Советская.</p><div class="price">Строится <small>сдача 1 кв. 2026</small></div></div>
      <div class="svc"><span class="num-tag">02</span><h3>ЖК «На Зелёной»</h3><p>Ул. Зелёная.</p><div class="price">Строится <small>сдача 1 кв. 2026</small></div></div>
      <div class="svc"><span class="num-tag">03</span><h3>ЖК «Исток»</h3><p>Ул. Ломоносова.</p><div class="price">Строится <small>сдача 2 кв. 2028</small></div></div>
      <div class="svc"><span class="num-tag">04</span><h3>ЖК «Атлантис»</h3><p>Ул. Кольцевая.</p><div class="price">Сдан <small>2023</small></div></div>
    </div>
    <p class="micro" data-reveal>Крупные проекты города — «Венецианский квартал» и «Морская лагуна» — тоже строятся, но сроки сдачи по разным источникам расходятся: уточняйте их напрямую у застройщика.</p>
  </div>
</section>

<!-- ===== СВЕТЛОГОРСК ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Светлогорск</span>
      <h2 class="sh">Новостройки Светлогорска</h2>
      <p class="sec-lead">Премиальный курортный сегмент, апартаменты «под ключ» — подробнее на странице <a class="more" href="/priemka-kvartir-svetlogorsk/">«Приёмка квартиры в Светлогорске»</a>.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Promenade</h3><p>Da development, ул. Морская.</p><div class="price">Первая очередь сдана <small>продолжение — 2026</small></div></div>
      <div class="svc"><span class="num-tag">02</span><h3>ЖК «Дивный дом»</h3><p>Ул. Лютая.</p><div class="price">Строится <small>сдача 4 кв. 2026</small></div></div>
      <div class="svc"><span class="num-tag">03</span><h3>ЖК «Новая история»</h3><p>Ул. Лермонтова.</p><div class="price">Строится <small>сдача 3 кв. 2026</small></div></div>
      <div class="svc"><span class="num-tag">04</span><h3>ЖК «Морская нота»</h3><p>Ул. Королькова.</p><div class="price">Строится <small>сдача 1 кв. 2027</small></div></div>
    </div>
  </div>
</section>

<!-- ===== ПИОНЕРСКИЙ ===== -->
<section class="sec" id="video" data-section="video">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Пионерский</span>
      <h2 class="sh">Новостройки Пионерского</h2>
      <p class="sec-lead">Компактный город с плотной застройкой — подробнее на странице <a class="more" href="/priemka-kvartir-pionerskiy/">«Приёмка квартиры в Пионерском»</a>.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>ЖК «МС18»</h3><p>ООО «МакроСтрой», ул. Октябрьская.</p><div class="price">Строится <small>сдача 2026</small></div></div>
      <div class="svc"><span class="num-tag">02</span><h3>ЖК «Три Симфонии»</h3><p>ООО «МакроСтрой».</p><div class="price">Строится <small>сдача 4 кв. 2026</small></div></div>
      <div class="svc"><span class="num-tag">03</span><h3>ЖК «МО'ре»</h3><p>СК «Меркурий», пос. Рыбное.</p><div class="price">Строится <small>сдача 2026–2027</small></div></div>
      <div class="svc"><span class="num-tag">04</span><h3>ЖК «Пионерский курорт»</h3><p>СК «Монолит».</p><div class="price">Строится <small>сдача 2027</small></div></div>
    </div>
  </div>
</section>

<!-- ===== ПОЧЕМУ ВАЖНА НЕЗАВИСИМАЯ ПРИЁМКА ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Наша позиция</span>
      <h2 class="sh">Почему в таких ЖК важна независимая приёмка</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Крупные жилые комплексы — что в Калининграде, что на побережье — почти всегда строятся очередями: несколько корпусов, одна проектная документация, одна и та же ремонтная и монтажная бригада. Если в проекте или в технологии есть системная ошибка — она с высокой вероятностью повторится не в одной квартире, а в десятках соседних, из корпуса в корпус.</p>
      <p>Курортные комплексы у моря добавляют свою специфику: более сложную отделку «под ключ», где легче спрятать недоделку, и климатические нагрузки — влажность, ветер, рельеф побережья — которые быстрее проявляют слабые места гидроизоляции и монтажа. Мы не привязываем эти общие закономерности к конкретному адресу без реальной приёмки — но именно поэтому советуем проверять квартиру приборами, а не доверять фразе «у соседей же всё нормально».</p>
    </div>
  </div>
</section>

<!-- ===== СВЯЗАННЫЕ УСЛУГИ ===== -->
<section class="sec" id="experts" data-section="experts">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуги</span>
      <h2 class="sh">Что можем проверить в вашем ЖК</h2>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Приёмка квартиры от застройщика</h3><p>Осмотр квартиры до или после подписания акта приёма-передачи.</p><a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Приёмка квартиры в новостройке</h3><p>Голые стены или предчистовая отделка — проверяем перед подписанием.</p><a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Дистанционная приёмка</h3><p>Для иногородних инвесторов: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы про список ЖК</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Откуда данные о сроках сдачи?</summary><p>Из открытых источников — единой информационной системы жилищного строительства наш.дом.рф и открытых каталогов новостроек Калининграда. Точную дату по конкретному объекту всегда лучше уточнять у застройщика — сроки на рынке регулярно сдвигаются.</p></details>
      <details data-reveal><summary>Вы работаете только по этим ЖК?</summary><p>Нет. Список — навигатор по рынку, а не ограничение: принимаем квартиры в любом доме и любом ЖК Калининграда и области, даже если его нет в этом перечне.</p></details>
      <details data-reveal><summary>Как часто обновляется список?</summary><p>По мере появления новых данных о вводе объектов в эксплуатацию. Если заметили неточность или хотите уточнить статус конкретного ЖК — напишите нам, поправим.</p></details>
      <details data-reveal><summary>Можно ли заказать приёмку в ЖК, которого нет в списке?</summary><p>Да, без ограничений. Оставьте заявку с адресом объекта — согласуем выезд так же, как и по любому другому дому.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Ваш дом сдаётся в ближайшее время?</h2>
      <p class="sec-lead">Оставьте адрес объекта — посчитаем стоимость приёмки и согласуем выезд инженера под дату застройщика.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

<a class="sticky-cta" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
</main>
<?php get_footer(); ?>
