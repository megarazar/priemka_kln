<?php
/**
 * АРБИТРАЖНЫЙ ЛЕНДИНГ ПОД MAX (/max/, noindex в Yoast). Копия /telegram/ c кнопкой в MAX.
 * Некоммерческая страница: НИЧЕГО не продаём и не собираем лиды (нет формы CF7).
 * Цель = перегнать трафик из РСЯ (Яндекс.Директ) в наш канал в MAX.
 * Конверсия = клик по кнопке «Перейти в MAX».
 *
 * Формат «2 экрана», дизайн — только родные блоки темы (как лендинги-заявки),
 * без собственного CSS в шаблоне. Родные шапка/футер (get_header/get_footer).
 *
 * АНАЛИТИКА: на всех MAX-кнопках — крючки id="maxBtn"/data-goal="max"
 * и класс .js-max-goal, чтобы навесить событие Метрики / цель Директа
 * (реальные счётчики/скрипты вставит владелец — место помечено ниже).
 */
get_header(); $T = get_template_directory_uri();
$MAX = 'https://max.ru/join/Duk4km7aOf0ROiQxgbxDeFYlMkcAqnjt9jodUfxd5Q0'; // канал ПринятоПро в MAX (join-ссылка)
?>
<main id="primary" class="page-max">

<!-- ===== ЭКРАН 1: ЗАГОЛОВОК + БУЛЛИТЫ + КНОПКА TELEGRAM ===== -->
<section class="sec lead" id="lead" data-section="lead">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">Канал в MAX · ПринятоПро</span>
        <h1 class="lead-title">Как не облажаться при приёмке квартиры в Калининграде</h1>
        <p class="lead-sub">Разбираем дефекты, на которых застройщики выезжают, и показываем, что и как проверять — на реальных приёмках. Без воды и продаж: просто польза для тех, кто скоро принимает квартиру.</p>
        <ul class="tg-bullets">
          <li>7 дефектов, которые проворонят 90% на приёмке — и как их поймать</li>
          <li>Разборы реальных выездов: фото, приборы, что попало в акт</li>
          <li>Понятно про 214-ФЗ, гарантию и «филькины» акты</li>
        </ul>
        <a class="btn lg js-max-goal" id="maxBtn" data-goal="max" href="<?php echo esc_url( $MAX ); ?>" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 1000 1000" fill="currentColor" aria-hidden="true" width="20" height="20" style="vertical-align:-3px;margin-right:8px"><path fill-rule="evenodd" clip-rule="evenodd" d="M508.211 878.328c-75.007 0-109.864-10.95-170.453-54.75-38.325 49.275-159.686 87.783-164.979 21.9 0-49.456-10.95-91.248-23.36-136.873-14.782-56.21-31.572-118.807-31.572-209.508 0-216.626 177.754-379.597 388.357-379.597 210.785 0 375.947 171.001 375.947 381.604.707 207.346-166.595 376.118-373.94 377.224m3.103-571.585c-102.564-5.292-182.499 65.7-200.201 177.024-14.6 92.162 11.315 204.398 33.397 210.238 10.585 2.555 37.23-18.98 53.837-35.587a189.8 189.8 0 0 0 92.71 33.032c106.273 5.112 197.08-75.794 204.215-181.95 4.154-106.382-77.67-196.486-183.958-202.574Z"/></svg>Перейти в MAX
        </a>
        <p class="micro" data-reveal>Бесплатно · без спама · отписаться можно в любой момент</p>
      </div>
      <div class="lead-right">
        <img src="<?php echo $T; ?>/assets/img/tg-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/tg-hero.jpg'); ?>" alt="Эксперт ПринятоПро осматривает квартиру в новостройке Калининграда" loading="eager" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===== ЭКРАН 2: РИЛСЫ (общий блок с главной) + CTA в канал ===== -->
<?php get_template_part( 'template-parts/reels', null, array(
	'eyebrow'   => 'Живые съёмки',
	'title'     => 'Как это выглядит на объекте',
	'lead'      => 'Короткие видео с реальных приёмок: что находим, чем меряем и как дефект попадает в акт. Такие же разборы — в канале.',
	'cta_text'  => 'Хотите видеть такие разборы регулярно?',
	'cta_url'   => $MAX,
	'cta_label' => 'Перейти в MAX',
	'cta_attrs' => 'class="js-max-goal" data-goal="max"',
	'cta_icon'  => '<svg viewBox="0 0 1000 1000" fill="currentColor" aria-hidden="true" width="20" height="20" style="vertical-align:-3px;margin-right:8px"><path fill-rule="evenodd" clip-rule="evenodd" d="M508.211 878.328c-75.007 0-109.864-10.95-170.453-54.75-38.325 49.275-159.686 87.783-164.979 21.9 0-49.456-10.95-91.248-23.36-136.873-14.782-56.21-31.572-118.807-31.572-209.508 0-216.626 177.754-379.597 388.357-379.597 210.785 0 375.947 171.001 375.947 381.604.707 207.346-166.595 376.118-373.94 377.224m3.103-571.585c-102.564-5.292-182.499 65.7-200.201 177.024-14.6 92.162 11.315 204.398 33.397 210.238 10.585 2.555 37.23-18.98 53.837-35.587a189.8 189.8 0 0 0 92.71 33.032c106.273 5.112 197.08-75.794 204.215-181.95 4.154-106.382-77.67-196.486-183.958-202.574Z"/></svg>',
	'cta_micro' => 'Бесплатно · без спама · отписаться можно в любой момент',
) ); ?>

<!-- ===== ЭКРАН 3: ЧТО В КАНАЛЕ + О КОМПАНИИ ===== -->
<section class="sec" id="dop" data-section="dop">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Что внутри</span>
      <h2 class="sh">Что публикуем в канале</h2>
    </div>
    <ul class="dist-list dl-light">
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg><span><b>Разборы реальных приёмок.</b> Что нашли на выезде, как это выглядит и чем грозит: стяжка, окна, вентиляция, электрика — на фото и видео.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"/></svg><span><b>Чек-листы и памятки.</b> Что взять на приёмку, какие приборы что показывают, на что смотреть в договоре и акте приёма-передачи.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/></svg><span><b>Просто о законах.</b> 214-ФЗ, гарантийные сроки, как добиться устранения дефектов застройщиком — без юридического канцелярита.</span></li>
      <li data-reveal><svg class="ic" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg><span><b>Ответы на вопросы.</b> Пишете свою ситуацию — инженер подсказывает, на что обратить внимание именно в вашем случае.</span></li>
    </ul>
  </div>
</section>

<!-- ===== О КОМПАНИИ + ПОВТОР CTA (тёмная) ===== -->
<section class="sec distance" id="distance" data-section="distance">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Кто ведёт канал</span>
      <h2 class="sh">ПринятоПро — приёмка квартир в Калининграде</h2>
      <p class="sec-lead">Независимая компания: инженеры с регалиями НОПРИЗ принимают квартиры, дома и ведут технадзор ремонта по Калининграду и области. В канал попадает то, что мы видим на реальных выездах, — поэтому там конкретика, а не пересказ чужих статей.</p>
    </div>
    <div class="cta-row" data-reveal>
      <a class="btn lg js-max-goal" data-goal="max" href="<?php echo esc_url( $MAX ); ?>" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 1000 1000" fill="currentColor" aria-hidden="true" width="20" height="20" style="vertical-align:-3px;margin-right:8px"><path fill-rule="evenodd" clip-rule="evenodd" d="M508.211 878.328c-75.007 0-109.864-10.95-170.453-54.75-38.325 49.275-159.686 87.783-164.979 21.9 0-49.456-10.95-91.248-23.36-136.873-14.782-56.21-31.572-118.807-31.572-209.508 0-216.626 177.754-379.597 388.357-379.597 210.785 0 375.947 171.001 375.947 381.604.707 207.346-166.595 376.118-373.94 377.224m3.103-571.585c-102.564-5.292-182.499 65.7-200.201 177.024-14.6 92.162 11.315 204.398 33.397 210.238 10.585 2.555 37.23-18.98 53.837-35.587a189.8 189.8 0 0 0 92.71 33.032c106.273 5.112 197.08-75.794 204.215-181.95 4.154-106.382-77.67-196.486-183.958-202.574Z"/></svg>Перейти в MAX
      </a>
    </div>
  </div>
</section>

<a class="sticky-cta js-max-goal" data-goal="max" href="<?php echo esc_url( $MAX ); ?>" target="_blank" rel="noopener noreferrer">Перейти в MAX</a>
</main>

<!-- Цели Метрики: клик по кнопке канала (data-goal="telegram"/"max") → reachGoal.
     Слушаем в capture-фазе: событие уходит до перехода (ссылки target=_blank). -->
<script>
document.addEventListener('click', function (e) {
  var a = e.target.closest ? e.target.closest('[data-goal]') : null;
  if (a && typeof ym === 'function') ym(109746105, 'reachGoal', a.getAttribute('data-goal'));
}, true);
</script>
<!-- tgtrack: аналитика перехода лендинг → канал MAX (связка с Метрикой 109746105, тип «Яндекс») -->
<script src="https://max.tgtrack.ru/API/landing_script/v1/?linkID=10d76e45de140&type=ya&chat=join%2FDuk4km7aOf0ROiQxgbxDeFYlMkcAqnjt9jodUfxd5Q0&counterID=109746105" type="text/javascript" defer></script>
<?php get_footer(); ?>
