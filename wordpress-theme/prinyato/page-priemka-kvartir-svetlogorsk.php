<?php
/**
 * Шаблон гео-страницы «Приёмка квартиры в Светлогорске» (/priemka-kvartir-svetlogorsk/).
 * Подхватывается по слагу (WP page ID 25). Прямой Wordstat-спрос по городу = 0 —
 * это SEO/GEO-плей; страница уже ранжируется (Topvisor 2026-06-17: позиция 3) даже
 * будучи пустой, наполнение призвано закрепить/усилить позицию, не начать с нуля.
 * Дизайн-система prinyato (AURADESIGN), урезанный формат по образцу
 * page-distantsionnaya-priemka.php. Угол: более высокий класс отделки/апартаменты
 * «под ключ» → приёмка после ремонта/финальная приёмка; инженерный угол — рельеф
 * города (обрыв/склоны), гидроизоляция и дренаж. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-geo page-geo-svetlogorsk">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Приёмка квартиры в Светлогорске","item":"https://prinyatopro.ru/priemka-kvartir-svetlogorsk/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Приёмка квартиры в Светлогорске",
  "serviceType":"Приёмка квартиры от застройщика",
  "description":"Независимая приёмка квартиры и апартаментов в Светлогорске: проверка отделки и инженерии, гидроизоляции и дренажа, фиксация дефектов фото и официальным актом осмотра.",
  "areaServed":[{"@type":"City","name":"Светлогорск"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="svetlogorsk" data-section="svetlogorsk">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Курортное побережье</span>
      <h1 class="sh">Приёмка квартиры в Светлогорске</h1>
      <p class="sec-lead">Светлогорск — премиальный курортный сегмент: апартаменты и квартиры с отделкой «под ключ» от застройщика, часто выше классом, чем типовая новостройка Калининграда. Чем сложнее отделка, тем больше в ней мест, где можно спрятать недоделку. Проверяем с приборами до подписания акта.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <p class="micro" data-reveal>Официальный акт осмотра · Фото дефектов с привязкой к квартире · Проверка чистовой отделки и инженерии · Выезд в Светлогорск и по побережью</p>
    <div class="statband statband--ink" data-reveal>
      <div class="stat"><b>1–2 ч</b><span>длится осмотр</span></div>
      <div class="stat"><b data-count="15" data-suffix=" мин">15 мин</b><span>на полный акт</span></div>
      <div class="stat"><b data-count="50" data-suffix="%">50%</b><span>повторный выезд</span></div>
      <div class="stat"><b>от 8 000 ₽</b><span>цена — в договоре</span></div>
    </div>
  </div>
</section>

<!-- ===== ЗАЧЕМ ИМЕННО ЗДЕСЬ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зачем это нужно</span>
      <h2 class="sh">Чем выше класс отделки, тем важнее приёмка</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Светлогорск (бывший Раушен) строится в основном как курортный город: апартаменты и квартиры чаще сдаются с чистовой или предчистовой отделкой «под ключ», а не голыми стенами. Это удобно для инвестора — не нужно самому нанимать ремонтную бригаду. Но чем больше слоёв отделки, тем проще спрятать под ними кривую стяжку, плохую гидроизоляцию или недоделанную электрику — и тем сложнее заметить это без приборов.</p>
      <p>Второй нюанс — рельеф. Город стоит на обрывистом берегу, застройка идёт на склонах и террасах. Это повышает требования к дренажу, отмостке и гидроизоляции нижних этажей и подземных паркингов — вода с уклона должна уходить, а не скапливаться у фундамента.</p>
    </div>
  </div>
</section>

<!-- ===== ТИПИЧНЫЕ ОСОБЕННОСТИ ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">На что смотрим особо</span>
      <h2 class="sh">Что чаще всего находим в апартаментах Светлогорска</h2>
      <p class="sec-lead">Если квартира сдаётся с отделкой — проверяем не только конструктив, но и качество финишных работ.</p>
    </div>
    <div class="dist-grid">
      <ul class="dist-list dl-light">
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21h18M5 21V8l7-5 7 5v13"/><path d="M9 21v-6h6v6"/></svg><span><b>Качество чистовой отделки.</b> Ровность стен под обоями и плиткой, стыки напольных покрытий, отсутствие пустот под плиткой — проверяем инструментально, не на глаз.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0z"/><path d="M12 13a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/></svg><span><b>Гидроизоляция и дренаж.</b> Санузлы, балконы, паркинг — рельеф города повышает риск подтоплений и требует особого внимания к отводу воды.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2 4 14h7l-2 8 9-12h-7z"/></svg><span><b>Доступная инженерия.</b> Розетки, выключатели, сантехнические приборы — работают ли по факту, а не только выглядят смонтированными.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M4 9h16M12 3v18"/></svg><span><b>Окна и остекление.</b> В апартаментах у моря часто панорамное остекление — проверяем герметичность швов и работу фурнитуры отдельно на каждой створке.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v6M12 21a6 6 0 0 0 6-6c0-2-2-5-6-9-4 4-6 7-6 9a6 6 0 0 0 6 6z"/></svg><span><b>Вентиляция.</b> Тяга в каждом канале — особенно критично во влажных помещениях курортной отделки.</span></li>
      </ul>
      <div>
        <picture class="dist-pic" data-reveal>
          <img src="<?php echo $T; ?>/assets/img/dist-remote.jpg" alt="Приёмка квартиры в Светлогорске: инженер проверяет качество чистовой отделки" width="600" height="600" loading="lazy" decoding="async">
        </picture>
      </div>
    </div>
  </div>
</section>

<!-- ===== ЕСЛИ КВАРТИРА УЖЕ С РЕМОНТОМ ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Формат приёмки</span>
      <h2 class="sh">Готовая отделка — не повод пропустить приёмку</h2>
      <p class="sec-lead">Для квартир и апартаментов «под ключ» подходит не только базовая приёмка от застройщика, но и более прицельные форматы.</p>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Приёмка после ремонта от застройщика</b> — если квартира уже сдана с полной чистовой отделкой, проверяем именно её качество, включая скрытые дефекты тепловизором и влагомером.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Финальная приёмка</b> — если параллельно с застройщиком доделку вела своя ремонтная бригада, проверим объект перед окончательным расчётом с подрядчиком.</span></li>
    </ul>
    <p class="micro" data-reveal>Подробнее — на страницах <a class="more" href="/priemka-kvartiry-posle-remonta/">«Приёмка после ремонта»</a> и <a class="more" href="/finalnaya-priemka-remonta/">«Финальная приёмка ремонта»</a>.</p>
  </div>
</section>

<!-- ===== ЧТО СТРОИТСЯ В СВЕТЛОГОРСКЕ ===== -->
<section class="sec" id="video" data-section="video">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Рынок города</span>
      <h2 class="sh">Что сейчас строится в Светлогорске</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Среди действующих проектов — комплекс апартаментов Promenade от Da development на улице Морской (первая очередь уже сдана, продолжение — 2026 год) и ряд объектов на улице Лермонтова и Лютой, заявленных к сдаче в 2026–2027 годах. Часть застройки в городе уже завершена в 2022–2025 годах — курортный сегмент здесь строится и заселяется активно.</p>
      <p>Полный и по возможности актуальный список объектов побережья со статусом сдачи — на странице <a class="more" href="/zhk/">«Объекты и ЖК Калининграда»</a>.</p>
    </div>
  </div>
</section>

<!-- ===== СВЯЗАННЫЕ УСЛУГИ ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Смежное</span>
      <h2 class="sh">Похожие услуги</h2>
      <p class="sec-lead">У каждой ситуации свои нюансы — выберите свой случай.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Приёмка квартиры после ремонта</h3><p>Чистовая отделка от застройщика — проверяем именно её качество.</p><a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Финальная приёмка ремонта</h3><p>Перед окончательным расчётом с подрядчиком или бригадой.</p><a class="more" href="/finalnaya-priemka-remonta/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Дистанционная приёмка</h3><p>Для иногородних: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о приёмке в Светлогорске</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Работаете ли вы в Светлогорске на постоянной основе?</summary><p>Да, Светлогорск — один из основных городов выезда на побережье наряду с Зеленоградском и Пионерским. Доплата за выезд по области — 500 ₽.</p></details>
      <details data-reveal><summary>Квартира сдаётся с полной отделкой — зачем тогда приёмка?</summary><p>Именно поэтому она и нужна. Чем больше выполненных работ, тем больше мест, где могли схалтурить: плитка на пустотах, кривые примыкания, недоделанная вентиляция под подвесным потолком. Без приборов такие вещи не видны.</p></details>
      <details data-reveal><summary>Проверяете ли вы паркинг и общедомовые зоны?</summary><p>В рамках базовой приёмки — квартиру и то, что относится к ней по документам. Гидроизоляцию и дренаж на уровне вашего этажа и прилегающих конструкций фиксируем, если есть видимые следы проблемы; вопросы по местам общего пользования — отдельная договорённость.</p></details>
      <details data-reveal><summary>Сколько стоит и сколько занимает приёмка?</summary><p>Цена — от 8 000 ₽ по площади и типу объекта, калькулятор на странице <a href="/tseny/">цен</a> посчитает точнее. Осмотр занимает 1–2 часа, полный акт с фото — за 15 минут на месте.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Запишитесь на приёмку в Светлогорске</h2>
      <p class="sec-lead">Опишите объект — посчитаем стоимость и согласуем время выезда.</p>
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
