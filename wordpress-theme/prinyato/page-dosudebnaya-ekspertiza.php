<?php
/**
 * Шаблон страницы «Досудебная строительно-техническая экспертиза» (/dosudebnaya-ekspertiza/).
 * Подхватывается автоматически по слагу. Услуга-продолжение приёмки: что делать, когда
 * застройщик не устранил дефекты из акта.
 * Дизайн-система темы prinyato (AURADESIGN). Те же ID секций, что у /razovyy-audit-remonta/ —
 * рваные края/фоны работают без правок CSS. Meta title/description задаются в Yoast.
 *
 * ⚠️ Правовая база сверена 13.08.2026:
 *  - ПП РФ №2380 от 29.12.2023 (спецпорядок передачи объекта, 60 дней на устранение)
 *    УТРАТИЛО СИЛУ с 01.01.2026. Не ссылаться на него как на действующее и не обещать
 *    «60 дней» / «10 рабочих дней» — этих сроков в ст. 7 214-ФЗ нет.
 *  - Действует общий порядок ст. 7 214-ФЗ: дольщик по своему выбору вправе требовать
 *    безвозмездного устранения в разумный срок, соразмерного уменьшения цены договора
 *    либо возмещения расходов на устранение. Гарантия: объект — не менее 3 лет,
 *    инженерное оборудование — не менее 3 лет, отделочные работы — не менее 1 года.
 *  - Конкретные сроки ответа на претензию зависят от заявленного требования и договора,
 *    поэтому на странице они намеренно не называются числами.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-expertiza">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Услуги","item":"https://prinyatopro.ru/uslugi/" },
  { "@type":"ListItem","position":3,"name":"Досудебная экспертиза","item":"https://prinyatopro.ru/dosudebnaya-ekspertiza/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Досудебная строительно-техническая экспертиза",
  "serviceType":"Строительно-техническая экспертиза",
  "description":"Заключение с расчётом стоимости устранения каждого дефекта и обоснованием нарушенных строительных норм — документ, который принимают в суде, когда застройщик не исправил недостатки по акту приёмки.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"},
  "offers":{"@type":"Offer","priceCurrency":"RUB","description":"Стоимость рассчитывается по объёму дефектов и площади объекта"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="audit" data-section="audit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуга</span>
      <h1 class="sh">Досудебная экспертиза: когда застройщик не исправил дефекты</h1>
      <p class="sec-lead">Акт приёмки на руках, сроки прошли, а недостатки на месте. Дальше нужен другой документ — экспертиза с расчётом стоимости устранения каждого дефекта. Готовим её так, чтобы суд принял заключение как доказательство, и доводим вас от претензии до иска.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Обсудить ситуацию</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <div class="statband statband--ink" data-reveal>
      <div class="stat"><b data-count="3" data-suffix=" года">3 года</b><span>гарантия на объект по 214-ФЗ</span></div>
      <div class="stat"><b data-count="1" data-suffix=" год">1 год</b><span>гарантия на отделку</span></div>
      <div class="stat"><b>₽</b><span>расчёт по каждому дефекту</span></div>
      <div class="stat"><b>СРО</b><span>аттестованный эксперт</span></div>
    </div>
  </div>
</section>

<!-- ===== КОМУ НУЖНА ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Кому подходит</span>
      <h2 class="sh">Когда нужна досудебная экспертиза</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Вы приняли квартиру с замечаниями, застройщик обещал исправить — и не исправил.</li>
        <li>На претензию пришёл отказ или не пришло ничего.</li>
        <li>Дефекты устранили формально: подкрасили, замазали, а причина осталась.</li>
        <li>Недостатки вылезли уже после заселения — трещины, промерзание, конденсат, протечки.</li>
        <li>Вы подписали акт без замечаний, а проблемы обнаружились позже.</li>
        <li>Нужно понять, на какую сумму вы вправе претендовать, прежде чем идти в суд.</li>
      </ul>
      <p>Экспертиза отвечает на вопрос, которого нет в акте осмотра: сколько стоит привести квартиру в состояние, за которое вы заплатили, и какие именно нормы нарушил застройщик.</p>
    </div>
  </div>
</section>

<!-- ===== АКТ vs ЭКСПЕРТИЗА ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">В чём разница</span>
      <h2 class="sh">Акт осмотра и экспертиза — разные документы</h2>
      <p class="sec-lead">Их часто путают, и из-за этого теряют деньги. Акт фиксирует, что дефект есть. Экспертиза доказывает, чего он стоит.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc">
        <span class="num-tag">01</span>
        <h3>Акт осмотра</h3>
        <p>Перечень дефектов с фотографиями и привязкой к месту. Нужен, чтобы предъявить претензию застройщику и зафиксировать состояние квартиры на момент передачи. Суммы в нём нет.</p>
        <a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Как проходит приёмка →</a>
      </div>
      <div class="svc">
        <span class="num-tag">02</span>
        <h3>Досудебная экспертиза</h3>
        <p>Расчёт стоимости устранения по каждому дефекту в текущих расценках плюс обоснование: какой пункт СНиП, ГОСТ или проекта нарушен. Это то, на что суд опирается, присуждая сумму.</p>
      </div>
      <div class="svc" style="justify-content:center;align-items:flex-start;background:var(--ink);color:var(--paper-2)">
        <h3 style="color:#fff">Не уверены, что у вас на руках?</h3>
        <p style="color:#d3c8b2">Пришлите акт — посмотрим, хватит ли его для претензии и есть ли смысл в экспертизе.</p>
        <a class="btn" href="#lead-modal" data-lead-open style="margin-top:14px">Показать документы</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== ПОРЯДОК ДЕЙСТВИЙ ===== -->
<section class="sec" id="process" data-section="process">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Порядок действий</span>
      <h2 class="sh">Как выглядит путь до денег</h2>
      <p class="sec-lead">Четыре шага. Первый вы, возможно, уже прошли — тогда начинаем со второго.</p>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Шаг 1. Фиксация дефектов.</b> Осмотр со специалистом и акт: каждый дефект с фото и замерами. Если акт уже подписан без замечаний — это не тупик: скрытые недостатки, которые нельзя было увидеть при обычном осмотре, заявляются и позже, в пределах гарантийного срока.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v12H5.2L4 18.5z"/></svg><span><b>Шаг 2. Претензия застройщику.</b> Обязательный этап перед судом. В ней вы выбираете требование: безвозмездно устранить недостатки, соразмерно уменьшить цену договора или возместить ваши расходы на устранение. Отправляем заказным письмом с уведомлением — переписка потом работает как доказательство.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v18M5 8h14M7 12h10"/></svg><span><b>Шаг 3. Экспертиза.</b> Застройщик отказал или молчит — готовим строительно-техническое заключение с расчётом стоимости устранения и ссылками на нарушенные нормы. Это ядро будущего иска.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21h18M6 21V9l6-5 6 5v12"/><path d="M10 21v-6h4v6"/></svg><span><b>Шаг 4. Иск в суд.</b> К заявлению прикладываются экспертиза, акт осмотра, переписка с застройщиком и ДДУ. На этом этапе подключается юрист-партнёр, а наш эксперт при необходимости выходит в заседание и защищает расчёт.</span></li>
    </ul>
    <p class="micro" data-reveal>Сроки ответа на претензию зависят от того, какое требование вы заявили, и от условий вашего ДДУ — разберём их по вашему договору, а не по общему шаблону. Как составить и подать претензию — подробно разобрали в статье <a class="more" href="/pretenziya-zastroyschiku-ustranenie-nedostatkov/">«Застройщик не устраняет дефекты»</a>.</p>
  </div>
</section>

<!-- ===== ЧТО ВХОДИТ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что вы получаете</span>
      <h2 class="sh">Что входит в экспертизу</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Выезд аттестованного эксперта на объект и инструментальный осмотр: тепловизор, лазерный уровень, влагомер, анемометр.</li>
        <li>Определение каждого дефекта: что нарушено, по какому пункту СНиП, ГОСТ или проектной документации.</li>
        <li>Отделение производственных дефектов от эксплуатационных — это первое, за что цепляется защита застройщика.</li>
        <li>Локальный сметный расчёт стоимости устранения в актуальных расценках, по каждой позиции отдельно.</li>
        <li>Фототаблица с привязкой к помещениям и результаты замеров.</li>
        <li>Заключение с выводами эксперта, копиями документов об образовании, аттестации и членстве в СРО.</li>
        <li>Готовый пакет для суда: заключение в нужном количестве экземпляров, прошитое и заверенное.</li>
      </ul>
      <p>Если понадобится — эксперт участвует в судебном заседании и отвечает на вопросы сторон по своему расчёту.</p>
    </div>
  </div>
</section>

<!-- ===== ПОЧЕМУ МЫ ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Отличие</span>
      <h2 class="sh">Чем это отличается от «просто приёмки»</h2>
      <p class="sec-lead">Большинство приёмщиков заканчивают работу на акте. Дальше клиент остаётся один.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Доводим до суммы</h3><p>Не просто список замечаний, а расчёт: сколько стоит устранить каждый дефект. С этой цифрой уже можно требовать деньги.</p></div>
      <div class="svc"><span class="num-tag">02</span><h3>Ведём весь путь</h3><p>Претензия, экспертиза, подготовка иска, суд. Техническую часть закрываем сами, судебную — вместе с юристом-партнёром.</p></div>
      <div class="svc"><span class="num-tag">03</span><h3>Эксперт с документами</h3><p>Заключение готовит аттестованный специалист с профильным образованием и членством в СРО — иначе суд вправе его не принять.</p></div>
      <div class="svc"><span class="num-tag">04</span><h3>Работаем по текущему закону</h3><p>С 2026 года особый порядок передачи объекта больше не действует, и требовать деньги можно сразу, не дожидаясь, пока застройщик что-то исправит.</p></div>
    </div>
  </div>
</section>

<!-- ===== КВИЗ (расчёт стоимости) — тот же, что на главной ===== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Калькулятор</span>
      <h2 class="sh">Оставьте заявку на экспертизу</h2>
      <p class="sec-lead">Ответьте на 4 коротких вопроса — разберём вашу ситуацию и скажем, что делать дальше. Консультация бесплатная.</p>
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
          <h3 class="ppq-q">На какой вы стадии?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Акт есть, застройщик не исправил">Акт есть, застройщик не исправил</button>
            <button type="button" class="ppq-opt" data-value="Претензию отправил, получил отказ">Претензию отправил, получил отказ</button>
            <button type="button" class="ppq-opt" data-value="Дефекты вылезли после заселения">Дефекты вылезли после заселения</button>
            <button type="button" class="ppq-opt" data-value="Пока изучаю вопрос">Пока изучаю вопрос</button>
          </div>
        </div>

        <div class="ppq-step" data-step="4" data-key="Присутствие">
          <h3 class="ppq-q">Как удобнее держать связь?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Буду присутствовать лично">Буду присутствовать лично</button>
            <button type="button" class="ppq-opt" data-value="Дистанционно по доверенности">Дистанционно — я в другом городе</button>
            <button type="button" class="ppq-opt" data-value="Ещё не решил">Ещё не решил(а)</button>
          </div>
        </div>

        <div class="ppq-step ppq-step--final" data-step="5">
          <div class="ppq-result" id="ppqResult" hidden>
            <span class="ppq-result-label">Ориентировочная стоимость</span>
            <span class="ppq-result-price" id="ppqPrice">по запросу</span>
            <span class="ppq-result-note">Стоимость экспертизы зависит от количества дефектов и площади объекта — назовём её после того, как посмотрим ваш акт, и зафиксируем в договоре.</span>
          </div>
          <h3 class="ppq-q">Куда отправить ответ?</h3>
          <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
        </div>

        <button type="button" class="ppq-back" id="ppqBack" hidden>&larr; Назад</button>
      </div>
    </div>
  </div>
</section>

<!-- ===== СКОЛЬКО СТОИТ (бежевая, icon-list) ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Стоимость</span>
      <h2 class="sh">Сколько стоит</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Считаем по объёму, а не по прайсу.</b> Цена зависит от площади объекта и количества дефектов, которые нужно посчитать и обосновать. Назовём точную сумму после того, как посмотрим ваш акт осмотра.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="12" cy="12" r="9"/><path d="M12 8v8M8 12h8"/></svg><span><b>Первичная консультация — бесплатно.</b> Смотрим документы и честно говорим, есть ли перспектива. Если сумма устранения меньше расходов на спор, мы так и скажем.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/></svg><span><b>Расходы на экспертизу входят в иск.</b> При выигранном деле их, как и другие судебные издержки, взыскивают с застройщика — окончательное решение принимает суд.</span></li>
    </ul>
    <p class="micro" data-reveal>Уже пользовались нашей <a class="more" href="/priemka-kvartiry-ot-zastroyschika/">приёмкой</a>? Тогда часть работы сделана: акт с фотофиксацией у нас уже есть.</p>
  </div>
</section>

<!-- ===== ЧТО НЕ ВХОДИТ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что мы не обещаем</h2>
      <p class="sec-lead">Сразу честно, чтобы не было завышенных ожиданий.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не гарантируем исход дела: решение принимает суд, а не эксперт.</li>
        <li>Не называем сумму «на глаз» до осмотра — расчёт делается по факту, иначе он развалится в заседании.</li>
        <li>Не беремся за спор, если дефекты эксплуатационные, а не строительные, — скажем об этом прямо.</li>
        <li>Не заменяем адвоката: процессуальную часть ведёт юрист-партнёр, наша зона — техническая.</li>
        <li>Не вскрываем закрытые конструкции без вашего согласия и согласования порядка осмотра.</li>
      </ul>
      <p>Суд может назначить и собственную судебную экспертизу. Качественное досудебное заключение к этому готовит: расчёт сделан по тем же правилам, и защищать его эксперт выходит лично.</p>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Я подписал акт без замечаний. Уже поздно?</summary><p>Нет. Подпись без замечаний осложняет дело, но не закрывает его. Требования по скрытым недостаткам — тем, которые нельзя было обнаружить при обычном осмотре, — предъявляются в течение гарантийного срока. По 214-ФЗ это не менее трёх лет на сам объект и на инженерное оборудование и не менее года на отделочные работы.</p></details>
      <details data-reveal><summary>Обязательно ли писать претензию перед судом?</summary><p>Да, досудебный порядок нужно соблюсти — иначе иск рискует остаться без рассмотрения. Претензия ещё и фиксирует, какое именно требование вы выбрали, и от неё считается срок для добровольного исполнения.</p></details>
      <details data-reveal><summary>Правда, что теперь можно сразу требовать деньги?</summary><p>Да. До конца 2025 года действовал особый порядок передачи объекта, введённый постановлением Правительства №2380: он обязывал сначала дать застройщику время на устранение. С 1 января 2026 года этот порядок не применяется, и работает общее правило статьи 7 214-ФЗ — вы сами выбираете: устранение недостатков, соразмерное уменьшение цены договора или возмещение расходов на устранение.</p></details>
      <details data-reveal><summary>Чем ваша экспертиза лучше заключения «эксперта» без документов?</summary><p>Суд оценивает не только выводы, но и того, кто их сделал. Заключение готовит специалист с профильным образованием, действующей аттестацией и членством в СРО, с приложением подтверждающих документов. Без этого другая сторона легко ставит заключение под сомнение.</p></details>
      <details data-reveal><summary>Сколько занимает подготовка заключения?</summary><p>Зависит от объёма: осмотр — один выезд, дальше расчёт и оформление. Ориентировочный срок назовём вместе со стоимостью, когда оценим количество дефектов.</p></details>
      <details data-reveal><summary>А если застройщик исправит всё после претензии?</summary><p>Отличный исход — значит, экспертиза не понадобилась. Проверить качество устранения можно повторным выездом: убедимся, что дефект устранён по-настоящему, а не закрашен.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Покажите документы — скажем, есть ли перспектива</h2>
      <p class="sec-lead">Пришлите акт осмотра и переписку с застройщиком. Разберём ситуацию, оценим объём и назовём стоимость экспертизы. Консультация бесплатная.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Обсудить ситуацию</a>
      <a class="btn ghost" href="tel:+79062377902">+7 (906) 237-79-02</a>
    </div>
  </div>
</section>

<a class="sticky-cta" href="#lead-modal" data-lead-open>Обсудить ситуацию</a>
</main>
<?php get_footer(); ?>
