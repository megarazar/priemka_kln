<?php
/**
 * Шаблон страницы «Финальная приёмка ремонта» (/finalnaya-priemka-remonta/).
 * Подхватывается автоматически по слагу. Продукт №4 Продуктовой матрицы 2.0.
 * Дизайн-система темы prinyato (AURADESIGN). Те же ID секций, что у /tseny/ —
 * рваные края/фоны работают без правок CSS. Текст — подготовка_страниц/06-finalnaya-priemka-ФИНАЛ.md.
 * Meta title/description задаются в Yoast.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-final">

<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"BreadcrumbList","itemListElement":[
  { "@type":"ListItem","position":1,"name":"Главная","item":"https://prinyatopro.ru/" },
  { "@type":"ListItem","position":2,"name":"Финальная приёмка ремонта","item":"https://prinyatopro.ru/finalnaya-priemka-remonta/" }
]}
</script>
<script type="application/ld+json">
{ "@context":"https://schema.org","@type":"Service","name":"Финальная приёмка ремонта",
  "serviceType":"Приёмка ремонта перед расчётом с подрядчиком",
  "description":"Техническая проверка квартиры или дома перед окончательным расчётом со строителями: финишная отделка, доступная инженерия, фотофиксация, акт.",
  "areaServed":[{"@type":"City","name":"Калининград"},{"@type":"AdministrativeArea","name":"Калининградская область"}],
  "provider":{"@id":"https://prinyatopro.ru/#business"} }
</script>

<!-- ===== HERO ===== -->
<section class="sec" id="final" data-section="final">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Услуга</span>
      <h1 class="sh">Финальная приёмка ремонта</h1>
      <p class="sec-lead">Проверяем ремонт перед тем, как вы окончательно рассчитаетесь со строителями. Находим, что осталось доделать или переделать, и фиксируем это в акте — чтобы потом не исправлять недочёты за свой счёт.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg" href="#lead-modal" data-lead-open>Рассчитать стоимость</a>
      <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
    </div>
    <div class="statband statband--ink" data-reveal>
      <div class="stat"><b data-count="15" data-suffix=" 000 ₽">15 000 ₽</b><span>от, по площади</span></div>
      <div class="stat"><b data-count="2">2</b><span>повтора по 50%</span></div>
      <div class="stat"><b>1–2 ч</b><span>длится осмотр</span></div>
      <div class="stat"><b data-count="15" data-suffix=" мин">15 мин</b><span>на полный акт</span></div>
    </div>
  </div>
</section>

<!-- ===== КОГДА НУЖНА ===== -->
<section class="sec" id="uslugi" data-section="uslugi">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Кому подходит</span>
      <h2 class="sh">Когда заказывают финальную приёмку</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Ремонт завершён или почти закончен, а подрядчик просит финальную оплату.</li>
        <li>Хотите принять работу осознанно, а не «на глаз».</li>
        <li>Нужен документ с замечаниями, по которому строители доделают недочёты.</li>
      </ul>
      <p>Это последняя точка, где замечания ещё можно предъявить до полного расчёта.</p>
    </div>
  </div>
</section>

<!-- ===== РИЛСЫ ВК (живые съёмки) ===== -->
<?php get_template_part( 'template-parts/reels' ); ?>

<!-- ===== ЧТО ВХОДИТ ===== -->
<section class="sec" id="vhodit" data-section="vhodit">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что вы получаете</span>
      <h2 class="sh">Что проверяем</h2>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Полный осмотр объекта и финишного состояния ремонта.</li>
        <li>Качество отделки: окрашенные стены, обои, напольные покрытия, плитку, примыкания и отверстия.</li>
        <li>Доступную инженерию и, при наличии, установленную мебель.</li>
        <li>Фотофиксацию каждого замечания.</li>
        <li>Акт финальной приёмки ремонта с перечнем недочётов и рекомендациями.</li>
      </ul>
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

        <div class="ppq-step" data-step="3" data-key="Сроки">
          <h3 class="ppq-q">Когда нужна финальная приёмка?</h3>
          <div class="ppq-opts ppq-opts--list">
            <button type="button" class="ppq-opt" data-value="Ремонт уже завершён">Ремонт уже завершён</button>
            <button type="button" class="ppq-opt" data-value="Заканчивается в ближайшую неделю">Заканчивается в ближайшую неделю</button>
            <button type="button" class="ppq-opt" data-value="Через 2–4 недели">Через 2–4 недели</button>
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
            <span class="ppq-result-price" id="ppqPrice">от 15 000 ₽</span>
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
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 3h7v7H3zM14 3h7v7h-7zM14 14h7v7h-7zM3 14h7v7H3z"/></svg><span><b>Цена — от 15 000 ₽, по площади объекта.</b> Калькулятор покажет сумму за минуту.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/><path d="M9 12l3 3 5-6"/></svg><span><b>До 2 повторных проверок — по 50% от тарифа.</b> После того как бригада устранит замечания.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v5"/></svg><span><b>На месячном технадзоре?</b> Финальная проверка может пройти как один из плановых выездов оплаченного месяца.</span></li>
    </ul>
  </div>
</section>

<!-- ===== ЧТО НЕ ВХОДИТ (тёмная) ===== -->
<section class="sec distance" id="granicy" data-section="granicy">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Честно о границах</span>
      <h2 class="sh">Чего финальная приёмка не делает</h2>
      <p class="sec-lead">Сразу честно про границы услуги.</p>
    </div>
    <div class="prose" data-reveal>
      <ul>
        <li>Не ведём спор с подрядчиком от вашего имени.</li>
        <li>Не гарантируем, что все замечания устранят, и не управляем переделками.</li>
        <li>Не проверяем скрытые этапы, к которым уже нет доступа без вскрытия.</li>
        <li>Не решаем за вас вопрос оплаты — даём техническое заключение, а решение остаётся за вами.</li>
      </ul>
      <p>Нужна претензия — передадим запрос юристу-партнёру, и акт станет для неё основой.</p>
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
      <details data-reveal><summary>Чем финальная приёмка отличается от разового аудита?</summary><p>Аудит обычно проверяет промежуточный этап или общее состояние. Финальная приёмка — это проверка готового ремонта перед последним платежом подрядчику.</p></details>
      <details data-reveal><summary>Что делать с найденными замечаниями?</summary><p>Они попадают в акт. С этим документом вы просите бригаду доделать работы до окончательного расчёта.</p></details>
      <details data-reveal><summary>Сколько стоит повторная проверка?</summary><p>После устранения замечаний — 50% от тарифа, до двух повторных выездов.</p></details>
      <details data-reveal><summary>Успею ли до расчёта с бригадой?</summary><p>Осмотр занимает 1–2 часа, а полный акт с фото вы получаете на месте — за 15 минут. Финальную приёмку лучше заказывать до того, как отдадите последнюю оплату.</p></details>
    </div>
  </div>
</section>

<!-- ===== ФИНАЛЬНЫЙ CTA (бежевая, стык с футером) ===== -->
<section class="sec" id="cta" data-section="cta">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Заявка</span>
      <h2 class="sh">Проверьте ремонт перед финальным расчётом</h2>
      <p class="sec-lead">Расскажите про объект — посчитаем стоимость и согласуем удобное время выезда.</p>
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
