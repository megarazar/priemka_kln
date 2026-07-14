<?php
/**
 * ЛЕНДИНГ-ЗАЯВКА ПОД РЕКЛАМУ №1: приёмка квартир (/priemka-kvartiry-zayavka/, noindex в Yoast).
 * Формат «два экрана максимум»: 1-й экран — H1 + чёрная форма lead-band (как на главной),
 * на мобиле фото формы скрыто page-scoped правилом (.page-zayavka в styles.css),
 * чтобы заголовок и форма целиком помещались в первый экран. 2-й экран — суть предложения.
 * Дизайн — только готовые блоки темы, без собственного CSS в шаблоне.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-zayavka">

<!-- ===== ЭКРАН 1: ЗАГОЛОВОК + ФОРМА ===== -->
<section class="sec lead" id="lead" data-section="lead">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">Приёмка квартир · Калининград</span>
        <h1 class="lead-title">Приёмка квартиры у застройщика — с приборами и официальным актом</h1>
        <p class="lead-sub">Инженер найдёт дефекты до того, как вы подпишете акт, — устранять их будет застройщик за свой счёт. Оставьте телефон: перезвоним за 15 минут, назовём цену и согласуем выезд.</p>
        <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
      </div>
      <div class="lead-right">
        <img src="<?php echo $T; ?>/assets/img/apartment.jpg" alt="Новая квартира в новостройке Калининграда — готова к приёмке" loading="eager" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===== ЭКРАН 2: СУТЬ ПРЕДЛОЖЕНИЯ ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что вы получаете</span>
      <h2 class="sh">Осмотр с приборами и акт, который работает</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Осмотр с приборами — 1–2 часа.</b> Правило и рейка, уровень, рулетка, анемометр; тепловизор — по запросу. Кривая стяжка, продувающие окна и мёртвая вентиляция «на глаз» не видны.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Официальный акт с печатью — за 15 минут на месте.</b> Каждый дефект — фото с привязкой к вашей квартире: застройщик не отмахнётся «фото чужое».</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg><span><b>Успеем под дату приёмки.</b> Обычно выезжаем в день обращения или на следующий — под дату, на которую вас пригласил застройщик.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M3 12a9 9 0 1 0 9-9"/><path d="M3 4v5h5"/></svg><span><b>Проверим устранение.</b> Когда застройщик исправит замечания — приедем и убедимся, что всё сделано. Повторный выезд — 50% от первичной приёмки.</span></li>
    </ul>
    <p class="micro" data-reveal>Цена — от&nbsp;8&nbsp;000&nbsp;₽ по площади и типу квартиры. Считаем заранее и фиксируем в договоре — на выезде доплат не появится. Выезд по Калининграду и области (до 70 км).</p>
  </div>
</section>

<a class="sticky-cta" href="#lead">Оставить заявку</a>
</main>
<?php get_footer(); ?>
