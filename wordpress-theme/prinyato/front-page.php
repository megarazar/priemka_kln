<?php get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<!-- ===================== 1. HERO ===================== -->
<section class="hero" id="hero" data-section="hero">
  <div class="wrap">
    <div class="akt">
      <div class="akt-meta">
        <div class="f"><span class="k">Услуга:</span><span class="v">Приёмка квартир и домов</span></div>
        <div class="f"><span class="k">Регион:</span><span class="v">Калининград и область</span></div>
        <div class="akt-no">№ 000174</div>
        <div class="f"><span class="k">Документ:</span><span class="v">Официальный акт с печатью</span></div>
        <div class="f"><span class="k">Статус:</span><span class="v">&nbsp;</span></div>
      </div>

      <div class="hero-grid">
        <div>
          <h1>Профессиональная приёмка квартир и домов в Калининграде и на&nbsp;побережье</h1>
          <p class="lead-red">Находим то, что застройщик прячет за свежей краской, и&nbsp;<span id="mark-lead">фиксируем так, что отмахнуться уже нельзя</span>.</p>
          <p class="lead">Официальный акт с печатью и фото каждого дефекта с привязкой к вашей квартире. Живёте не в Калининграде? Примем квартиру за вас по доверенности.</p>

          <ul class="hero-bullets">
            <li>
              <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg>
              <span>Акт с печатью и подписью эксперта — застройщик обязан устранить, а не «принять к сведению».</span>
            </li>
            <li>
              <svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 18 0 9 9 0 0 0-18 0z"/><path d="M12 7v5l3 2"/></svg>
              <span>После ремонта приедем ещё раз и проверим, всё ли исправили. Бесплатно — это уже в цене.</span>
            </li>
          </ul>

          <div class="cta-row">
            <a href="#quiz" class="btn lg">Рассчитать стоимость за минуту</a>
            <span class="hand cta-note">6 вопросов —<br>и узнаете цену!</span>
          </div>
          <p class="cta-sub">Покажем ориентировочную цену и предварительное заключение по вашему объекту.</p>

          <div class="hero-second">
            <span>Нужен живой совет? Перезвоним за 15 минут.</span>
            <span class="msgs"><a href="https://t.me/prinyatopro" target="_blank" rel="noopener noreferrer">Telegram</a> · <a href="https://vk.com/prinyatopro" target="_blank" rel="noopener noreferrer">ВКонтакте</a> · <a href="tel:+79062167091">Позвонить</a></span>
          </div>
        </div>

        <div class="photo-wrap">
          <span class="tape"></span>
          <img class="photo" src="<?php echo $T; ?>/assets/img/apartment.jpg" alt="Приёмка квартиры без отделки в новостройке Калининграда" width="440" height="550">
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
      <p class="sec-lead">Ответьте на 6 коротких вопросов. Покажем ориентировочную цену и предварительное заключение по вашему объекту. Это бесплатно и ни к чему не обязывает.</p>
    </div>

    <div class="quiz-embed" data-reveal>
      <!-- MARQUIZ: сюда вставить код квиза с marquiz.ru
           1) перед <?php wp_footer(); ?>
</body> подключить: <script src="https://script.marquiz.ru/v2.js"></script>
           2) тут разместить контейнер: <div class="marquiz-embed" data-id="ВАШ_ID" data-fallback-mode="modal"></div>
           Заглушка ниже — заменить на виджет Marquiz. -->
      <div class="quiz-placeholder">
        <span class="qp-stamp">Опрос · 6 вопросов</span>
        <strong>Подберём услугу и посчитаем стоимость</strong>
        <p>Ответите на 6 коротких вопросов — покажем ориентировочную цену и предварительное заключение по вашему объекту. Бесплатно и ни к чему не обязывает.</p>
        <a class="btn lg" href="#quiz" id="quizCta">Пройти опрос и узнать цену</a>
        <span class="qp-note">Здесь будет встроен квиз Marquiz</span>
      </div>
    </div>
  </div>
</section>

<!-- ===================== 3. ЧТО ПРОВЕРЯЕМ ===================== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Объём работ</span>
      <h2 class="sh">Что мы проверяем</h2>
      <p class="sec-lead">Приёмка — это не прогулка по комнатам с блокнотом. Мы проходим 90+ параметров по ГОСТ, СП и ПУЭ: от вертикали стен до тяги в вентканале. Каждый дефект уходит в дефектную ведомость с фотографией, привязанной к вашей квартире.</p>
    </div>

    <div class="check-grid">
      <div class="check-item" data-reveal><b>Геометрия и поверхности</b><span>Отклонение стен от вертикали, ровность пола и потолка, перепады стяжки.</span></div>
      <div class="check-item" data-reveal><b>Окна, балконы, лоджии</b><span>Стеклопакеты, фурнитура, монтажные швы, подоконники, отливы, продувание и промерзание.</span></div>
      <div class="check-item" data-reveal><b>Электрика по ПУЭ</b><span>Щиток, автоматы, заземление, работа розеток и выводов, защитная автоматика.</span></div>
      <div class="check-item" data-reveal><b>Сантехника и отопление</b><span>Водоснабжение и водоотведение, опрессовка, радиаторы, узлы, протечки.</span></div>
      <div class="check-item" data-reveal><b>Вентиляция</b><span>Тяга в каналах и работа естественной вытяжки.</span></div>
      <div class="check-item" data-reveal><b>Тепловой контур</b><span>Холодные швы, мостики холода, промерзание углов и стыков — смотрим тепловизором.</span></div>
      <div class="check-item" data-reveal><b>Дверь и комплектация</b><span>Входная дверь, замки, петли, соответствие площади данным ДДУ и БТИ.</span></div>
      <div class="check-item" data-reveal><b>Документы и фиксация</b><span>Каждый дефект — отдельный кадр с привязкой к помещению, всё в дефектную ведомость.</span></div>
    </div>

    <div class="equip">
      <h3 class="sh3" data-reveal>Оборудование и зачем оно нужно</h3>
      <p class="sec-lead" data-reveal>Глазом скрытый дефект не поймать. Поэтому на каждую приёмку едем с поверенными приборами.</p>
      <div class="equip-grid">
        <div class="equip-card" data-reveal>
          <svg class="ec-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><rect x="3" y="3" width="18" height="14" rx="2"/><path d="M7 21h10M12 17v4"/></svg>
          <b>Тепловизор</b><span>Показывает мостики холода и продувание, из которых зимой растёт плесень и счета за отопление.</span>
        </div>
        <div class="equip-card" data-reveal>
          <svg class="ec-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M12 2v20M2 12h20"/><circle cx="12" cy="12" r="4"/></svg>
          <b>Лазерный нивелир</b><span>Меряет вертикаль стен и перепады пола. Кривые поверхности всё равно вылезут на ремонте.</span>
        </div>
        <div class="equip-card" data-reveal>
          <svg class="ec-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M5 3v18M5 12h9l3-4-3-4H5"/></svg>
          <b>Пирометр</b><span>Точечно снимает температуру поверхностей и ловит теплопотери у окон, откосов, радиаторов.</span>
        </div>
        <div class="equip-card" data-reveal>
          <svg class="ec-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><circle cx="7" cy="7" r="4"/><path d="M10 10l8 8-2 2-8-8"/></svg>
          <b>Эндоскоп</b><span>Заглядывает туда, куда рукой не достать: вентиляция, ниши, стыки за коробами.</span>
        </div>
        <div class="equip-card" data-reveal>
          <svg class="ec-ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6"><path d="M13 2L3 14h7l-1 8 10-12h-7z"/></svg>
          <b>Электротестер</b><span>Проверяет напряжение, заземление и работу электрики по ПУЭ.</span>
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
        <div class="pbody"><b>Контроль устранения</b><p>Застройщик всё исправил — приезжаем на бесплатную повторную проверку. Акт приёма-передачи вы подписываете только когда квартира в порядке.</p></div>
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
      <h2 class="sh">Что мы принимаем</h2>
    </div>
    <div class="svc-grid">
      <div class="svc" data-reveal>
        <span class="num-tag">01</span>
        <h3>Приёмка квартиры в новостройке</h3>
        <p>Полная проверка квартиры с отделкой или без перед подписанием акта приёма-передачи. Найдём дефекты застройщика и зафиксируем их официально.</p>
        <div class="price">от 4 900 ₽ <small>ориентировочно</small></div>
        <a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">02</span>
        <h3>Приёмка от застройщика «под ключ»</h3>
        <p>Берём приёмку на себя целиком: осмотр, акт, ведомость, контроль устранения. На выходе — готовый результат, а не список проблем, с которым непонятно что делать.</p>
        <div class="price">от 9 900 ₽ <small>ориентировочно</small></div>
        <a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">03</span>
        <h3>Приёмка домов и таунхаусов</h3>
        <p>Дом сложнее квартиры: участок, кровля, фундамент, инженерия. Проверяем целиком, от подвала до конька крыши.</p>
        <div class="price">от 12 000 ₽ <small>ориентировочно</small></div>
        <a class="more" href="/priemka-domov/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">04</span>
        <h3>Приёмка квартиры после ремонта</h3>
        <p>Принимаем работу бригады или дизайн-проекта: качество отделки, инженерию, соответствие смете. Подпишете акт строителям только после нашей проверки.</p>
        <div class="price">от 5 900 ₽ <small>ориентировочно</small></div>
        <a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal>
        <span class="num-tag">05</span>
        <h3>Независимый технадзор за ремонтом</h3>
        <p>Контролируем вашу бригаду на каждом этапе. Сами мы не ремонтируем, поэтому проверяем чужую работу без конфликта интересов.</p>
        <div class="price">от 15 000 ₽ <small>ориентировочно</small></div>
        <a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a>
      </div>
      <div class="svc" data-reveal style="justify-content:center;align-items:flex-start;background:var(--ink);color:var(--paper-2)">
        <h3 style="color:#fff">Не знаете, что выбрать?</h3>
        <p style="color:#d3c8b2">Пройдите короткий опрос — подберём услугу и покажем ориентировочную цену по вашему объекту.</p>
        <a class="btn" href="#quiz" style="margin-top:14px">Подобрать и рассчитать</a>
      </div>
    </div>
    <p class="micro" data-reveal>Точную цену зафиксируем в договоре, без «доплат на месте».</p>
  </div>
</section>

<!-- ===================== 6. ДИСТАНЦИОННАЯ ===================== -->
<section class="sec distance" id="distance" data-section="distance">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Для иногородних</span>
      <h2 class="sh">Дистанционная приёмка «под ключ»</h2>
      <p class="sec-lead">Купили квартиру у моря, а сами живёте в другом регионе? Лететь в Калининград ради приёмки не нужно. Примем квартиру за вас по доверенности и проведём через весь процесс онлайн.</p>
      <p style="margin-top:14px;font-size:16px"><b style="color:#fff">Экономит минимум два приезда</b> — на осмотр и на повторный контроль после устранения. Перелёт, гостиница и отгулы остаются при вас.</p>
    </div>
    <div class="dist-grid">
      <ul class="dist-list">
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg><span><b>Приёмка по доверенности.</b> Эксперт осматривает квартиру, вы подключаетесь по видеосвязи и видите всё в реальном времени.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M15 10l4.5-2.5v9L15 14M3 6h12v12H3z"/></svg><span><b>Полный видеообзор.</b> Снимаем подробное видео каждого помещения и каждого дефекта и присылаем вам.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span><b>Документы дистанционно.</b> Официальный акт и претензию застройщику оформляем без вашего личного присутствия.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Контроль устранения.</b> После исправлений проводим бесплатную повторную проверку, тоже удалённо.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 10V7a2 2 0 0 0-2-2h-3M3 14v3a2 2 0 0 0 2 2h3M7 11l5-5 5 5M12 6v12"/></svg><span><b>Ключи и пакет документов.</b> Закрываем формальности на месте и пересылаем вам всё необходимое.</span></li>
      </ul>
      <div>
        <div class="dist-video" data-reveal>[Видеообзор реальной дистанционной приёмки: как клиент из другого города принял квартиру, ни разу не приехав в Калининград. — плейсхолдер]</div>
        <a class="btn lg dist-cta" href="#quiz">Оставить заявку на дистанционную приёмку</a>
      </div>
    </div>
  </div>
</section>

<!-- ===================== 7. ГАРАНТИИ / АКТ ===================== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Гарантии</span>
      <h2 class="sh">Акт с печатью, фото с привязкой, бесплатная повторная проверка</h2>
      <p class="sec-lead">Главный страх на этом рынке — заплатить за «филькин акт»: бумажку без печати и фото непонятно чьей квартиры, которую застройщик спокойно проигнорирует. У нас так не выйдет. Вот что остаётся у вас на руках.</p>
    </div>
    <div class="guarant-grid">
      <div class="guarant-list">
        <div class="gitem" data-reveal><b>Официальный акт с печатью</b><p>Акт осмотра с печатью компании и подписью эксперта, а не безымянная распечатка. На его основании застройщик обязан устранить дефекты.</p></div>
        <div class="gitem" data-reveal><b>Фото с привязкой к вашей квартире</b><p>Каждый дефект — отдельный кадр с привязкой к конкретному объекту и помещению. Сказать «это не у нас» уже не получится.</p></div>
        <div class="gitem" data-reveal><b>Бесплатная повторная проверка</b><p>После устранения приезжаем снова, бесплатно, и проверяем, что застройщик действительно всё исправил.</p></div>
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
    <div class="lead-card" data-reveal>
      <div class="sec-head">
        <span class="eyebrow">Заявка</span>
        <h2 class="sh">Оставьте заявку на приёмку</h2>
        <p class="lead-sub">Перезвоним, уточним детали объекта и рассчитаем стоимость. Ни к чему не обязывает.</p>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
    </div>
  </div>
</section>

<!-- ===================== 8. ЭКСПЕРТЫ ===================== -->
<section class="sec" id="experts" data-section="experts">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Команда</span>
      <h2 class="sh">Наши эксперты</h2>
      <p class="sec-lead">За вашу приёмку отвечает конкретный человек, а не безымянный колл-центр. Это инженеры с профильным образованием, опытом на реальных стройках и регалиями в профессиональных реестрах. Вы заранее знаете, кто приедет и кто подпишет ваш акт.</p>
    </div>
    <div class="exp-grid">
      <div class="exp" data-reveal>
        <img class="exp-photo" src="<?php echo $T; ?>/assets/img/expert-1.jpg" alt="Андрей Соколов — ведущий инженер-эксперт по приёмке квартир" width="380" height="500" loading="lazy">
        <b>Андрей Соколов</b>
        <div class="role">Ведущий инженер-эксперт по приёмке</div>
        <div class="meta">Опыт: [N] лет · принял [N] объектов<br>[инженер в реестре НОПРИЗ — подтвердить]</div>
      </div>
      <div class="exp" data-reveal>
        <img class="exp-photo" src="<?php echo $T; ?>/assets/img/expert-2.jpg" alt="Марина Ковалёва — инженер технического надзора, тепловизионное обследование" width="380" height="500" loading="lazy">
        <b>Марина Ковалёва</b>
        <div class="role">Инженер технического надзора</div>
        <div class="meta">Опыт: [N] лет · специализация тепловидение<br>[реестр НОСТРОЙ / сертификаты — подтвердить]</div>
      </div>
      <div class="exp" data-reveal>
        <img class="exp-photo" src="<?php echo $T; ?>/assets/img/expert-3.jpg" alt="Дмитрий Кравцов — эксперт по дистанционной приёмке квартир" width="380" height="500" loading="lazy">
        <b>Дмитрий Кравцов</b>
        <div class="role">Эксперт по дистанционной приёмке</div>
        <div class="meta">Опыт: [N] лет · приёмка по доверенности<br>[профильное образование — подтвердить]</div>
      </div>
    </div>
    <p class="micro" data-reveal>Имена и фото — рабочие плейсхолдеры (можно заменить на реальных экспертов). Регалии и сертификаты показываем по запросу.</p>
  </div>
</section>

<!-- ===================== 9. ВИДЕО / КЕЙСЫ ===================== -->
<section class="sec" id="video" data-section="video" style="background:var(--paper-2)">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Доказательства</span>
      <h2 class="sh">Реальные приёмки на видео</h2>
      <p class="sec-lead">Не верьте на слово — посмотрите, как мы работаем. Снимаем реальные приёмки: как тепловизор находит дефект, как он попадает в акт, как застройщик его устраняет. Вы видите процесс ещё до того, как что-то заказали.</p>
    </div>
    <div class="video-grid">
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $T; ?>/assets/img/video-1.jpg" alt="Тепловизор находит мостик холода на приёмке квартиры" loading="lazy" decoding="async"><span class="play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div>
        <p>[Приёмка квартиры в ЖК «название»: нашли дефект, застройщик устранил по акту. — плейсхолдер]</p>
      </div>
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $T; ?>/assets/img/video-2.jpg" alt="Инженер проверяет стену лазерным нивелиром в новостройке" loading="lazy" decoding="async"><span class="play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div>
        <p>[Дистанционная приёмка для клиента из другого города: весь процесс онлайн. — плейсхолдер]</p>
      </div>
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $T; ?>/assets/img/video-3.jpg" alt="Эксперт заполняет дефектную ведомость на приёмке" loading="lazy" decoding="async"><span class="play"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></span></div>
        <p>[Приёмка дома на побережье: что проверяем в ИЖС. — плейсхолдер]</p>
      </div>
    </div>
    <p class="micro" data-reveal>[Ссылка на канал / плейлист — плейсхолдер.] Новые приёмки выкладываем регулярно.</p>
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
        <div class="who">[Имя], квартира в [ЖК], Калининград</div>
        <div class="tag">образец — заменить реальным отзывом</div>
      </div>
      <div class="rev" data-reveal>
        <p>Я в Москве, квартира в Зеленоградске. Приняли по доверенности, всё показали по видеосвязи, прислали видеообзор и акт. Ни разу не пришлось лететь. Для иногородних — то что нужно.</p>
        <div class="who">[Имя], квартира в [ЖК], Зеленоградск</div>
        <div class="tag">образец — заменить реальным отзывом</div>
      </div>
      <div class="rev" data-reveal>
        <p>Брали приёмку дома. Проверили то, о чём я бы и не подумал: кровлю, узлы инженерии, фундамент. Список дефектов на две страницы, всё с фото. Стоило каждого рубля.</p>
        <div class="who">[Имя], дом в [посёлок], Калининградская область</div>
        <div class="tag">образец — заменить реальным отзывом</div>
      </div>
      <div class="rev" data-reveal>
        <p>Понравилось, что цену назвали сразу и записали в договор. Никаких «ой, тут ещё доплата». Повторную проверку сделали бесплатно, как и обещали.</p>
        <div class="who">[Имя], квартира в [ЖК], Калининград</div>
        <div class="tag">образец — заменить реальным отзывом</div>
      </div>
    </div>
    <p class="micro" data-reveal>[Реальные отзывы с оценками — на Яндексе, 2ГИС, Авито. Ссылки — плейсхолдеры.]</p>
  </div>
</section>

<!-- ===================== 11. ГЕО ===================== -->
<section class="sec" id="geo" data-section="geo" style="background:var(--paper-2)">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">География</span>
      <h2 class="sh">Где мы работаем</h2>
      <p class="sec-lead">Работаем по всему Калининграду и Калининградской области. Выезжаем в города и на побережье — туда, где строят и где квартиры всё чаще берут инвесторы и переезжающие к морю.</p>
    </div>
    <div class="geo-grid">
      <ul class="geo-list">
        <li data-reveal><b>Калининград</b> — приёмка квартир в новостройках по всему городу.</li>
        <li data-reveal><b>Калининградская область</b> — выезд в Гурьевск, Светлый, Балтийск, Советск и другие города.</li>
        <li data-reveal>
          <b>Побережье Балтийского моря</b>
          <div class="geo-coast">
            <span><a href="/priemka-kvartir-zelenogradsk/">Приёмка квартир в Зеленоградске →</a> <span class="soon">страница в работе</span></span>
            <span><a href="/priemka-kvartir-svetlogorsk/">Приёмка квартир в Светлогорске →</a> <span class="soon">страница в работе</span></span>
            <span><a href="/priemka-kvartir-pionersky/">Приёмка квартир в Пионерском →</a> <span class="soon">страница в работе</span></span>
          </div>
        </li>
      </ul>
      <div class="act-sample has-img" data-reveal>
        <img src="<?php echo $T; ?>/assets/img/coast-map.jpg" alt="Карта работы: Калининград и побережье — Зеленоградск, Светлогорск, Пионерский" loading="lazy" decoding="async">
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
      <details data-reveal><summary>Сколько стоит приёмка квартиры в Калининграде?</summary><p>Ориентировочно от 4 900 ₽. Точная цена зависит от площади, типа отделки и объекта; по рынку Калининграда приёмка обычно стоит 5 000–15 000 ₽. Стоимость мы фиксируем в договоре заранее, без доплат на месте. Рассчитать цену по вашей квартире можно за минуту в опросе выше.</p></details>
      <details data-reveal><summary>Сколько длится приёмка?</summary><p>В среднем 1,5–3 часа, дом или таунхаус дольше. За это время эксперт обходит весь объект с оборудованием, фотографирует каждый дефект и вносит замечания в дефектную ведомость.</p></details>
      <details data-reveal><summary>Что будет, если найдём дефекты?</summary><p>Внесём их в официальный акт и дефектную ведомость — документ, который застройщик обязан исполнить. Акт приёма-передачи вы не подписываете, пока дефекты не устранены. После устранения приезжаем на бесплатную повторную проверку.</p></details>
      <details data-reveal><summary>Нужно ли мне присутствовать лично?</summary><p>Не обязательно. Вы можете быть рядом с экспертом, подключиться по видеосвязи или полностью доверить приёмку нам по доверенности — это удобно для иногородних. В любом случае получите видеообзор, фото дефектов и официальный акт.</p></details>
      <details data-reveal><summary>Реально ли принять квартиру дистанционно?</summary><p>Да. Эксперт принимает квартиру по доверенности, показывает всё по видеосвязи в реальном времени, присылает видеообзор и оформляет документы. Так делают иногородние и инвесторы — это экономит минимум два приезда в Калининград.</p></details>
      <details data-reveal><summary>Чем «официальный акт» отличается от обычной бумажки?</summary><p>Это документ осмотра с печатью компании, подписью эксперта и фотографиями дефектов, привязанными к вашей квартире. Такой акт застройщик обязан принять и исполнить, а не отмахнуться словами «фото чужое».</p></details>
      <details data-reveal><summary>Можно ли взыскать с застройщика неустойку за дефекты?</summary><p>В ряде случаев закон даёт право требовать устранения дефектов или компенсации. <!-- сверить с актуальным законом: мораторий на неустойки периодически ограничивает взыскание; формулировки про неустойку 214-ФЗ проверять перед публикацией -->Конкретные варианты зависят от вашей ситуации и от закона, действующего на момент обращения. Мы зафиксируем дефекты официальными документами и подскажем, что у вас есть.</p></details>
      <details data-reveal><summary>Нужны ли документы об образовании эксперта?</summary><p>Да, наши эксперты — инженеры с профильным образованием и регалиями в реестрах [НОПРИЗ/НОСТРОЙ], документы предоставляем по запросу. Некоторые застройщики требуют подтвердить квалификацию специалиста, и у нас с этим проблем не возникает.</p></details>
    </div>
  </div>
</section>

</main>
<?php get_footer(); ?>
