<?php get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<!-- ===================== 1. HERO ===================== -->
<section class="hero" id="hero" data-section="hero">
  <div class="wrap">
    <div class="akt">
      <div class="hero-grid">
        <div>
          <h1>Профессиональная приёмка квартир и домов в Калининграде и на&nbsp;побережье</h1>
          <p class="lead-red">Находим то, что застройщик прячет за свежей краской, и&nbsp;<span id="mark-lead">фиксируем так, что отмахнуться уже нельзя</span>.</p>
          <p class="lead">Официальный акт за 10 минут с печатью и фото каждого дефекта с привязкой к вашей квартире. Живёте не в Калининграде? Примем квартиру за вас по доверенности.</p>

          <ul class="hero-bullets">
            <li>
              <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
              <span>Акт с печатью и подписью эксперта — застройщик обязан устранить, а не «принять к сведению».</span>
            </li>
            <li>
              <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0z"/><path d="M12 7v5l3 2"/></svg>
              <span>После ремонта приедем ещё раз и проверим, всё ли исправили.</span>
            </li>
          </ul>

          <div class="cta-row">
            <a href="#quiz" class="btn lg">Рассчитать стоимость за минуту</a>
            <span class="hand cta-note">4 вопроса —<br>и узнаете цену!</span>
          </div>

          <div class="hero-second">
            <span>Связаться можно здесь:</span>
            <span class="msgs" id="heroMsgs"><a href="https://t.me/prinyatopro" target="_blank" rel="noopener noreferrer">Telegram</a> · <a href="https://vk.com/prinyatopro" target="_blank" rel="noopener noreferrer">ВКонтакте</a> · <a href="tel:+79062377902">Позвонить</a></span>
          </div>
        </div>

        <div class="photo-wrap photo-fan">
          <img class="photo fan-b2" src="<?php echo $T; ?>/assets/img/hero-fan-3.jpg" alt="" aria-hidden="true" width="440" height="550" loading="lazy" decoding="async">
          <img class="photo fan-b1" src="<?php echo $T; ?>/assets/img/hero-fan-2.jpg" alt="" aria-hidden="true" width="440" height="550" loading="lazy" decoding="async">
          <img class="photo fan-front" src="<?php echo $T; ?>/assets/img/hero-fan-1.jpg" alt="Приёмка квартиры без отделки в новостройке Калининграда" width="440" height="550">
          <span class="tape"></span>
          <div class="photo-cap">Видим проблемы,<br>которые стоят дорого</div>
          <div class="stamp notchecked">Не проверено<small>статус объекта</small></div>
        </div>
      </div>
    </div>
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
    <div class="tcard" data-reveal><div class="num red">0 ₽</div><div class="lbl">повторная проверка после устранения</div></div>
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
            <img class="cc-photo" src="<?php echo $T; ?>/assets/img/check-docs.jpg" alt="Эксперт заполняет дефектную ведомость с фотофиксацией" width="400" height="267" loading="lazy" decoding="async">
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
        <div class="pbody"><b>Официальный акт и ведомость</b><p>Составляем акт с печатью и подписью эксперта и дефектную ведомость. Это документ, который застройщик обязан исполнить.</p></div>
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
      <h2 class="sh">Акт с печатью, фото с привязкой и фиксированная цена в договоре</h2>
      <p class="sec-lead">Главный страх на этом рынке — заплатить за «филькин акт»: бумажку без печати и фото непонятно чьей квартиры, которую застройщик спокойно проигнорирует. У нас так не выйдет. Вот что остаётся у вас на руках.</p>
    </div>
    <div class="guarant-grid">
      <div class="guarant-list">
        <div class="gitem" data-reveal><b>Официальный акт с печатью</b><p>Акт осмотра с печатью компании и подписью эксперта, а не безымянная распечатка. На его основании застройщик обязан устранить дефекты.</p></div>
        <div class="gitem" data-reveal><b>Фото с привязкой к вашей квартире</b><p>Каждый дефект — отдельный кадр с привязкой к конкретному объекту и помещению. Сказать «это не у нас» уже не получится.</p></div>
        <div class="gitem" data-reveal><b>Проверка по 90+ параметрам</b><p>Идём по чек-листу из 90+ пунктов с профессиональным оборудованием — от геометрии стен до вентиляции и электрики. Видим то, что не заметно на глаз.</p></div>
        <div class="gitem" data-reveal><b>Работаем по договору</b><p>Стоимость зафиксирована заранее. Никаких «доплат на месте» и сюрпризов в цене.</p></div>
      </div>
      <div class="act-sample has-img" data-reveal>
        <img src="<?php echo $T; ?>/assets/img/act-sample.jpg" alt="Образец официального акта осмотра квартиры с дефектной ведомостью, печатью и подписями экспертов" loading="lazy" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===================== 7.5 ЗАЯВКА (форма → Битрикс24) ===================== -->
<section class="sec lead" id="lead" data-section="lead">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">Заявка на приёмку</span>
        <h2 class="lead-title">Узнайте стоимость приёмки именно вашей квартиры</h2>
        <p class="lead-sub">Перезвоним в течение 15 минут, уточним площадь и тип отделки, назовём точную цену и подберём свободную дату эксперта. Отвечаем по делу — без навязчивых звонков.</p>
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
        <div class="vthumb"><img src="<?php echo $T; ?>/assets/img/video-1.jpg" alt="Тепловизор находит мостик холода на приёмке квартиры" loading="lazy" decoding="async"><span class="vsoon">Скоро</span></div>
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
      <details data-reveal><summary>Чем «официальный акт» отличается от обычной бумажки?</summary><p>Это документ осмотра с печатью компании, подписью эксперта и фотографиями дефектов, привязанными к вашей квартире. Такой акт застройщик обязан принять и исполнить, а не отмахнуться словами «фото чужое».</p></details>
      <details data-reveal><summary>Можно ли взыскать с застройщика неустойку за дефекты?</summary><p>В ряде случаев закон даёт право требовать устранения дефектов или компенсации. <!-- сверить с актуальным законом: мораторий на неустойки периодически ограничивает взыскание; формулировки про неустойку 214-ФЗ проверять перед публикацией -->Конкретные варианты зависят от вашей ситуации и от закона, действующего на момент обращения. Мы зафиксируем дефекты официальными документами и подскажем, что у вас есть.</p></details>
      <details data-reveal><summary>Нужны ли документы об образовании эксперта?</summary><p>Да, наши эксперты — инженеры с профильным образованием и регалиями в профессиональном реестре НОПРИЗ, документы и сертификаты предоставляем по запросу. Некоторые застройщики требуют подтвердить квалификацию специалиста, и у нас с этим проблем не возникает.</p></details>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
