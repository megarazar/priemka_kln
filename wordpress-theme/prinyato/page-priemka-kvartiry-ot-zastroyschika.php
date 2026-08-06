<?php
/**
 * Шаблон страницы «Приёмка квартиры от застройщика» (/priemka-kvartiry-ot-zastroyschika/).
 * Хаб услуги №1 Продуктовой матрицы 2.0. Подхватывается по слагу (WP page ID 12).
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у /tseny/ — рваные края без правок CSS.
 * Уникальный контент (НЕ дублирует главную). Текст — подготовка_страниц/01-priemka-ot-zastroyschika-ФИНАЛ.md.
 * Без ложного USP «бесплатная повторная» (по матрице — 50% платно). Тепловизор — по запросу. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-priemka-kvartiry">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Приёмка квартиры от застройщика","item":"https://prinyatopro.ru/priemka-kvartiry-ot-zastroyschika/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Приёмка квартиры от застройщика",
  "serviceType":"Приёмка квартиры в новостройке",
  "description":"Независимый технический осмотр квартиры от застройщика до или после подписания акта приёма-передачи: фиксация дефектов, фотоотчёт, официальный акт осмотра.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="priemka" data-section="priemka">
  <div class="wrap">
    <div class="svc-hero">
      <div class="svc-hero__text">
        <div class="sec-head" data-reveal>
          <span class="eyebrow">Услуга</span>
          <h1 class="sh">Приёмка квартиры от застройщика</h1>
          <p class="sec-lead">Проверяем квартиру до или после подписания акта приёма-передачи: находим дефекты застройщика, фиксируем их фото и в официальном акте и объясняем простым языком, что принимать, а что обязаны исправить.</p>
        </div>
        <div class="cta-row" data-reveal>
          <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
          <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
        </div>
        <?php get_template_part( 'template-parts/promo', null, array( 'variant' => 'bar' ) ); ?>
        <p class="micro" data-reveal>Официальный акт осмотра · Фото дефектов с привязкой к квартире · Фиксированная цена в договоре · Выезд по Калининграду и области</p>
        <div class="statband statband--ink" data-reveal>
          <div class="stat"><b data-count="8">8</b><span>узлов проверки</span></div>
          <div class="stat"><b data-count="15" data-suffix=" мин">15 мин</b><span>на полный акт</span></div>
          <div class="stat"><b data-count="50" data-suffix="%">50%</b><span>повторный выезд</span></div>
          <div class="stat"><b>1–2 ч</b><span>длится осмотр</span></div>
        </div>
      </div>
      <figure class="svc-hero__pic" data-reveal>
        <img src="<?php echo $T; ?>/assets/img/svc-hub-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/svc-hub-hero.jpg'); ?>" alt="Проверка входной двери и окна на приёмке квартиры от застройщика — эксперт ПринятоПро" width="900" height="1200" loading="eager" decoding="async">
        <figcaption class="svc-hero__cap">Дверь и окно — по фурнитуре</figcaption>
      </figure>
    </div>
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

<!-- ===== РИЛСЫ ВК (живые съёмки) ===== -->
<?php get_template_part( 'template-parts/reels' ); ?>

<!-- ===== ЧТО ПРОВЕРЯЕМ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="hs" data-hscroll>
      <div class="hs-pin">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Объём работ</span>
      <h2 class="sh">Что мы проверяем в квартире</h2>
      <p class="sec-lead">Не осмотр на глаз, а инструментальная проверка узлов, которые потом дорого исправлять.</p>
    </div>
    <div class="check-track" data-hscroll-track>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-geometry.jpg" alt="Проверка геометрии стен и стяжки на приёмке квартиры" width="400" height="267" loading="lazy" decoding="async"><b>Геометрия и поверхности</b><span>Вертикаль стен, ровность пола и потолка, перепады стяжки, трещины.</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-windows.jpg" alt="Проверка окон и остекления при приёмке" width="400" height="267" loading="lazy" decoding="async"><b>Окна и остекление</b><span>Фурнитура, монтажные швы, продувание, промерзание, царапины.</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-electro.jpg" alt="Проверка электрики и щитка по ПУЭ" width="400" height="267" loading="lazy" decoding="async"><b>Электрика</b><span>Щиток, автоматы, заземление, розетки и выводы по проекту.</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-plumbing.jpg" alt="Проверка сантехники и отопления" width="400" height="267" loading="lazy" decoding="async"><b>Сантехника и отопление</b><span>Стояки, разводка, радиаторы, отсутствие протечек.</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-vent.jpg" alt="Проверка вентиляции анемометром" width="400" height="267" loading="lazy" decoding="async"><b>Вентиляция</b><span>Тяга в каждом вентиляционном канале.</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-thermal.jpg" alt="Тепловизионная проверка теплового контура" width="400" height="267" loading="lazy" decoding="async"><b>Тепловой контур</b><span>Мостики холода и промерзание углов (тепловизор — по запросу).</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-door.jpg" alt="Проверка входной двери и комплектации" width="400" height="267" loading="lazy" decoding="async"><b>Дверь и комплектация</b><span>Замки, петли, входная дверь, соответствие договору.</span></div>
      <div class="check-card"><img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-docs.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/check-docs.jpg'); ?>" alt="Сверка площади квартиры с данными ДДУ и БТИ" width="400" height="267" loading="lazy" decoding="async"><b>Площадь и геометрия</b><span>Сверка с данными ДДУ и БТИ.</span></div>
    </div>
      </div>
    </div>
    <p class="micro" data-reveal>Работаем поверенными приборами: правило и рейка, уровень, рулетка, склерометр; тепловизор — по запросу. Измерения вы видите сами — не «тут холодно», а цифра и кадр.</p>
  </div>
</section>

<!-- ===== РЕАЛЬНЫЕ ПРИЁМКИ (фото с выездов) ===== -->
<section class="sec distance" id="shots" data-section="shots">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">С наших выездов</span>
      <h2 class="sh">Реальные приёмки в Калининграде</h2>
      <p class="sec-lead">Не стоковые картинки — кадры с реальных приёмок квартир у застройщиков Калининграда. Вот что находим при осмотре.</p>
    </div>
    <div class="shots-grid" data-reveal>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-hub-1.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-hub-1.jpg'); ?>" alt="Царапина на оконном откосе — дефект, найденный на приёмке квартиры" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Царапина на откосе</figcaption></figure>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-real-2.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-real-2.jpg'); ?>" alt="Незаделанный вывод труб в полу — дефект на приёмке квартиры" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Щель вокруг труб</figcaption></figure>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-posle-1.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-posle-1.jpg'); ?>" alt="Щель между плинтусом и стеной — дефект отделки на приёмке" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Щель у плинтуса</figcaption></figure>
    </div>
  </div>
</section>

<!-- ===== КВИЗ (расчёт стоимости) — тот же, что на главной ===== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <?php get_template_part( 'template-parts/promo', null, array( 'variant' => 'card' ) ); ?>
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Калькулятор</span>
      <h2 class="sh">Рассчитайте стоимость приёмки</h2>
      <p class="sec-lead">Ответьте на 4 коротких вопроса — покажем ориентировочную цену и подберём формат под ваш объект. Расчёт бесплатный.</p>
    </div>

    <div class="quiz-embed" data-reveal>
      <div class="pp-quiz" id="ppQuiz">
        <div class="ppq-top">
          <span class="ppq-counter">Шаг <b id="ppqStepNum">1</b> из 5</span>
          <div class="ppq-bar"><span id="ppqBarFill" style="width:20%"></span></div>
        </div>

        <div class="ppq-step is-active" data-step="1" data-key="Объект">
          <h3 class="ppq-q">Что нужно принять?</h3>
          <div class="ppq-opts ppq-opts--img">
            <button type="button" class="ppq-opt" data-value="Квартира без отделки" data-price="rough">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-rough.jpg" alt="Квартира без отделки" loading="lazy"></span>
              <span class="ppq-label">Квартира без отделки</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Квартира с отделкой" data-price="whitebox">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Квартира с отделкой от застройщика" loading="lazy"></span>
              <span class="ppq-label">Квартира с отделкой</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Дом или таунхаус" data-price="house">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-house.jpg" alt="Дом или таунхаус" loading="lazy"></span>
              <span class="ppq-label">Дом или таунхаус</span>
            </button>
            <button type="button" class="ppq-opt" data-value="После ремонта / технадзор" data-price="renovated">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-renovated.jpg" alt="Приёмка после ремонта или технадзор" loading="lazy"></span>
              <span class="ppq-label">После ремонта / технадзор</span>
            </button>
          </div>
        </div>

        <div class="ppq-step" data-step="2" data-key="Площадь">
          <h3 class="ppq-q">Какая площадь объекта?</h3>
          <div class="ppq-opts ppq-opts--text">
            <button type="button" class="ppq-opt" data-value="До 40 м²" data-area="s"><span class="ppq-big">до 40</span><span class="ppq-label">м²</span></button>
            <button type="button" class="ppq-opt" data-value="40–60 м²" data-area="m"><span class="ppq-big">40–60</span><span class="ppq-label">м²</span></button>
            <button type="button" class="ppq-opt" data-value="60–90 м²" data-area="l"><span class="ppq-big">60–90</span><span class="ppq-label">м²</span></button>
            <button type="button" class="ppq-opt" data-value="Более 90 м²" data-area="xl"><span class="ppq-big">90+</span><span class="ppq-label">м²</span></button>
          </div>
        </div>

        <div class="ppq-step" data-step="3" data-key="Сроки">
          <h3 class="ppq-q">Когда нужна приёмка?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Приглашение уже пришло">Приглашение на приёмку уже пришло</button>
            <button type="button" class="ppq-opt" data-value="В ближайший месяц">Ключи выдают в ближайший месяц</button>
            <button type="button" class="ppq-opt" data-value="Через 1–3 месяца">Через 1–3 месяца</button>
            <button type="button" class="ppq-opt" data-value="Пока изучаю вопрос">Пока изучаю вопрос</button>
          </div>
        </div>

        <div class="ppq-step" data-step="4" data-key="Присутствие">
          <h3 class="ppq-q">Как вам удобнее провести приёмку?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Буду присутствовать лично">Буду присутствовать лично</button>
            <button type="button" class="ppq-opt" data-value="Дистанционно по доверенности">Дистанционно — я в другом городе</button>
            <button type="button" class="ppq-opt" data-value="Ещё не решил">Ещё не решил(а)</button>
          </div>
        </div>

        <div class="ppq-step ppq-step--final" data-step="5">
          <div class="ppq-result" id="ppqResult" hidden>
            <span class="ppq-result-label">Ориентировочная стоимость</span>
            <span class="ppq-result-price" id="ppqPrice">от 8 000 ₽</span>
            <span class="ppq-result-note">Точную цену назовём после уточнения деталей — она фиксируется в договоре и не меняется на месте.</span>
          </div>
          <h3 class="ppq-q">Куда отправить расчёт?</h3>
          <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
        </div>

        <button type="button" class="ppq-back" id="ppqBack" hidden>&larr; Назад</button>
      </div>
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
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Официальный акт осмотра.</b> Полный акт с фото и привязкой к квартире готовим на месте — за 15 минут после осмотра.</span></li>
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
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-rough.jpg" alt="Приёмка квартиры в новостройке" loading="lazy"><span class="num-tag">01</span><h3>Приёмка квартиры в новостройке</h3><p>Голые стены или предчистовая отделка — проверяем перед подписанием акта.</p><a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-house.jpg" alt="Приёмка домов и таунхаусов" loading="lazy"><span class="num-tag">02</span><h3>Приёмка домов и таунхаусов</h3><p>Кровля, фундамент, участок, инженерия — дом сложнее квартиры.</p><a class="more" href="/priemka-domov/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-renovated.jpg" alt="Приёмка квартиры после ремонта" loading="lazy"><span class="num-tag">03</span><h3>Приёмка квартиры после ремонта</h3><p>Принимаем квартиру с чистовой отделкой от застройщика.</p><a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Дистанционная приёмка квартиры" loading="lazy"><span class="num-tag">04</span><h3>Дистанционная приёмка</h3><p>Для иногородних: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
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
      <details data-reveal><summary>Сколько стоит и сколько занимает приёмка?</summary><p>Цена — от 8 000 ₽ по площади и типу квартиры, калькулятор посчитает за минуту. Осмотр занимает 1–2 часа, а полный акт с фото вы получаете на месте — за 15 минут.</p></details>
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

<a class="sticky-cta" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
</main>
<?php get_footer(); ?>
