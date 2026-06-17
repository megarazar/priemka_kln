<?php
/**
 * Шаблон страницы «Приёмка квартиры от застройщика» (/priemka-kvartiry-ot-zastroyschika/).
 * Хаб услуги №1 Продуктовой матрицы 2.0. Подхватывается по слагу (WP page ID 12).
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у /tseny/ — рваные края без правок CSS.
 * Уникальный контент (НЕ дублирует главную). Текст — подготовка_страниц/01-priemka-ot-zastroyschika-ФИНАЛ.md.
 * Без ложного USP «бесплатная повторная» (по матрице — 50% платно). Тепловизор — по запросу. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Приёмка квартиры от застройщика","item":"https://prinyatopro.ru/priemka-kvartiry-ot-zastroyschika/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Приёмка квартиры от застройщика",
  "serviceType":"Приёмка квартиры в новостройке",
  "description":"Независимый технический осмотр квартиры от застройщика до или после подписания акта приёма-передачи: фиксация дефектов, фотоотчёт, официальный акт с печатью.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="priemka" data-section="priemka">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуга</span>
      <h1 class="sh">Приёмка квартиры от застройщика</h1>
      <p class="sec-lead">Проверяем квартиру до или после подписания акта приёма-передачи: находим дефекты застройщика, фиксируем их фото и в официальном акте и объясняем простым языком, что принимать, а что обязаны исправить.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <p class="micro" data-reveal>Официальный акт с печатью · Фото дефектов с привязкой к квартире · Фиксированная цена в договоре · Выезд по Калининграду и области</p>
  </div>
</section>

<!-- ===== ЗАЧЕМ НУЖНА ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зачем это нужно</span>
      <h2 class="sh">Подпишете акт без проверки — оплатите чужие огрехи сами</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Как только вы подписываете акт приёма-передачи, квартира считается принятой без претензий. Кривая стяжка, продувающие окна, мёртвая вентиляция, промерзающие углы — после подписи это уже ваш ремонт и ваши расходы.</p>
      <p>Независимая приёмка — это проверка до того, как вы что-либо подпишете. Мы приходим с приборами, сверяем квартиру со строительными нормами и фиксируем каждое отклонение так, чтобы застройщику было что устранять, а у вас было чем это требовать.</p>
    </div>
  </div>
</section>

<!-- ===== ЧТО ПРОВЕРЯЕМ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Объём работ</span>
      <h2 class="sh">Что мы проверяем в квартире</h2>
      <p class="sec-lead">Не осмотр на глаз, а инструментальная проверка узлов, которые потом дорого исправлять.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li><b>Геометрия и поверхности</b> — вертикаль стен, ровность пола и потолка, перепады стяжки, трещины.</li>
        <li><b>Окна и остекление</b> — фурнитура, монтажные швы, продувание, промерзание, царапины.</li>
        <li><b>Электрика</b> — щиток, автоматы, заземление, розетки и выводы по проекту.</li>
        <li><b>Сантехника и отопление</b> — стояки, разводка, радиаторы, отсутствие протечек.</li>
        <li><b>Вентиляция</b> — тяга в каждом канале.</li>
        <li><b>Тепловой контур</b> — мостики холода и промерзание углов (тепловизор — по запросу).</li>
        <li><b>Входная дверь и комплектация</b> — замки, петли, соответствие договору.</li>
        <li><b>Площадь и геометрия</b> — сверка с данными ДДУ и БТИ.</li>
      </ul>
      <p>Работаем поверенными приборами: правило и рейка, уровень, рулетка, склерометр; тепловизор — по запросу. Измерения вы видите сами — не «тут холодно», а цифра и кадр.</p>
    </div>
  </div>
</section>

<!-- ===== КАК ПРОХОДИТ + ЦЕНА (бежевая, icon-list) ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Как проходит</span>
      <h2 class="sh">От заявки до акта</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg><span><b>Запись под вашу дату.</b> Согласуем осмотр под дату приёмки у застройщика.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Осмотр с приборами — 1–2 часа.</b> Каждый дефект уходит в фото и дефектную ведомость прямо на месте.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Официальный акт с печатью.</b> Предварительное резюме — за 2–3 часа, полный акт — в течение 24 часов.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg><span><b>Повторный выезд после устранения — 50%</b> от стоимости первичной приёмки.</span></li>
    </ul>
    <p class="micro" data-reveal>Цена — от 8 000 ₽, по площади и типу квартиры; точную сумму <a class="more" href="/tseny/">калькулятор покажет за минуту</a>. Стоимость фиксируем в договоре, без доплат на месте.</p>
  </div>
</section>

<!-- ===== ЧТО НЕ ВХОДИТ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что не входит в приёмку</h2>
      <p class="sec-lead">Мы техническая компания, поэтому сразу про границы.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор с застройщиком от вашего имени и не выступаем в суде.</li>
        <li>Не вскрываем конструкции и не считаем полную смету ремонта.</li>
        <li>Не гарантируем, что застройщик устранит всё, и не обещаем исход суда.</li>
      </ul>
      <p>Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наш акт станет для неё основой. Согласование перепланировки тоже отдаём профильному партнёру по отдельному запросу.</p>
    </div>
  </div>
</section>

<!-- ===== ЧАСТНЫЕ СЛУЧАИ (перелинковка на SEO-детей) ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Ваш случай</span>
      <h2 class="sh">Частные случаи приёмки</h2>
      <p class="sec-lead">У каждой ситуации свои нюансы — выберите свой случай.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Приёмка квартиры в новостройке</h3><p>Голые стены или предчистовая отделка — проверяем перед подписанием акта.</p><a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Приёмка домов и таунхаусов</h3><p>Кровля, фундамент, участок, инженерия — дом сложнее квартиры.</p><a class="more" href="/priemka-domov/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Приёмка квартиры после ремонта</h3><p>Принимаем квартиру с чистовой отделкой от застройщика.</p><a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">04</span><h3>Дистанционная приёмка</h3><p>Для иногородних: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о приёмке</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Когда вызывать эксперта — до или после подписания акта?</summary><p>Лучше до подписания: пока акт приёма-передачи не подписан, у вас больше рычагов. Но и после передачи ключей дефекты можно зафиксировать актом и требовать устранения в гарантийный срок.</p></details>
      <details data-reveal><summary>Застройщик не пускает эксперта — что делать?</summary><p>Вы вправе осматривать квартиру с помощником. Подскажем, как заявить об участии эксперта, и приедем вместе с вами.</p></details>
      <details data-reveal><summary>Что делать с актом дальше?</summary><p>Передаёте дефектную ведомость застройщику. Акт приёма-передачи стоит подписывать после устранения недостатков или с зафиксированными замечаниями.</p></details>
      <details data-reveal><summary>Сколько стоит и сколько занимает приёмка?</summary><p>Цена — от 8 000 ₽ по площади и типу квартиры, калькулятор посчитает за минуту. Осмотр занимает 1–2 часа, полный акт — до 24 часов.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Запишитесь на приёмку квартиры</h2>
      <p class="sec-lead">Проверим квартиру до того, как вы подпишете акт. Опишите объект — посчитаем стоимость и согласуем время.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
