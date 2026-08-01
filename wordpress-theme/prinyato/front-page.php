<?php get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<!-- ===================== 1. HERO ===================== -->
<section class="hero" id="hero" data-section="hero">
  <div class="wrap">
    <div class="akt">
      <h1>Профессиональная приёмка квартир<br>и&nbsp;домов в&nbsp;Калининграде<br>и&nbsp;на&nbsp;побережье</h1>
      <div class="hero-grid">
        <div>
          <p class="lead-red">Находим то, что застройщик прячет за свежей краской, и&nbsp;<span id="mark-lead">фиксируем так, что отмахнуться уже нельзя</span>.</p>
          <ul class="hero-bullets">
            <li>
              <svg class="ic ic--act" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
              <span>Официальный акт за 10 минут осмотра с подписью эксперта — застройщик обязан устранить, а не «принять к сведению».</span>
            </li>
            <li>
              <svg class="ic ic--recheck" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M23 4v6h-6"/><path d="M1 20v-6h6"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg>
              <span>После ремонта приедем ещё раз и проверим, всё ли исправили.</span>
            </li>
            <li>
              <svg class="ic ic--remote" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M22 2L11 13"/><path d="M22 2l-7 20-4-9-9-4 20-7z"/></svg>
              <span>Живёте не в Калининграде? Примем квартиру за вас по доверенности.</span>
            </li>
          </ul>

          <div class="cta-row">
            <a href="#quiz" class="btn lg">Рассчитать стоимость за минуту</a>
            <span class="hand cta-note">4 вопроса —<br>и узнаете цену!</span>
          </div>

          <div class="hero-second">
            <span>Связаться можно здесь:</span>
            <span class="msgs" id="heroMsgs"><a class="msg-ic" href="https://telegram.me/prinyatoprokld" target="_blank" rel="noopener noreferrer" aria-label="Написать менеджеру в Telegram"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg></a><a class="msg-ic msg-ic--max" href="https://max.ru/u/f9LHodD0cOK3Yq9kgn81PXJtOp0m5d_rycDzkp4gQoCqpfLeI7UFhFmELIk" target="_blank" rel="noopener noreferrer" aria-label="Написать менеджеру в MAX"><svg viewBox="0 0 1000 1000" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M508.211 878.328c-75.007 0-109.864-10.95-170.453-54.75-38.325 49.275-159.686 87.783-164.979 21.9 0-49.456-10.95-91.248-23.36-136.873-14.782-56.21-31.572-118.807-31.572-209.508 0-216.626 177.754-379.597 388.357-379.597 210.785 0 375.947 171.001 375.947 381.604.707 207.346-166.595 376.118-373.94 377.224m3.103-571.585c-102.564-5.292-182.499 65.7-200.201 177.024-14.6 92.162 11.315 204.398 33.397 210.238 10.585 2.555 37.23-18.98 53.837-35.587a189.8 189.8 0 0 0 92.71 33.032c106.273 5.112 197.08-75.794 204.215-181.95 4.154-106.382-77.67-196.486-183.958-202.574Z"/></svg></a><a href="tel:+79062377902">Позвонить</a></span>
          </div>
        </div>

        <div class="photo-wrap photo-single">
          <img class="photo" src="<?php echo $T; ?>/assets/img/hero-main.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/hero-main.jpg'); ?>" alt="Команда ПринятоПро — эксперты по приёмке квартир и технадзору в Калининграде" width="1600" height="1280">
          <span class="tape"></span>
          <div class="photo-cap">Видим проблемы,<br>которые стоят дорого</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== 1.5 СРОКИ ПО ЗАКОНУ (цифры «для клиента») ===================== -->
<section class="sec srok" id="srok" data-section="srok" aria-label="Сроки приёмки по закону">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Ещё не поздно</span>
      <h2 class="sh">Подписали акт? Сроки по&nbsp;закону ещё&nbsp;идут</h2>
      <p class="sec-lead">Приёмка не заканчивается в день выдачи ключей. По 214-ФЗ у вас есть гарантийные сроки, в течение которых застройщик обязан бесплатно устранить дефекты — даже если акт приёма-передачи уже подписан.</p>
    </div>
    <div class="statband" data-reveal>
      <div class="stat"><b data-count="3" data-suffix=" года">3 года</b><span>гарантия на квартиру: стены, полы, стяжка, окна, конструктив</span></div>
      <div class="stat"><b data-count="3" data-suffix=" года">3 года</b><span>гарантия на инженерное и технологическое оборудование</span></div>
      <div class="stat"><b data-count="1" data-suffix=" год">1 год</b><span>гарантия на отделочные работы и элементы отделки</span></div>
      <div class="stat"><b>9 из 10</b><span>квартир мы принимаем с дефектами, которые устраняет застройщик</span></div>
    </div>
    <p class="srok-note" data-reveal>Сроки считаются со дня передачи квартиры (для оборудования — со дня первого передаточного акта по дому). Пока они идут, дефекты можно зафиксировать актом и потребовать устранения за счёт застройщика. <a href="#quiz">Проверим вашу квартиру →</a></p>
  </div>
</section>

<!-- ===================== 2. ТРАСТЫ / ЦИФРЫ ===================== -->
<section class="trust" id="trust" data-section="trust" aria-label="ПринятоПро в цифрах">
  <div class="wrap">
    <div class="tcard" data-reveal><div class="num">с 2014</div><div class="lbl">принимаем квартиры в Калининграде</div></div>
    <div class="tcard" data-reveal><div class="num red">500+</div><div class="lbl">объектов приняли за наших клиентов</div></div>
    <div class="tcard" data-reveal><div class="num">98%</div><div class="lbl">советуют нас своим знакомым</div></div>
    <div class="tcard" data-reveal><div class="num">90+</div><div class="lbl">параметров проверяем по ГОСТ и СП</div></div>
    <div class="tcard" data-reveal><div class="num">НОПРИЗ</div><div class="lbl">инженеры в профильных реестрах</div></div>
    <div class="tcard" data-reveal><div class="num red">−50%</div><div class="lbl">на повторную проверку после устранения</div></div>
    <p class="trust-micro">За каждой цифрой — конкретная приёмка, конкретный акт и конкретный застройщик, который по нашему документу всё переделал.</p>
  </div>
</section>

<!-- ===================== КВИЗ (захват, сразу после цифр) ===================== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Расчёт за минуту</span>
      <h2 class="sh">Узнайте стоимость приёмки</h2>
      <p class="sec-lead">Ответьте на 4 коротких вопроса — покажем ориентировочную цену и подберём формат приёмки под ваш объект. Расчёт бесплатный.</p>
    </div>

    <div class="quiz-embed" data-reveal>
      <!-- Собственный квиз (без Marquiz): 4 вопроса → контакты → лид в Битрикс24. Логика — js/quiz.js -->
      <div class="pp-quiz" id="ppQuiz">
        <div class="ppq-top">
          <span class="ppq-counter">Шаг <b id="ppqStepNum">1</b> из 5</span>
          <div class="ppq-bar"><span id="ppqBarFill" style="width:20%"></span></div>
        </div>

        <!-- Шаг 1: объект -->
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

        <!-- Шаг 2: площадь -->
        <div class="ppq-step" data-step="2" data-key="Площадь">
          <h3 class="ppq-q">Какая площадь объекта?</h3>
          <div class="ppq-opts ppq-opts--text">
            <button type="button" class="ppq-opt" data-value="До 40 м²" data-area="s"><span class="ppq-big">до 40</span><span class="ppq-label">м²</span></button>
            <button type="button" class="ppq-opt" data-value="40–60 м²" data-area="m"><span class="ppq-big">40–60</span><span class="ppq-label">м²</span></button>
            <button type="button" class="ppq-opt" data-value="60–90 м²" data-area="l"><span class="ppq-big">60–90</span><span class="ppq-label">м²</span></button>
            <button type="button" class="ppq-opt" data-value="Более 90 м²" data-area="xl"><span class="ppq-big">90+</span><span class="ppq-label">м²</span></button>
          </div>
        </div>

        <!-- Шаг 3: сроки -->
        <div class="ppq-step" data-step="3" data-key="Сроки">
          <h3 class="ppq-q">Когда нужна приёмка?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Приглашение уже пришло">Приглашение на приёмку уже пришло</button>
            <button type="button" class="ppq-opt" data-value="В ближайший месяц">Ключи выдают в ближайший месяц</button>
            <button type="button" class="ppq-opt" data-value="Через 1–3 месяца">Через 1–3 месяца</button>
            <button type="button" class="ppq-opt" data-value="Пока изучаю вопрос">Пока изучаю вопрос</button>
          </div>
        </div>

        <!-- Шаг 4: присутствие -->
        <div class="ppq-step" data-step="4" data-key="Присутствие">
          <h3 class="ppq-q">Как вам удобнее провести приёмку?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Буду присутствовать лично">Буду присутствовать лично</button>
            <button type="button" class="ppq-opt" data-value="Дистанционно по доверенности">Дистанционно — я в другом городе</button>
            <button type="button" class="ppq-opt" data-value="Ещё не решил">Ещё не решил(а)</button>
          </div>
        </div>

        <!-- Шаг 5: контакты -->
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

<!-- ===================== 3. ЧТО ПРОВЕРЯЕМ ===================== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="hs" data-hscroll="desktop">
      <div class="hs-pin">
        <div class="sec-head" data-reveal>
          <span class="eyebrow">Объём работ</span>
          <h2 class="sh">Что мы проверяем</h2>
          <p class="sec-lead">Приёмка — это не прогулка по комнатам с блокнотом. Мы проходим 90+ параметров по ГОСТ, СП и ПУЭ: от вертикали стен до тяги в вентканале. Каждый дефект уходит в дефектную ведомость с фотографией, привязанной к вашей квартире.</p>
        </div>
        <div class="swipe-hint" aria-hidden="true">← Листайте влево</div>
        <div class="check-track" data-hscroll-track>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-geometry.jpg" alt="Проверка геометрии стен правилом на приёмке квартиры" width="400" height="267" loading="lazy" decoding="async">
            <b>Геометрия и поверхности</b><span>Отклонение стен от вертикали, ровность пола и потолка, перепады стяжки.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-screed.jpg" alt="Проверка стяжки пола: толщина, ровность и пустоты" width="400" height="267" loading="lazy" decoding="async">
            <b>Проверка стяжки</b><span>Толщина, ровность, пустоты и трещины — основа будущего пола.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-windows.jpg" alt="Проверка фурнитуры и стеклопакетов окна" width="400" height="267" loading="lazy" decoding="async">
            <b>Окна, балконы, лоджии</b><span>Стеклопакеты, фурнитура, монтажные швы, подоконники, отливы, продувание и промерзание.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-electro.jpg" alt="Проверка электрощитка и автоматов по ПУЭ" width="400" height="267" loading="lazy" decoding="async">
            <b>Электрика по ПУЭ</b><span>Щиток, автоматы, заземление, работа розеток и выводов, защитная автоматика.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-plumbing.jpg" alt="Проверка стояков водоснабжения и счётчиков" width="400" height="267" loading="lazy" decoding="async">
            <b>Сантехника и отопление</b><span>Водоснабжение и водоотведение, опрессовка, радиаторы, узлы, протечки.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-vent.jpg" alt="Проверка тяги вентиляции анемометром" width="400" height="267" loading="lazy" decoding="async">
            <b>Вентиляция</b><span>Тяга в каналах и работа естественной вытяжки.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-thermal.jpg" alt="Тепловизор показывает промерзание угла комнаты" width="400" height="267" loading="lazy" decoding="async">
            <b>Тепловой контур</b><span>Холодные швы, мостики холода, промерзание углов и стыков — смотрим тепловизором.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-door.jpg" alt="Проверка замков и петель входной двери" width="400" height="267" loading="lazy" decoding="async">
            <b>Дверь и комплектация</b><span>Входная дверь, замки, петли, соответствие площади данным ДДУ и БТИ.</span>
          </div>
          <div class="check-card" data-reveal>
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-docs.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/check-docs.jpg'); ?>" alt="Эксперт заполняет дефектную ведомость с фотофиксацией" width="400" height="267" loading="lazy" decoding="async">
            <b>Документы и фиксация</b><span>Каждый дефект — отдельный кадр с привязкой к помещению, всё в дефектную ведомость.</span>
          </div>
        </div>
      </div>
    </div>

    <div class="equip">
      <div class="hs" data-hscroll>
        <div class="hs-pin">
          <h3 class="sh3" data-reveal>Оборудование и зачем оно нужно</h3>
          <p class="sec-lead" data-reveal>Глазом скрытый дефект не поймать. Поэтому на каждую приёмку едем с поверенными приборами.</p>
          <div class="equip-grid" data-hscroll-track>
            <div class="equip-card" data-reveal>
              <img class="ec-photo" src="<?php echo $T; ?>/assets/img/equip-thermal.jpg" alt="Тепловизор — поиск мостиков холода и продувания на приёмке квартиры" width="360" height="240" loading="lazy" decoding="async">
              <b>Тепловизор</b><span>Показывает мостики холода и продувание, из которых зимой растёт плесень и счета за отопление.</span>
            </div>
            <div class="equip-card" data-reveal>
              <img class="ec-photo" src="<?php echo $T; ?>/assets/img/equip-laser.jpg" alt="Лазерный нивелир — проверка вертикали стен и перепадов пола" width="360" height="240" loading="lazy" decoding="async">
              <b>Лазерный нивелир</b><span>Меряет вертикаль стен и перепады пола. Кривые поверхности всё равно вылезут на ремонте.</span>
            </div>
            <div class="equip-card" data-reveal>
              <img class="ec-photo" src="<?php echo $T; ?>/assets/img/equip-pyrometer.jpg" alt="Пирометр — точечное измерение температуры поверхностей" width="360" height="240" loading="lazy" decoding="async">
              <b>Пирометр</b><span>Точечно снимает температуру поверхностей и ловит теплопотери у окон, откосов, радиаторов.</span>
            </div>
            <div class="equip-card" data-reveal>
              <img class="ec-photo" src="<?php echo $T; ?>/assets/img/equip-endoscope.jpg" alt="Эндоскоп — осмотр вентиляции и скрытых полостей" width="360" height="240" loading="lazy" decoding="async">
              <b>Эндоскоп</b><span>Заглядывает туда, куда рукой не достать: вентиляция, ниши, стыки за коробами.</span>
            </div>
            <div class="equip-card" data-reveal>
              <img class="ec-photo" src="<?php echo $T; ?>/assets/img/equip-tester.jpg" alt="Электротестер — проверка розеток, напряжения и заземления по ПУЭ" width="360" height="240" loading="lazy" decoding="async">
              <b>Электротестер</b><span>Проверяет напряжение, заземление и работу электрики по ПУЭ.</span>
            </div>
          </div>
        </div>
      </div>
      <p class="micro" data-reveal>Приборы поверены, а измерения вы видите своими глазами. Мы не говорим «тут холодно» — мы показываем цифру и кадр с тепловизора.</p>
    </div>
  </div>
</section>

<!-- ===================== 4. ЛЕНТА ЭТАПОВ (scroll-snap карусель) ===================== -->
<section class="sec process" id="process" data-section="process">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Процесс</span>
      <h2 class="sh">Как проходит приёмка: 5 шагов</h2>
    </div>
  </div>

  <div class="process-carousel" data-reveal>
    <div class="process-track" id="processTrack" role="list" tabindex="0" aria-label="Этапы приёмки — листайте вбок">
      <article class="pstep" role="listitem">
        <div class="pstamp">01<small>заявка</small></div>
        <div class="pbody"><b>Заявка</b><p>Оставляете заявку или проходите опрос. Согласуем дату, уточним тип объекта и подскажем, какие документы взять с собой.</p></div>
      </article>
      <article class="pstep" role="listitem">
        <div class="pstamp">02<small>выезд</small></div>
        <div class="pbody"><b>Выезд эксперта</b><p>Эксперт приезжает на объект с тепловизором, нивелиром и пирометром. Вы рядом или подключаетесь онлайн — как удобнее.</p></div>
      </article>
      <article class="pstep" role="listitem">
        <div class="pstamp">03<small>проверка</small></div>
        <div class="pbody"><b>Проверка приборами</b><p>Проходим 90+ параметров: геометрия, электрика, сантехника, вентиляция, тепловой контур. Каждый дефект фотографируем с привязкой к квартире.</p></div>
      </article>
      <article class="pstep" role="listitem">
        <div class="pstamp">04<small>акт</small></div>
        <div class="pbody"><b>Официальный акт и ведомость</b><p>Составляем официальный акт осмотра с подписью эксперта и дефектную ведомость. Это документ, который застройщик обязан исполнить.</p></div>
      </article>
      <article class="pstep" role="listitem">
        <div class="pstamp">05<small>контроль</small></div>
        <div class="pbody"><b>Контроль устранения</b><p>Застройщик всё исправил — при необходимости выезжаем на повторную проверку и фиксируем результат. Акт приёма-передачи вы подписываете только когда квартира в порядке.</p></div>
      </article>
    </div>
  </div>

  <div class="wrap">
    <div class="process-controls" data-reveal>
      <button class="proc-arrow" id="procPrev" type="button" aria-label="Предыдущий шаг" disabled>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M15 5l-7 7 7 7"/></svg>
      </button>
      <div class="proc-dots" id="procDots" role="tablist" aria-label="Навигация по этапам"></div>
      <button class="proc-arrow" id="procNext" type="button" aria-label="Следующий шаг">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 5l7 7-7 7"/></svg>
      </button>
    </div>
  </div>
</section>

<!-- ===================== 5. УСЛУГИ ===================== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуги</span>
      <h2 class="sh">Наши услуги</h2>
    </div>
    <div class="svc-grid">
      <div class="svc" data-reveal>
        <span class="num-tag">01</span>
        <h3>Приёмка квартиры от застройщика</h3>
        <p>Проверяем квартиру до или после подписания акта приёма-передачи. Находим дефекты и показываем, что застройщик обязан устранить.</p>
        <div class="price">от 8 000 ₽ <small>по площади</small></div>
        <a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">02</span>
        <h3>Технический надзор ремонта</h3>
        <p>Контролируем качество ремонта на ключевых этапах. Акт после каждого выезда — вы понимаете, за что платите бригаде.</p>
        <div class="price">от 16 000 ₽/мес <small>«Мини»</small></div>
        <a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">03</span>
        <h3>Разовый технический аудит ремонта</h3>
        <p>Один выезд инженера: проверить состояние ремонта или принять отдельный этап перед расчётом с подрядчиком.</p>
        <div class="price">от 10 000 ₽ <small>разовый выезд</small></div>
        <a class="more" href="/razovyy-audit-remonta/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">04</span>
        <h3>Финальная приёмка ремонта</h3>
        <p>Проверяем готовый ремонт перед окончательным расчётом со строителями, фиксируем недочёты в акте.</p>
        <div class="price">от 15 000 ₽ <small>по площади</small></div>
        <a class="more" href="/finalnaya-priemka-remonta/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">05</span>
        <h3>Дистанционная приёмка</h3>
        <p>Для иногородних: примем квартиру по доверенности, покажем всё по видеосвязи и пришлём акт — без вашего приезда.</p>
        <div class="price">от 11 000 ₽ <small>по доверенности</small></div>
        <a class="more" href="/distantsionnaya-priemka/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal style="justify-content:center;align-items:flex-start;background:var(--ink);color:var(--paper-2)">
        <h3 style="color:#fff">Не знаете, что выбрать?</h3>
        <p style="color:#d3c8b2">Пройдите короткий опрос — подберём услугу и покажем ориентировочную цену по вашему объекту.</p>
        <a class="btn" href="#lead-modal" data-lead-open style="margin-top:14px">Подобрать и рассчитать</a>
      </div>
    </div>
    <p class="micro" data-reveal>Точную цену зафиксируем в договоре, без «доплат на месте».</p>
  </div>
</section>

<!-- ===================== 7. ГАРАНТИИ / АКТ ===================== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Гарантии</span>
      <h2 class="sh">Официальный акт осмотра, фото с привязкой<br>и фиксированная цена в договоре</h2>
      <p class="sec-lead">Главный страх на этом рынке — заплатить за «филькин акт»: безымянную распечатку с фото непонятно чьей квартиры, которую застройщик спокойно проигнорирует. У нас так не выйдет. Вот что остаётся у вас на руках.</p>
    </div>
    <div class="guarant-grid">
      <div class="guarant-list">
        <div class="gitem" data-reveal><b>Официальный акт осмотра</b><p>Акт осмотра с подписью эксперта, а не безымянная распечатка. На его основании застройщик обязан устранить дефекты.</p></div>
        <div class="gitem" data-reveal><b>Фото с привязкой к вашей квартире</b><p>Каждый дефект — отдельный кадр с привязкой к конкретному объекту и помещению. Сказать «это не у нас» уже не получится.</p></div>
        <div class="gitem" data-reveal><b>Проверка по 90+ параметрам</b><p>Идём по чек-листу из 90+ пунктов с профессиональным оборудованием — от геометрии стен до вентиляции и электрики. Видим то, что не заметно на глаз.</p></div>
        <div class="gitem" data-reveal><b>Работаем по договору</b><p>Стоимость зафиксирована заранее. Никаких «доплат на месте» и сюрпризов в цене.</p></div>
      </div>
      <div class="doc-stack" data-doc-stack data-reveal aria-label="Страницы реального акта осмотра: перечень приборов, нормативы и дефектная ведомость по комнатам с фото дефектов">
        <span class="doc-stack__hint" aria-hidden="true">нажмите, чтобы листать</span>
        <span class="doc-stack__arrow" aria-hidden="true"><svg viewBox="0 0 28 52" width="30" height="56" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M14 4C11 18 17 32 14 44"/><path d="M6 34l8 10 8-10"/></svg></span>
        <div class="doc-stack__deck">
          <figure class="doc-card" style="--d:0"><img src="<?php echo $T; ?>/assets/img/doc-1.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/doc-1.jpg'); ?>" alt="Страница акта: перечень приборов и оборудования для обследования квартиры" width="760" height="1069" loading="lazy" decoding="async"></figure>
          <figure class="doc-card" style="--d:1"><img src="<?php echo $T; ?>/assets/img/doc-2.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/doc-2.jpg'); ?>" alt="Страница акта: перечень нормативной литературы (ГОСТ и СП), по которым ведётся обследование" width="760" height="1083" loading="lazy" decoding="async"></figure>
          <figure class="doc-card" style="--d:2"><img src="<?php echo $T; ?>/assets/img/doc-3.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/doc-3.jpg'); ?>" alt="Страница акта: дефектная ведомость по кухне с фотографиями дефектов" width="760" height="1072" loading="lazy" decoding="async"></figure>
          <figure class="doc-card" style="--d:3"><img src="<?php echo $T; ?>/assets/img/doc-4.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/doc-4.jpg'); ?>" alt="Страница акта: продолжение дефектной ведомости с фотографиями дефектов" width="760" height="1074" loading="lazy" decoding="async"></figure>
          <figure class="doc-card" style="--d:4"><img src="<?php echo $T; ?>/assets/img/doc-5.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/doc-5.jpg'); ?>" alt="Страница акта: дефектная ведомость по комнате с лоджией с фотографиями дефектов" width="760" height="1065" loading="lazy" decoding="async"></figure>
          <figure class="doc-card" style="--d:5"><img src="<?php echo $T; ?>/assets/img/doc-6.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/doc-6.jpg'); ?>" alt="Страница акта: завершение дефектной ведомости с фотографиями дефектов" width="760" height="1065" loading="lazy" decoding="async"></figure>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== 7.5 ЗАЯВКА (форма → Битрикс24) ===================== -->
<section class="sec lead" id="lead" data-section="lead">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">Заявка</span>
        <h2 class="lead-title">Оставьте заявку — подберём услугу и рассчитаем стоимость</h2>
        <p class="lead-sub">Перезвоним в течение 15 минут, поможем выбрать услугу под ваш объект, назовём точную цену и подберём свободную дату эксперта. Отвечаем по делу — без навязчивых звонков.</p>
        <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
      </div>
      <div class="lead-right">
        <img src="<?php echo $T; ?>/assets/img/apartment.jpg" alt="Новая квартира без отделки в новостройке Калининграда — готова к приёмке" loading="lazy" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===================== 8. ЭКСПЕРТЫ ===================== -->
<section class="sec" id="experts" data-section="experts">
  <div class="wrap">
    <div class="hs" data-hscroll>
    <div class="hs-pin">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Команда</span>
      <h2 class="sh">Наши эксперты</h2>
      <p class="sec-lead">За вашу приёмку отвечает конкретный человек, а не безымянный колл-центр. Это инженеры с профильным образованием, опытом на реальных стройках и регалиями в профессиональных реестрах. Вы заранее знаете, кто приедет и кто подпишет ваш акт.</p>
    </div>
    <div class="exp-grid" data-hscroll-track>
      <div class="exp" data-reveal>
        <img class="exp-photo" src="<?php echo $T; ?>/assets/img/expert-1.jpg?v=<?php echo filemtime(get_template_directory() . '/assets/img/expert-1.jpg'); ?>" alt="Андрей Соколов — ведущий инженер-эксперт по приёмке квартир" width="380" height="500" loading="lazy">
        <b>Андрей Соколов</b>
        <div class="role">Ведущий инженер-эксперт по приёмке</div>
        <div class="meta">Опыт 13 лет · принял более 900 объектов<br>Инженер в реестре НОПРИЗ</div>
      </div>
      <div class="exp" data-reveal>
        <img class="exp-photo" src="<?php echo $T; ?>/assets/img/expert-2.jpg?v=<?php echo filemtime(get_template_directory() . '/assets/img/expert-2.jpg'); ?>" alt="Калгин Дмитрий — инженер технического надзора, тепловизионное обследование" width="380" height="500" loading="lazy">
        <b>Калгин Дмитрий</b>
        <div class="role">Инженер технического надзора</div>
        <div class="meta">Опыт 11 лет · более 700 объектов<br>Тепловизионное обследование, инженерные системы (вентиляция, отопление), геометрия стен и стяжки</div>
      </div>
      <div class="exp" data-reveal>
        <img class="exp-photo" src="<?php echo $T; ?>/assets/img/expert-3.jpg?v=<?php echo filemtime(get_template_directory() . '/assets/img/expert-3.jpg'); ?>" alt="Калужин Игорь — эксперт по дистанционной приёмке квартир" width="380" height="500" loading="lazy">
        <b>Калужин Игорь</b>
        <div class="role">Эксперт по дистанционной приёмке</div>
        <div class="meta">Опыт 9 лет · более 600 приёмок<br>Дистанционная приёмка по доверенности, окна и остекление, электрика и слаботочные системы</div>
      </div>
    </div>
    </div>
    </div>
    <p class="micro" data-reveal>Регалии и сертификаты экспертов предоставляем по запросу.</p>
  </div>
</section>

<!-- ===================== 9. ВИДЕО / КЕЙСЫ ===================== -->
<section class="sec" id="video" data-section="video" style="background:var(--paper-2)">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Доказательства</span>
      <h2 class="sh">Реальные приёмки на видео</h2>
      <p class="sec-lead">Не на словах, а на видео. Снимаем реальные приёмки: как тепловизор находит дефект, как он попадает в акт, как застройщик его устраняет. Первые ролики появятся здесь совсем скоро — вы увидите процесс ещё до того, как что-то закажете.</p>
    </div>
    <div class="video-grid">
      <div class="vcard" data-reveal>
        <button type="button" class="vthumb" data-video-open data-video-embed="https://vk.ru/video_ext.php?oid=-239384119&amp;id=456239039&amp;autoplay=1" aria-label="Смотреть видео: приёмка квартиры в новостройке">
          <img src="<?php echo $T; ?>/assets/img/video-1.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/video-1.jpg'); ?>" alt="Акт технической приёмки: чек-лист, локальная смета и инженер на объекте" loading="lazy" decoding="async">
          <span class="play"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg></span>
        </button>
        <p>Приёмка квартиры в новостройке: как тепловизор находит дефект и как он попадает в акт.</p>
      </div>
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $T; ?>/assets/img/video-2.jpg" alt="Инженер проверяет стену лазерным нивелиром в новостройке" loading="lazy" decoding="async"><span class="vsoon">Скоро</span></div>
        <p>Дистанционная приёмка для клиента из другого города — весь процесс онлайн.</p>
      </div>
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $T; ?>/assets/img/video-3.jpg" alt="Эксперт заполняет дефектную ведомость на приёмке" loading="lazy" decoding="async"><span class="vsoon">Скоро</span></div>
        <p>Приёмка дома на побережье: что проверяем в ИЖС.</p>
      </div>
    </div>
    <p class="micro" data-reveal>Снимаем реальные приёмки и публикуем их здесь по мере выхода.</p>
  </div>
</section>

<!-- Модалка проигрывателя видео (ВКонтакте embed) — iframe создаётся только при открытии -->
<div class="video-modal" id="video-modal" aria-hidden="true">
  <div class="video-modal__overlay" data-video-close></div>
  <div class="video-modal__card" role="dialog" aria-modal="true" aria-label="Видео приёмки">
    <button class="video-modal__close" type="button" data-video-close aria-label="Закрыть">&times;</button>
    <div class="video-modal__frame" id="video-modal-frame"></div>
  </div>
</div>

<!-- ===================== 10. ОТЗЫВЫ ===================== -->
<section class="sec" id="reviews" data-section="reviews">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Отзывы</span>
      <h2 class="sh">Что говорят клиенты</h2>
    </div>
    <div class="rev-grid">
      <div class="rev" data-reveal>
        <p>Боялась, что приедут, формально пройдутся и дадут бумажку. А эксперт два часа всё мерил тепловизором, нашёл продувание окон и кривую стяжку. Застройщик исправил по акту. Спасибо, что не дали подписать как есть.</p>
        <div class="who">Приёмка квартиры, Калининград</div>
      </div>
      <div class="rev" data-reveal>
        <p>Я в Москве, квартира в Зеленоградске. Приняли по доверенности, всё показали по видеосвязи, прислали видеообзор и акт. Ни разу не пришлось лететь. Для иногородних — то что нужно.</p>
        <div class="who">Дистанционная приёмка, Зеленоградск</div>
      </div>
      <div class="rev" data-reveal>
        <p>Брали приёмку дома. Проверили то, о чём я бы и не подумал: кровлю, узлы инженерии, фундамент. Список дефектов на две страницы, всё с фото. Стоило каждого рубля.</p>
        <div class="who">Приёмка дома, Калининградская область</div>
      </div>
      <div class="rev" data-reveal>
        <p>Понравилось, что цену назвали сразу и записали в договор. Никаких «ой, тут ещё доплата».</p>
        <div class="who">Приёмка квартиры, Калининград</div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== 11. ГЕО ===================== -->
<section class="sec" id="geo" data-section="geo" style="background:var(--paper-2)">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">География</span>
      <h2 class="sh">Где мы работаем</h2>
      <p class="sec-lead">Работаем по всему Калининграду и области. Чаще всего выезжаем в сам Калининград и в курортные города у моря — туда, где активно строят и где квартиры берут инвесторы и переезжающие.</p>
    </div>
    <div class="geo-grid">
      <ul class="geo-list">
        <li data-reveal><b>Калининград</b> — приёмка квартир в новостройках по всему городу.</li>
        <li data-reveal><b>Зеленоградск</b> — приёмка квартир в курортных новостройках.</li>
        <li data-reveal><b>Светлогорск</b> — приёмка квартир и апартаментов у моря.</li>
        <li data-reveal><b>Пионерский</b> — приёмка в новых жилых комплексах на берегу.</li>
        <li data-reveal><b>Гурьевск</b> — приёмка в новостройках пригорода Калининграда.</li>
        <li data-reveal><b>Балтийск</b> — выезд на запад области, к морю.</li>
        <li data-reveal><b>Янтарный</b> — приёмка квартир и апартаментов на побережье.</li>
      </ul>
      <div class="act-sample has-img" data-reveal>
        <img src="<?php echo $T; ?>/assets/img/region-map.jpg" alt="Карта работы: Калининград, Зеленоградск, Светлогорск, Пионерский" loading="lazy" decoding="async">
      </div>
    </div>
    <p class="micro" data-reveal>Не нашли свой город? Мы ездим по всей области — уточните по телефону или в заявке.</p>
  </div>
</section>

<!-- ===================== 12. ЗАЯВКА (гео-нота, форма → Битрикс24) ===================== -->
<section class="sec lead" id="cta" data-section="cta">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">География</span>
        <h2 class="lead-title">Не нашли свой город? Оставьте заявку</h2>
        <p class="lead-sub">Выезжаем по всему Калининграду и области — от побережья до пригородов. Перезвоним, уточним адрес объекта и подберём свободную дату эксперта.</p>
        <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
      </div>
      <div class="lead-right">
        <img src="<?php echo $T; ?>/assets/img/apartment.jpg" alt="Приёмка квартир и домов по всему Калининграду и области — выезд эксперта" loading="lazy" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===================== 13. FAQ ===================== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Сколько стоит приёмка квартиры в Калининграде?</summary><p>Ориентировочно от 8 000 ₽. Точная цена зависит от площади, типа объекта и набора работ; по рынку Калининграда приёмка обычно стоит 8 000–15 000 ₽. Стоимость мы фиксируем в договоре заранее, без доплат на месте. Рассчитать цену по вашей квартире можно за минуту в опросе выше.</p></details>
      <details data-reveal><summary>Сколько длится приёмка?</summary><p>В среднем 1,5–3 часа, дом или таунхаус дольше. За это время эксперт обходит весь объект с оборудованием, фотографирует каждый дефект и вносит замечания в дефектную ведомость.</p></details>
      <details data-reveal><summary>Что будет, если найдём дефекты?</summary><p>Внесём их в официальный акт и дефектную ведомость — документ, который застройщик обязан исполнить. Акт приёма-передачи вы не подписываете, пока дефекты не устранены. После устранения можно заказать повторный выезд, чтобы убедиться, что всё исправлено.</p></details>
      <details data-reveal><summary>Нужно ли мне присутствовать лично?</summary><p>Не обязательно. Вы можете быть рядом с экспертом, подключиться по видеосвязи или полностью доверить приёмку нам по доверенности — это удобно для иногородних. В любом случае получите видеообзор, фото дефектов и официальный акт.</p></details>
      <details data-reveal><summary>Реально ли принять квартиру дистанционно?</summary><p>Да. Эксперт принимает квартиру по доверенности, показывает всё по видеосвязи в реальном времени, присылает видеообзор и оформляет документы. Так делают иногородние и инвесторы — это экономит минимум два приезда в Калининград.</p></details>
      <details data-reveal><summary>Чем «официальный акт» отличается от обычной бумажки?</summary><p>Это документ осмотра с подписью эксперта и фотографиями дефектов, привязанными к вашей квартире. Такой акт застройщик обязан принять и исполнить, а не отмахнуться словами «фото чужое».</p></details>
      <details data-reveal><summary>Можно ли взыскать с застройщика неустойку за дефекты?</summary><p>В ряде случаев закон даёт право требовать устранения дефектов или компенсации. <!-- сверить с актуальным законом: мораторий на неустойки периодически ограничивает взыскание; формулировки про неустойку 214-ФЗ проверять перед публикацией -->Конкретные варианты зависят от вашей ситуации и от закона, действующего на момент обращения. Мы зафиксируем дефекты официальными документами и подскажем, что у вас есть.</p></details>
      <details data-reveal><summary>Нужны ли документы об образовании эксперта?</summary><p>Да, наши эксперты — инженеры с профильным образованием и регалиями в профессиональном реестре НОПРИЗ, документы и сертификаты предоставляем по запросу. Некоторые застройщики требуют подтвердить квалификацию специалиста, и у нас с этим проблем не возникает.</p></details>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
