<?php
/**
 * Шаблон страницы «Приёмка квартиры после ремонта» (/priemka-kvartiry-posle-remonta/).
 * Частный случай приёмки (чистовая отделка от застройщика — скрытые дефекты под отделкой).
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у хаба — рваные края без правок CSS.
 * Уникальный контент (НЕ дублирует хаб и финальную приёмку ремонта). Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-priemka-posle-remonta">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Услуги","item":"https://prinyatopro.ru/uslugi/" },
  { "@type":"ListItem","position":3,"name":"Приёмка квартиры после ремонта","item":"https://prinyatopro.ru/priemka-kvartiry-posle-remonta/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Приёмка квартиры после ремонта",
  "serviceType":"Приёмка квартиры с чистовой отделкой",
  "description":"Независимая приёмка квартиры с чистовой отделкой от застройщика в Калининграде: проверка отделки и инженерии, поиск скрытых дефектов тепловизором и влагомером, фиксация фото и официальным актом осмотра.",
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
          <h1 class="sh">Приёмка квартиры после ремонта в Калининграде</h1>
          <p class="sec-lead">Чистовая отделка от застройщика выглядит готовой и красивой — и именно поэтому за обоями, плиткой и ламинатом легко не заметить кривые стены, мёртвую вентиляцию и сырость. Проверяем готовую квартиру с приборами до того, как вы подпишете акт.</p>
        </div>
        <div class="cta-row" data-reveal>
          <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
          <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
        </div>
        <p class="micro" data-reveal>Официальный акт осмотра · Фото дефектов с привязкой к квартире · Фиксированная цена в договоре · Выезд по Калининграду и области</p>
        <div class="statband statband--ink" data-reveal>
          <div class="stat"><b data-count="8">8</b><span>узлов проверки</span></div>
          <div class="stat"><b data-count="15" data-suffix=" мин">15 мин</b><span>на полный акт</span></div>
          <div class="stat"><b data-count="50" data-suffix="%">50%</b><span>повторный выезд</span></div>
          <div class="stat"><b>1–2 ч</b><span>длится осмотр</span></div>
        </div>
      </div>
      <figure class="svc-hero__pic" data-reveal>
        <img src="<?php echo $T; ?>/assets/img/svc-posle-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/svc-posle-hero.jpg'); ?>" alt="Трещина в откосе на приёмке квартиры после ремонта — эксперт ПринятоПро находит дефекты под чистовой отделкой" width="900" height="1200" loading="eager" decoding="async">
        <figcaption class="svc-hero__cap">Трещина в откосе</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ===== ЗАЧЕМ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зачем это нужно</span>
      <h2 class="sh">Красивая отделка маскирует дорогие дефекты</h2>
    </div>
    <div class="prose" data-reveal>
      <p>В квартире с чистовой отделкой соблазн подписать акт сразу: всё поклеено, постелено и покрашено. Но именно отделка прячет самое дорогое — пустоты под плиткой, вздутый у стен ламинат, неровные стены под обоями, сырость в углах, слабую тягу вентиляции и розетки, подключённые «как получилось».</p>
      <p>После подписания акта приёма-передачи всё это становится вашим ремонтом. Мы проверяем не картинку, а качество работ: простукиваем и измеряем отделку, гоняем инженерию под нагрузкой и ищем скрытую влагу тепловизором и влагомером — чтобы дефекты попали в акт, пока их обязан устранять застройщик.</p>
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
      <h2 class="sh">Что проверяем в квартире после ремонта</h2>
      <p class="sec-lead">Смотрим не на красоту, а на то, что вылезет через месяц-другой эксплуатации.</p>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/><path d="M4 9h16M9 9v11"/></svg><span><b>Стены, обои, покраска.</b> Ровность под отделкой, стыки, пузыри, подтёки, неоклеенные участки.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h18v18H3z"/><path d="M3 9h18M9 3v18M15 3v18"/></svg><span><b>Плитка и швы.</b> Простукиваем на пустоты, проверяем уклоны, затирку, примыкания в санузлах.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 17h18M3 17l3-11h12l3 11"/><path d="M8 6v11M16 6v11"/></svg><span><b>Полы и потолки.</b> Ламинат и стяжка под ним, зазоры и скрип, ровность потолка и натяжных полотен.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20" rx="1"/><circle cx="15" cy="12" r="1"/></svg><span><b>Двери и окна.</b> Межкомнатные двери, фурнитура, зазоры; окна — продувание, фурнитура, регулировка.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2s7 7 7 12a7 7 0 0 1-14 0c0-5 7-12 7-12z"/></svg><span><b>Сантехника и разводка.</b> Установленные смесители, унитаз, ванна; подключение, уклоны, отсутствие протечек.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2L4 14h7l-2 8 9-12h-7z"/></svg><span><b>Электрика под нагрузкой.</b> Розетки и выключатели, заземление, работа автоматов, точки по проекту.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v6M12 21a6 6 0 0 0 6-6c0-2-2-5-6-9-4 4-6 7-6 9a6 6 0 0 0 6 6z"/></svg><span><b>Вентиляция и микроклимат.</b> Тяга в каналах, работа вытяжки — частая причина плесени после ремонта.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/></svg><span><b>Скрытая влага — тепловизор и влагомер.</b> Сырые углы, протечки и мостики холода, которых не видно глазу (по запросу).</span></li>
    </ul>
    <p class="micro" data-reveal>Работаем поверенными приборами: уровень и правило, киянка для простукивания плитки, влагомер; тепловизор — по запросу. Каждый дефект — это цифра и кадр в дефектной ведомости.</p>
  </div>
</section>

<!-- ===== РЕАЛЬНЫЕ ПРИЁМКИ (фото с выездов) ===== -->
<section class="sec distance" id="shots" data-section="shots">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">С наших выездов</span>
      <h2 class="sh">Реальные приёмки в Калининграде</h2>
      <p class="sec-lead">Не стоковые картинки — кадры с реальных приёмок квартир после ремонта. Вот что находим за свежими обоями и ровной плиткой.</p>
    </div>
    <div class="shots-grid" data-reveal>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-posle-1.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-posle-1.jpg'); ?>" alt="Щель между плинтусом и стеной после ремонта — дефект, найденный на приёмке" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Щель у плинтуса</figcaption></figure>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-posle-2.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-posle-2.jpg'); ?>" alt="Трещина по свежеокрашенной стене над конвектором — дефект чистовой отделки" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Трещина по стене</figcaption></figure>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-posle-3.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-posle-3.jpg'); ?>" alt="Отходящая штукатурка на стыке отделки — дефект после ремонта" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Штукатурка на стыке</figcaption></figure>
    </div>
  </div>
</section>

<!-- ===== КВИЗ ===== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Калькулятор</span>
      <h2 class="sh">Рассчитайте стоимость приёмки после ремонта</h2>
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
            <button type="button" class="ppq-opt" data-value="Квартира с отделкой" data-price="renovated">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-renovated.jpg" alt="Квартира с чистовой отделкой после ремонта" loading="lazy"></span>
              <span class="ppq-label">Квартира с отделкой</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Квартира без отделки" data-price="rough">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-rough.jpg" alt="Квартира без отделки" loading="lazy"></span>
              <span class="ppq-label">Квартира без отделки</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Квартира white box" data-price="whitebox">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Квартира white box" loading="lazy"></span>
              <span class="ppq-label">White box</span>
            </button>
            <button type="button" class="ppq-opt" data-value="Дом или таунхаус" data-price="house">
              <span class="ppq-pic"><img src="<?php echo $T; ?>/assets/img/quiz-house.jpg" alt="Дом или таунхаус" loading="lazy"></span>
              <span class="ppq-label">Дом или таунхаус</span>
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

<!-- ===== КАК ПРОХОДИТ + ЦЕНА ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Как проходит</span>
      <h2 class="sh">От заявки до акта</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg><span><b>Запись под дату приёмки.</b> Согласуем осмотр под дату, на которую вас пригласил застройщик.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Осмотр с приборами — 1–2 часа.</b> Простукиваем отделку, гоняем инженерию, ищем скрытую влагу; дефекты — в фото и ведомость.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Официальный акт осмотра.</b> Полный акт с фото и привязкой к квартире готовим на месте — за 15 минут после осмотра.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg><span><b>Повторный выезд после устранения — 50%</b> от стоимости первичной приёмки.</span></li>
    </ul>
    <p class="micro" data-reveal>Цена — от 8 000 ₽, по площади и объёму отделки; точную сумму <a class="more" href="/tseny/">калькулятор покажет за минуту</a>. Стоимость фиксируем в договоре, без доплат на месте.</p>
  </div>
</section>

<!-- ===== ГРАНИЦЫ (тёмная) ===== -->
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
        <li>Не вскрываем отделку и конструкции — работаем неразрушающим контролем.</li>
        <li>Не обещаем, что застройщик устранит всё, и не гарантируем исход возможного спора.</li>
      </ul>
      <p>Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наш акт станет для неё основой. Возможность что-либо требовать с застройщика зависит от вашей ситуации и закона на момент обращения.</p>
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
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/check-plumbing.jpg" alt="Финальная приёмка ремонта" loading="lazy"><span class="num-tag">02</span><h3>Финальная приёмка ремонта</h3><p>Приёмка квартиры после вашей ремонтной бригады — до финального расчёта.</p><a class="more" href="/finalnaya-priemka-remonta/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/check-electro.jpg" alt="Технический надзор ремонта" loading="lazy"><span class="num-tag">03</span><h3>Технадзор ремонта</h3><p>Контроль бригады на каждом этапе — чтобы дефекты не пришлось искать в конце.</p><a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Дистанционная приёмка" loading="lazy"><span class="num-tag">04</span><h3>Дистанционная приёмка</h3><p>Для иногородних: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о приёмке после ремонта</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Чем это отличается от финальной приёмки ремонта?</summary><p>Здесь речь о квартире с <b>чистовой отделкой от застройщика</b> — вы принимаете её у девелопера. <a href="/finalnaya-priemka-remonta/" style="color:#cc2018">Финальная приёмка ремонта</a> — это проверка работ вашей собственной ремонтной бригады перед финальным расчётом. Узлы похожи, но заказчик и адресат претензий разные.</p></details>
      <details data-reveal><summary>Что вообще можно найти под готовой отделкой?</summary><p>Пустоты под плиткой, вздутый ламинат, неровные стены под обоями, сырые углы и мостики холода, слабую тягу вентиляции, неработающие розетки и протечки в подключённой сантехнике. Многое всплывает только под приборами — простукиванием, влагомером и тепловизором.</p></details>
      <details data-reveal><summary>Нужен ли тепловизор?</summary><p>Тепловизор помогает найти скрытую влагу и мостики холода, которые не видно глазу, особенно в углах и у окон. Делаем тепловизионную съёмку по запросу; результат с кадрами попадает в акт.</p></details>
      <details data-reveal><summary>Сколько стоит и сколько занимает приёмка?</summary><p>Цена — от 8 000 ₽ по площади и объёму отделки, калькулятор посчитает за минуту. Осмотр занимает 1–2 часа, а полный акт с фото вы получаете на месте — за 15 минут.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Запишитесь на приёмку квартиры после ремонта</h2>
      <p class="sec-lead">Проверим готовую квартиру до того, как вы подпишете акт. Опишите объект — посчитаем стоимость и согласуем время.</p>
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
