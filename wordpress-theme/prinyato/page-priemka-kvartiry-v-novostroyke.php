<?php
/**
 * Шаблон страницы «Приёмка квартиры в новостройке» (/priemka-kvartiry-v-novostroyke/).
 * Частный случай приёмки (черновая / предчистовая отделка). Подхватывается по слагу.
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у хаба — рваные края без правок CSS.
 * Уникальный контент (НЕ дублирует хаб /priemka-kvartiry-ot-zastroyschika/). Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-priemka-novostroyka">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Услуги","item":"https://prinyatopro.ru/uslugi/" },
  { "@type":"ListItem","position":3,"name":"Приёмка квартиры в новостройке","item":"https://prinyatopro.ru/priemka-kvartiry-v-novostroyke/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Приёмка квартиры в новостройке",
  "serviceType":"Приёмка квартиры в новостройке",
  "description":"Независимая приёмка квартиры в новостройке в Калининграде: инструментальная проверка черновой и предчистовой отделки, фиксация дефектов фото и официальным актом осмотра до подписания акта приёма-передачи.",
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
          <h1 class="sh">Приёмка квартиры в новостройке в Калининграде</h1>
          <p class="sec-lead">Голые стены или предчистовая отделка кажутся «чистым листом», но именно в новостройке проще всего пропустить кривую стяжку, продувающие окна и мёртвую вентиляцию. Проверяем квартиру с приборами до того, как вы подпишете акт приёма-передачи.</p>
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
        <img src="<?php echo $T; ?>/assets/img/priemka-nov-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-nov-hero.jpg'); ?>" alt="Эксперт ПринятоПро проверяет геометрию стены уровнем на приёмке квартиры в новостройке" width="900" height="1200" loading="eager" decoding="async">
        <figcaption class="svc-hero__cap">Уровнем — по каждой стене</figcaption>
      </figure>
    </div>
  </div>
</section>

<!-- ===== ЧТО ПРОВЕРЯЕМ ===== -->
<section class="sec" id="check" data-section="check">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Объём работ</span>
      <h2 class="sh">Что проверяем в квартире-новостройке</h2>
      <p class="sec-lead">Не осмотр на глаз, а инструментальная проверка узлов, которые потом дорого исправлять.</p>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 21h18M5 21V8l7-5 7 5v13"/><path d="M9 21v-6h6v6"/></svg><span><b>Стяжка и ровность пола.</b> Перепады по уровню, пустоты и трещины — от них зависит вся будущая укладка пола.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M4 4h16v16H4z"/><path d="M4 9h16M9 9v11"/></svg><span><b>Геометрия и штукатурка стен.</b> Вертикаль, отклонения от плоскости, бухтящая штукатурка, трещины.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="4" y="3" width="16" height="18" rx="1"/><path d="M4 12h16M12 3v18"/></svg><span><b>Окна и остекление.</b> Фурнитура, монтажные швы, продувание и промерзание, царапины и сколы стеклопакетов.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="5" y="2" width="14" height="20" rx="1"/><circle cx="15" cy="12" r="1"/></svg><span><b>Входная дверь.</b> Замки, петли, уплотнители, перекосы и комплектация по договору.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 3v6M12 21a6 6 0 0 0 6-6c0-2-2-5-6-9-4 4-6 7-6 9a6 6 0 0 0 6 6z"/></svg><span><b>Вентиляция.</b> Проверяем тягу в каждом канале — частая беда новостроек, когда вентиляция «не дышит».</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M13 2L4 14h7l-2 8 9-12h-7z"/></svg><span><b>Черновая электрика.</b> Щиток, автоматы, заземление, выводы и точки по проекту.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 2s7 7 7 12a7 7 0 0 1-14 0c0-5 7-12 7-12z"/></svg><span><b>Гидроизоляция и стояки.</b> Санузлы, разводка, отсутствие протечек на вводах.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h18v18H3z"/><path d="M3 9h6V3M21 15h-6v6"/></svg><span><b>Площадь и геометрия.</b> Сверяем фактические размеры с данными ДДУ и БТИ.</span></li>
    </ul>
    <p class="micro" data-reveal>Работаем поверенными приборами: правило и рейка, уровень, рулетка, анемометр; тепловизор — по запросу. Измерения вы видите сами — не «тут кривовато», а цифра и кадр.</p>
  </div>
</section>

<!-- ===== РЕАЛЬНЫЕ ПРИЁМКИ (фото с выездов) ===== -->
<section class="sec distance" id="shots" data-section="shots">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">С наших выездов</span>
      <h2 class="sh">Реальные приёмки в Калининграде</h2>
      <p class="sec-lead">Не стоковые картинки — кадры с реальных приёмок в новостройках. Вот что находим за ровными стенами и свежей краской.</p>
    </div>
    <div class="shots-grid" data-reveal>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-real-1.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-real-1.jpg'); ?>" alt="Трещина в стене рядом с газоанализатором, найденная на приёмке квартиры" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Трещина у газоанализатора</figcaption></figure>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-real-2.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-real-2.jpg'); ?>" alt="Незаделанный вывод труб отопления в полу — дефект на приёмке" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Щель вокруг труб в полу</figcaption></figure>
      <figure class="shot"><img src="<?php echo $T; ?>/assets/img/priemka-real-3.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/priemka-real-3.jpg'); ?>" alt="Скол и заваленный угол на черновой отделке квартиры" width="820" height="1093" loading="lazy" decoding="async"><figcaption>Заваленный угол, черновая</figcaption></figure>
    </div>
  </div>
</section>

<!-- ===== КВИЗ ===== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Калькулятор</span>
      <h2 class="sh">Рассчитайте стоимость приёмки в новостройке</h2>
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

<!-- ===== КАК ПРОХОДИТ + ЦЕНА ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Как проходит</span>
      <h2 class="sh">От заявки до акта</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg><span><b>Запись под дату приёмки.</b> Согласуем осмотр под дату, на которую вас пригласил застройщик.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Осмотр с приборами — 1–2 часа.</b> Каждый дефект уходит в фото и дефектную ведомость прямо на месте.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Официальный акт осмотра.</b> Полный акт с фото и привязкой к квартире готовим на месте — за 15 минут после осмотра.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg><span><b>Повторный выезд после устранения — 50%</b> от стоимости первичной приёмки.</span></li>
    </ul>
    <p class="micro" data-reveal>Цена — от 8 000 ₽, по площади и типу квартиры; точную сумму <a class="more" href="/tseny/">калькулятор покажет за минуту</a>. Стоимость фиксируем в договоре, без доплат на месте.</p>
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
        <li>Не вскрываем конструкции и не считаем полную смету будущего ремонта.</li>
        <li>Не обещаем, что застройщик устранит всё, и не гарантируем исход возможного спора.</li>
      </ul>
      <p>Нужна претензия или сопровождение спора — передадим запрос юристу-партнёру, и наш акт станет для неё основой. Возможность взыскать что-либо с застройщика зависит от вашей ситуации и закона, действующего на момент обращения.</p>
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
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-renovated.jpg" alt="Приёмка квартиры после ремонта" loading="lazy"><span class="num-tag">01</span><h3>Приёмка после ремонта</h3><p>Чистовая отделка от застройщика — скрытые дефекты под обоями и плиткой.</p><a class="more" href="/priemka-kvartiry-posle-remonta/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-house.jpg" alt="Приёмка домов и таунхаусов" loading="lazy"><span class="num-tag">02</span><h3>Приёмка домов и таунхаусов</h3><p>Кровля, фундамент, участок, инженерия — дом сложнее квартиры.</p><a class="more" href="/priemka-domov/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/quiz-whitebox.jpg" alt="Дистанционная приёмка квартиры" loading="lazy"><span class="num-tag">03</span><h3>Дистанционная приёмка</h3><p>Для иногородних: примем по доверенности и покажем всё по видеосвязи.</p><a class="more" href="/distantsionnaya-priemka/">Подробнее →</a></div>
      <div class="svc"><img class="svc-pic" src="<?php echo $T; ?>/assets/img/check-electro.jpg" alt="Технический надзор ремонта" loading="lazy"><span class="num-tag">04</span><h3>Технадзор ремонта</h3><p>Контроль ремонтной бригады на каждом этапе — от черновой до сдачи.</p><a class="more" href="/tehnadzor-remonta-kvartiry/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о приёмке новостройки</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Когда вызывать эксперта — до или после подписания акта?</summary><p>Лучше до подписания: пока акт приёма-передачи не подписан, у вас больше рычагов добиться устранения дефектов. Но и после передачи ключей недостатки можно зафиксировать актом и требовать их исправления в гарантийный срок.</p></details>
      <details data-reveal><summary>Что важно проверять в черновой и предчистовой отделке?</summary><p>В черновой — стяжку, штукатурку, геометрию, окна, вентиляцию и черновую разводку инженерии. В предчистовой добавляются ровность под чистовую отделку и качество уже выполненных работ. Часть огрехов уже скрыта стяжкой и штукатуркой, поэтому без приборов их не поймать.</p></details>
      <details data-reveal><summary>Окна продувают — как это доказать застройщику?</summary><p>Фиксируем продувание и промерзание приборами и фото, при необходимости — тепловизором по запросу. Это попадает в дефектную ведомость с привязкой к конкретному окну, и застройщику будет что устранять по нормам.</p></details>
      <details data-reveal><summary>Сколько стоит и сколько занимает приёмка?</summary><p>Цена — от 8 000 ₽ по площади и типу квартиры, калькулятор посчитает за минуту. Осмотр занимает 1–2 часа, а полный акт с фото вы получаете на месте — за 15 минут.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Запишитесь на приёмку квартиры в новостройке</h2>
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
