<?php
/**
 * ЛЕНДИНГ-ЗАЯВКА ПОД РЕКЛАМУ №2: технадзор ремонта / приёмка после ремонта
 * (/tehnadzor-zayavka/, noindex в Yoast). Тот же формат «два экрана», что и
 * page-priemka-kvartiry-zayavka.php: 1-й экран — H1 + чёрная форма lead-band,
 * на мобиле фото формы скрыто (.page-zayavka в styles.css); 2-й экран — суть.
 * Дизайн — только готовые блоки темы, без собственного CSS в шаблоне.
 */
get_header(); $T = get_template_directory_uri(); ?>
<main id="primary" class="page-zayavka">

<!-- ===== ЭКРАН 1: ЗАГОЛОВОК + ФОРМА ===== -->
<section class="sec lead" id="lead" data-section="lead">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">Контроль ремонта · Калининград</span>
        <h1 class="lead-title">Технадзор ремонта и приёмка после ремонта</h1>
        <p class="lead-sub">Инженер проверит работу бригады на ключевых этапах или примет готовый ремонт до расчёта со строителями — с приборами, фото и официальным актом. Оставьте телефон: перезвоним за 15 минут.</p>
        <?php echo do_shortcode('[contact-form-7 id="33" title="Заявка с главной (Битрикс)"]'); ?>
      </div>
      <div class="lead-right">
        <img src="<?php echo $T; ?>/assets/img/svc-posle-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/svc-posle-hero.jpg'); ?>" alt="Дефект отделки откоса, найденный на приёмке ремонта в Калининграде" loading="eager" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===== ЭКРАН 2: СУТЬ ПРЕДЛОЖЕНИЯ ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что вы получаете</span>
      <h2 class="sh">Ремонт под контролем инженера</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18M8 2v4M16 2v4"/></svg><span><b>Технадзор на всём ремонте.</b> Регулярные проверки бригады на ключевых этапах — от черновой до сдачи, акт после каждого выезда. Ошибку ловим, пока её дёшево исправить.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Разовый аудит.</b> Один выезд инженера: проверить состояние ремонта или принять отдельный этап перед расчётом с подрядчиком.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M9 15l2 2 4-4"/></svg><span><b>Финальная приёмка ремонта.</b> Проверим квартиру или дом перед окончательным расчётом со строителями: финишная отделка, доступная инженерия, фотофиксация, акт.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg><span><b>Аргумент в споре с подрядчиком.</b> Замечания фиксируем фото и официальным актом — разговор со строителями идёт не «на словах», а по документу.</span></li>
    </ul>
    <p class="micro" data-reveal>Цены: технадзор — от&nbsp;16&nbsp;000&nbsp;₽/мес («Мини», до 80 м²), разовый аудит — от&nbsp;10&nbsp;000&nbsp;₽, финальная приёмка — от&nbsp;15&nbsp;000&nbsp;₽. Стоимость фиксируем в договоре. Выезд по Калининграду и области (до 70 км).</p>
  </div>
</section>

<a class="sticky-cta" href="#lead">Оставить заявку</a>
</main>
<?php get_footer(); ?>
