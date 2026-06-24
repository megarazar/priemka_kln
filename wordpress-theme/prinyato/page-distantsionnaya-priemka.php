<?php
/**
 * Шаблон страницы «Дистанционная приёмка квартиры» (/distantsionnaya-priemka/).
 * SEO-формат услуги №1 для иногородних. Подхватывается по слагу (WP page ID 16).
 * Дизайн-система prinyato (AURADESIGN). Те же ID секций, что у /tseny/ — рваные края без правок CSS.
 * Контент перенесён с главной (бывшая секция #distance) + поведенческий слой (statband/квиз/sticky-cta).
 * Цена по тарифной сетке: база приёмки от 8 000 ₽ + надбавка 3 000 ₽ = от 11 000 ₽. Meta — в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Дистанционная приёмка квартиры","item":"https://prinyatopro.ru/distantsionnaya-priemka/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Дистанционная приёмка квартиры",
  "serviceType":"Приёмка квартиры по доверенности",
  "description":"Приёмка квартиры от застройщика по доверенности для иногородних: эксперт осматривает квартиру, вы подключаетесь по видеосвязи, получаете официальный акт осмотра без личного приезда в Калининград.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"},
  "offers":{"@type":"Offer","priceCurrency":"RUB","price":"11000","description":"Дистанционная приёмка по доверенности"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="distantsionnaya" data-section="distantsionnaya">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Для иногородних</span>
      <h1 class="sh">Дистанционная приёмка квартиры «под ключ»</h1>
      <p class="sec-lead">Купили квартиру у моря, а сами живёте в другом регионе? Лететь в Калининград ради приёмки не нужно. Примем квартиру за вас по доверенности и проведём через весь процесс онлайн — вы видите всё по видеосвязи и получаете официальный акт.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <p class="micro" data-reveal>Приёмка по доверенности · Видеосвязь в реальном времени · Официальный акт осмотра · Без вашего приезда в Калининград</p>
    <div class="statband" data-reveal>
      <div class="stat"><b>+3 000 ₽</b><span>надбавка за дистант</span></div>
      <div class="stat"><b>0</b><span>ваших приездов</span></div>
      <div class="stat"><b data-count="24" data-suffix=" ч">24 ч</b><span>на полный акт</span></div>
      <div class="stat"><b data-count="50" data-suffix="%">50%</b><span>повторный выезд</span></div>
    </div>
  </div>
</section>

<!-- ===== ЗАЧЕМ ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Зачем это нужно</span>
      <h2 class="sh">Экономит минимум два приезда</h2>
    </div>
    <div class="prose" data-reveal>
      <p>Очная приёмка для иногородних — это два перелёта: один на осмотр, второй на повторный контроль после устранения дефектов. Плюс гостиница, отгулы и подстройка под дату застройщика, которую часто переносят.</p>
      <p>Дистанционный формат снимает эту логистику. Эксперт выезжает на объект сам, вы подключаетесь по видеосвязи и видите каждый дефект в реальном времени. Перелёт, гостиница и отгулы остаются при вас.</p>
    </div>
  </div>
</section>

<!-- ===== КАК ПРОХОДИТ (paper, dl-light список + фото) ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Как это работает</span>
      <h2 class="sh">Что входит в дистанционную приёмку</h2>
      <p class="sec-lead">Та же инструментальная проверка, что и на очной приёмке, — только присутствие ваше удалённое.</p>
    </div>
    <div class="dist-grid">
      <ul class="dist-list dl-light">
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M23 7l-7 5 7 5V7z"/><rect x="1" y="5" width="15" height="14" rx="2"/></svg><span><b>Приёмка по доверенности.</b> Эксперт осматривает квартиру, вы подключаетесь по видеосвязи и видите всё в реальном времени.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M15 10l4.5-2.5v9L15 14M3 6h12v12H3z"/></svg><span><b>Полный видеообзор.</b> Снимаем подробное видео каждого помещения и каждого дефекта и присылаем вам.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span><b>Документы дистанционно.</b> Официальный акт и претензию застройщику оформляем без вашего личного присутствия.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Контроль устранения.</b> После исправлений можем провести повторную проверку — тоже удалённо.</span></li>
        <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 10V7a2 2 0 0 0-2-2h-3M3 14v3a2 2 0 0 0 2 2h3M7 11l5-5 5 5M12 6v12"/></svg><span><b>Ключи и пакет документов.</b> Закрываем формальности на месте и пересылаем вам всё необходимое.</span></li>
      </ul>
      <div>
        <picture class="dist-pic" data-reveal>
          <img src="<?php echo $T; ?>/assets/img/dist-remote.jpg?v=<?php echo filemtime(get_template_directory() . '/assets/img/dist-remote.jpg'); ?>" alt="Дистанционная приёмка: эксперт показывает квартиру клиенту по видеосвязи" width="600" height="600" loading="lazy" decoding="async">
        </picture>
      </div>
    </div>
  </div>
</section>

<!-- ===== КВИЗ (расчёт стоимости) — тот же, что на главной ===== -->
<section class="sec quiz" id="quiz" data-section="quiz">
  <div class="wrap">
    <div class="sec-head" data-reveal style="text-align:center;margin-left:auto;margin-right:auto">
      <span class="eyebrow" style="justify-content:center">Калькулятор</span>
      <h2 class="sh">Рассчитайте стоимость</h2>
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

        <div class="ppq-step" data-step="3" data-key="Город">
          <h3 class="ppq-q">Откуда будете подключаться?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Москва / Санкт-Петербург">Москва / Санкт-Петербург</button>
            <button type="button" class="ppq-opt" data-value="Другой регион России">Другой регион России</button>
            <button type="button" class="ppq-opt" data-value="Из-за рубежа">Из-за рубежа</button>
            <button type="button" class="ppq-opt" data-value="Я в Калининграде, нужен дистант для близких">Я в Калининграде, дистант для близких</button>
          </div>
        </div>

        <div class="ppq-step" data-step="4" data-key="Сроки">
          <h3 class="ppq-q">Когда нужна приёмка?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Приглашение уже пришло">Приглашение на приёмку уже пришло</button>
            <button type="button" class="ppq-opt" data-value="В ближайший месяц">Ключи выдают в ближайший месяц</button>
            <button type="button" class="ppq-opt" data-value="Через 1–3 месяца">Через 1–3 месяца</button>
            <button type="button" class="ppq-opt" data-value="Пока изучаю вопрос">Пока изучаю вопрос</button>
          </div>
        </div>

        <div class="ppq-step ppq-step--final" data-step="5">
          <div class="ppq-result" id="ppqResult" hidden>
            <span class="ppq-result-label">Ориентировочная стоимость</span>
            <span class="ppq-result-price" id="ppqPrice">от 11 000 ₽</span>
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

<!-- ===== СКОЛЬКО СТОИТ (бежевая, icon-list) ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Стоимость</span>
      <h2 class="sh">Сколько стоит</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/></svg><span><b>Дистанционная приёмка — от 11 000 ₽.</b> Базовая стоимость приёмки по площади (от 8 000 ₽) плюс надбавка 3 000 ₽ за дистанционный формат.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg><span><b>Повторная проверка после устранения — 50%</b> от стоимости первичной приёмки, тоже удалённо.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span><b>Доверенность.</b> Подскажем, как оформить, чтобы мы могли принять квартиру и подписать документы за вас.</span></li>
    </ul>
    <p class="micro" data-reveal>Точную сумму <a class="more" href="/tseny/">калькулятор покажет за минуту</a>. Стоимость фиксируем в договоре, без доплат на месте.</p>
  </div>
</section>

<!-- ===== ЧЕСТНО О ГРАНИЦАХ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Что важно понимать про дистант</h2>
      <p class="sec-lead">Дистанционная приёмка — это та же техническая проверка, но с парой организационных нюансов.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Нужна доверенность на нашего эксперта — без неё застройщик не пустит представителя.</li>
        <li>Качество видеосвязи зависит от связи на объекте; полный разбор всегда дублируем видео и фото.</li>
        <li>Спор с застройщиком от вашего имени не ведём — при необходимости передадим запрос юристу-партнёру, а наш акт станет основой.</li>
      </ul>
      <p>В остальном объём проверки и официальный акт осмотра — такие же, как на очной <a href="/priemka-kvartiry-ot-zastroyschika/" style="color:#fff;text-decoration:underline">приёмке от застройщика</a>.</p>
    </div>
  </div>
</section>

<!-- ===== СВЯЗАННЫЕ УСЛУГИ ===== -->
<section class="sec" id="garant" data-section="garant">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Смежное</span>
      <h2 class="sh">Если вы в Калининграде</h2>
      <p class="sec-lead">Можно приехать на приёмку лично или выбрать другой формат.</p>
    </div>
    <div class="svc-grid" data-reveal>
      <div class="svc"><span class="num-tag">01</span><h3>Приёмка квартиры от застройщика</h3><p>Очный осмотр квартиры до или после подписания акта приёма-передачи.</p><a class="more" href="/priemka-kvartiry-ot-zastroyschika/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">02</span><h3>Приёмка квартиры в новостройке</h3><p>Голые стены или предчистовая отделка — проверяем перед подписанием.</p><a class="more" href="/priemka-kvartiry-v-novostroyke/">Подробнее →</a></div>
      <div class="svc"><span class="num-tag">03</span><h3>Приёмка домов и таунхаусов</h3><p>Кровля, фундамент, участок, инженерия — дом сложнее квартиры.</p><a class="more" href="/priemka-domov/">Подробнее →</a></div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section class="sec" id="faq" data-section="faq">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Вопросы</span>
      <h2 class="sh">Частые вопросы о дистанционной приёмке</h2>
    </div>
    <div class="faq-list">
      <details data-reveal><summary>Как вы попадёте в квартиру без меня?</summary><p>По доверенности. Вы оформляете доверенность на нашего эксперта — с ней застройщик допускает представителя на осмотр и приёмку. Подскажем, как всё оформить.</p></details>
      <details data-reveal><summary>Я правда увижу все дефекты?</summary><p>Да. Эксперт ведёт осмотр по видеосвязи в реальном времени, а потом присылает подробное видео и фото каждого дефекта с привязкой к помещению.</p></details>
      <details data-reveal><summary>Акт будет официальным?</summary><p>Да, это тот же официальный акт осмотра с подписью эксперта, что и на очной приёмке. Застройщик обязан устранить зафиксированные дефекты.</p></details>
      <details data-reveal><summary>Сколько это стоит?</summary><p>От 11 000 ₽: базовая приёмка по площади (от 8 000 ₽) плюс надбавка 3 000 ₽ за дистанционный формат. Повторная проверка после устранения — 50%.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Примем квартиру за вас</h2>
      <p class="sec-lead">Расскажите про объект и город, из которого подключаетесь, — посчитаем стоимость и согласуем дату с застройщиком.</p>
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
