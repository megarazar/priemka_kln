<?php
/**
 * Шаблон страницы «Приёмка домов и таунхаусов» (/priemka-domov/).
 * Частный случай приёмки (дом сложнее квартиры: кровля, фундамент, участок, инженерия).
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у хаба — рваные края без правок CSS.
 * Уникальный контент (НЕ дублирует хаб). Цена выше — house. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-priemka-domov">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Услуги","item":"https://prinyatopro.ru/uslugi/" },
  { "@type":"ListItem","position":3,"name":"Приёмка домов и таунхаусов","item":"https://prinyatopro.ru/priemka-domov/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Приёмка домов и таунхаусов",
  "serviceType":"Приёмка дома и таунхауса",
  "description":"Независимая приёмка дома, коттеджа и таунхауса в Калининграде и области: проверка фундамента, кровли, фасада, инженерных вводов и участка с фиксацией дефектов фото и официальным актом осмотра.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="priemka" data-section="priemka">
  <div class="wrap">
    <div class="svc-hero">
      <div class="svc-hero__text">
        <div class="sec-head" data-reveal>
          <span class="eyebrow">Частный случай</span>
          <h1 class="sh">Приёмка домов и таунхаусов в Калининграде и области</h1>
          <p class="sec-lead">Дом сложнее квартиры: к стенам и инженерии добавляются фундамент, кровля, фасад и участок — и цена ошибки выше. Проверяем дом или таунхаус целиком, снаружи и внутри, и фиксируем дефекты официальным актом осмотра.</p>
        </div>
        <div class="cta-row" data-reveal>
          <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
          <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
        </div>
        <p class="micro" data-reveal>Официальный акт осмотра · Фото дефектов с привязкой к объекту · Фиксированная цена в договоре · Выезд по Калининграду и области</p>
        <div class="statband statband--ink" data-reveal>
          <div class="stat"><b data-count="10">10</b><span>узлов проверки</span></div>
          <div class="stat"><b data-count="48" data-suffix=" ч">48 ч</b><span>на полный акт</span></div>
          <div class="stat"><b data-count="50" data-suffix="%">50%</b><span>повторный выезд</span></div>
          <div class="stat"><b>3–4 ч</b><span>длится осмотр</span></div>
        </div>
      </div>
      <figure class="svc-hero__pic" data-reveal>
        <img src="<?php echo $T; ?>/assets/img/svc-domov-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/svc-domov-hero.jpg'); ?>" alt="Эксперт ПринятоПро проверяет фасад нового дома уровнем на приёмке дома в Калининградской области" width="900" height="1200" loading="eager" decoding="async">
        <figcaption class="svc-hero__cap">Уровнем — по фасаду</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ===== ЗАЧЕМ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зачем это нужно</span>
      <h2 class="sh">В доме отвечать за дефекты будете только вы</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Квартиру окружают соседи и общедомовые конструкции — за подъезд, крышу и фасад отвечает УК. В частном доме и таунхаусе всё это ваше: протекающая кровля, трещина в фундаменте, сырой цоколь, неработающий дренаж или ошибки в инженерных вводах после подписания акта становятся вашими расходами и вашей головной болью.</p>
      <p>Поэтому дом принимают не «на глаз за полчаса», а по всем узлам — от отмостки до конька крыши. Мы обходим объект снаружи и внутри, проверяем несущие конструкции и инженерию приборами и фиксируем каждое отклонение так, чтобы застройщику или подрядчику было что устранять.</p>
    </div>
  </div>
</section>

<!-- ===== РИЛСЫ ВК (живые съёмки) ===== -->
<?php get_template_part( 'template-parts/reels' ); ?>

<!-- ===== ЧТО ПРОВЕРЯЕМ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Объём работ</span>
      <h2 class="sh">Что проверяем в доме и таунхаусе</h2>
      <p class="sec-lead">Дом — это десяток узлов, и большинство из них снаружи. Проходим каждый.</p>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21h18M5 21v-9h14v9"/><path d="M3 12l9-7 9 7"/></svg><span><b>Фундамент, цоколь, отмостка.</b> Трещины, перепады, гидроизоляция, уклоны для отвода воды от дома.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12L12 3l9 9"/><path d="M5 12v8h14v-8"/></svg><span><b>Кровля и стропильная система.</b> Покрытие, узлы, вентиляция подкровельного пространства, следы протечек.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="4" width="16" height="16"/><path d="M4 9h16M9 9v11"/></svg><span><b>Фасад и утепление.</b> Кладка, штукатурка, мостики холода, качество утепления и примыканий.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M4 12h16M12 3v18"/></svg><span><b>Окна, двери, остекление.</b> Монтаж, продувание, промерзание, фурнитура, входные группы.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2L4 14h7l-2 8 9-12h-7z"/></svg><span><b>Электрика и ввод.</b> Щит, автоматы, заземление, ввод и точки по проекту.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2s7 7 7 12a7 7 0 0 1-14 0c0-5 7-12 7-12z"/></svg><span><b>Вода, отопление, котёл.</b> Разводка, давление, радиаторы, обвязка котла, отсутствие протечек.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 20s2-6 8-6 8 6 8 6"/><path d="M12 14V4M8 7l4-3 4 3"/></svg><span><b>Канализация, септик, дренаж.</b> Уклоны, вводы, работа автономных систем, отвод грунтовых вод.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v6M12 21a6 6 0 0 0 6-6c0-2-2-5-6-9-4 4-6 7-6 9a6 6 0 0 0 6 6z"/></svg><span><b>Вентиляция и тяга.</b> Естественная и принудительная вентиляция, тяга в каналах.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/><path d="M4 9h16M9 9v11"/></svg><span><b>Перекрытия и геометрия.</b> Ровность, прогибы, отклонения стен и проёмов от вертикали.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h18v18H3z"/><path d="M3 9h6V3M21 15h-6v6"/></svg><span><b>Площадь и участок.</b> Сверка с документами, отмостка, благоустройство по договору.</span></li>
    </ul>
    <p class="micro" data-reveal>Работаем поверенными приборами: уровень и правило, рулетка и дальномер, анемометр; тепловизор — по запросу. Каждый дефект — это цифра и кадр в дефектной ведомости.</p>
  </div>
</section>

<!-- ===== КВИЗ ===== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Калькулятор</span>
      <h2 class="sh">Рассчитайте стоимость приёмки дома</h2>
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
            <button type="button" class="ppq-opt" data-value="Дом или таунхаус" data-price="house">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-house.jpg" alt="Дом или таунхаус" loading="lazy"></span>
              <span class="ppq-label">Дом или таунхаус</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Квартира без отделки" data-price="rough">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-rough.jpg" alt="Квартира без отделки" loading="lazy"></span>
              <span class="ppq-label">Квартира без отделки</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Квартира с отделкой" data-price="whitebox">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Квартира с отделкой от застройщика" loading="lazy"></span>
              <span class="ppq-label">Квартира с отделкой</span>
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
            <button type="button" class="ppq-opt" data-value="В ближайший месяц">Передача в ближайший месяц</button>
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
            <span class="ppq-result-price" id="ppqPrice">от 9 900 ₽</span>
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

<!-- ===== КАК ПРОХОДИТ + ЦЕНА ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Как проходит</span>
      <h2 class="sh">От заявки до акта</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg><span><b>Запись под дату передачи.</b> Согласуем выезд под дату приёмки у застройщика или подрядчика.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Осмотр дома — 3–4 часа.</b> Обходим объект снаружи и внутри, каждый дефект уходит в фото и ведомость.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Официальный акт осмотра.</b> Полный акт с фото и дефектной ведомостью — в течение 48 часов.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg><span><b>Повторный выезд после устранения — 50%</b> от стоимости первичной приёмки.</span></li>
    </ul>
    <p class="micro" data-reveal>Цена — от 9 900 ₽, зависит от площади и этажности; точную сумму <a class="more" href="/tseny/">калькулятор покажет за минуту</a>. Стоимость фиксируем в договоре, без доплат на месте.</p>
  </div>
</section>

<!-- ===== ГРАНИЦЫ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что не входит в приёмку дома</h2>
      <p class="sec-lead">Мы техническая компания, поэтому сразу про границы.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор с застройщиком или подрядчиком от вашего имени и не выступаем в суде.</li>
        <li>Не вскрываем конструкции и не делаем разрушающий контроль; не считаем полную смету.</li>
        <li>Не выполняем кадастровые и геодезические работы — сверяем геометрию, но не межуем участок.</li>
      </ul>
      <p>Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наш акт станет для неё основой. Что именно можно требовать с застройщика или подрядчика, зависит от вашей ситуации и закона на момент обращения.</p>
    </div>
  </div>
</section>

<!-- ===== СМЕЖНЫЕ УСЛУГИ ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Ваш случай</span>
      <h2 class="sh">Похожие услуги</h2>
      <p class="sec-lead">У каждой ситуации свои нюансы — выберите свой случай.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-rough.jpg" alt="Приёмка квартиры в новостройке" loading="lazy"><span class="num-tag">01</span><h3>Приёмка квартиры в новостройке</h3><p>Голые стены или предчистовая отделка — проверяем перед подписанием акта.</p><a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-renovated.jpg" alt="Приёмка квартиры после ремонта" loading="lazy"><span class="num-tag">02</span><h3>Приёмка после ремонта</h3><p>Чистовая отделка — скрытые дефекты под обоями, плиткой и стяжкой.</p><a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/check-electro.jpg" alt="Технический надзор ремонта" loading="lazy"><span class="num-tag">03</span><h3>Технадзор ремонта</h3><p>Контроль бригады на каждом этапе — от черновой до сдачи объекта.</p><a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Дистанционная приёмка" loading="lazy"><span class="num-tag">04</span><h3>Дистанционная приёмка</h3><p>Для иногородних: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о приёмке дома</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Чем приёмка дома отличается от приёмки квартиры?</summary><p>В доме добавляются наружные узлы, за которые отвечаете только вы: фундамент, цоколь, отмостка, кровля, фасад, инженерные вводы, септик и дренаж, участок. Поэтому осмотр дольше — обычно 3–4 часа — и охватывает объект снаружи и внутри.</p></details>
      <details data-reveal><summary>Принимаете ли таунхаусы и дуплексы?</summary><p>Да. Таунхаус и дуплекс проверяем как дом: несущие конструкции, кровля и фасад своей секции, инженерные вводы, общие стены и примыкания. Объём подскажем после уточнения деталей.</p></details>
      <details data-reveal><summary>Можно ли проверить дом, если я в другом городе?</summary><p>Да — это частый случай для Калининградской области. Принимаем дом по доверенности, показываем всё по видеосвязи в реальном времени, присылаем видеообзор, фото дефектов и официальный акт осмотра.</p></details>
      <details data-reveal><summary>Сколько стоит и сколько занимает приёмка дома?</summary><p>Цена — от 9 900 ₽, зависит от площади и этажности; калькулятор посчитает за минуту. Осмотр обычно занимает 3–4 часа, полный акт с фото — до 48 часов.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Запишитесь на приёмку дома или таунхауса</h2>
      <p class="sec-lead">Проверим объект до того, как вы подпишете акт. Опишите дом — посчитаем стоимость и согласуем время.</p>
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
