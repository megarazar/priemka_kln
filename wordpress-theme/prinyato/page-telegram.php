<?php
/**
 * АРБИТРАЖНЫЙ ЛЕНДИНГ ПОД TELEGRAM (/telegram/, noindex в Yoast).
 * Некоммерческая страница: НИЧЕГО не продаём и не собираем лиды (нет формы CF7).
 * Цель = перегнать трафик из РСЯ (Яндекс.Директ) в наш ТГ-канал telegram.me/prinyatopro.
 * Конверсия = клик по кнопке «Перейти в Telegram».
 *
 * Формат «2 экрана», дизайн — только родные блоки темы (как лендинги-заявки),
 * без собственного CSS в шаблоне. Родные шапка/футер (get_header/get_footer).
 *
 * АНАЛИТИКА: на всех ТГ-кнопках — крючки id="tgBtn"/data-goal="telegram"
 * и класс .js-tg-goal, чтобы навесить событие Метрики / цель Директа
 * (реальные счётчики/скрипты вставит владелец — место помечено ниже).
 */
get_header(); $T = get_template_directory_uri();
$TG = 'https://telegram.me/prinyatopro';
?>
<main id="primary" class="page-telegram">

<!-- ===== ЭКРАН 1: ЗАГОЛОВОК + БУЛЛИТЫ + КНОПКА TELEGRAM ===== -->
<section class="sec lead" id="lead" data-section="lead">
  <div class="wrap">
    <div class="lead-band" data-reveal>
      <div class="lead-left">
        <span class="eyebrow">Телеграм-канал · ПринятоПро</span>
        <h1 class="lead-title">Как не облажаться при приёмке квартиры в Калининграде</h1>
        <p class="lead-sub">Разбираем дефекты, на которых застройщики выезжают, и показываем, что и как проверять — на реальных приёмках. Без воды и продаж: просто польза для тех, кто скоро принимает квартиру.</p>
        <ul class="tg-bullets">
          <li>7 дефектов, которые проворонят 90% на приёмке — и как их поймать</li>
          <li>Разборы реальных выездов: фото, приборы, что попало в акт</li>
          <li>Понятно про 214-ФЗ, гарантию и «филькины» акты</li>
        </ul>
        <a class="btn lg js-tg-goal header__button" id="tgBtn" data-goal="telegram" href="<?php echo esc_url( $TG ); ?>" target="_blank" rel="noopener noreferrer">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" width="20" height="20" style="vertical-align:-3px;margin-right:8px"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>Перейти в Telegram
        </a>
        <p class="micro" data-reveal>Бесплатно · без спама · отписаться можно в любой момент</p>
      </div>
      <div class="lead-right">
        <img src="<?php echo $T; ?>/assets/img/tg-hero.jpg?v=<?php echo filemtime(get_template_directory().'/assets/img/tg-hero.jpg'); ?>" alt="Эксперт ПринятоПро осматривает квартиру в новостройке Калининграда" loading="eager" decoding="async">
      </div>
    </div>
  </div>
</section>

<!-- ===== ЭКРАН 2: ЧТО В КАНАЛЕ + О КОМПАНИИ ===== -->
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
      <a class="btn lg js-tg-goal header__button" data-goal="telegram" href="<?php echo esc_url( $TG ); ?>" target="_blank" rel="noopener noreferrer">
        <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" width="20" height="20" style="vertical-align:-3px;margin-right:8px"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z"/></svg>Перейти в Telegram
      </a>
    </div>
  </div>
</section>

<a class="sticky-cta js-tg-goal header__button" data-goal="telegram" href="<?php echo esc_url( $TG ); ?>" target="_blank" rel="noopener noreferrer">Перейти в Telegram</a>
</main>

<!-- Цели Метрики: клик по кнопке канала (data-goal="telegram"/"max") → reachGoal.
     Слушаем в capture-фазе: событие уходит до перехода (ссылки target=_blank). -->
<script>
document.addEventListener('click', function (e) {
  var a = e.target.closest ? e.target.closest('[data-goal]') : null;
  if (a && typeof ym === 'function') ym(109746105, 'reachGoal', a.getAttribute('data-goal'));
}, true);
</script>
<!-- Метрика 110725246 — отдельный счётчик ТОЛЬКО для этого лендинга (арбитраж ТГ);
     общий счётчик темы 109746105 тоже работает — это осознанно, счётчики не конфликтуют. -->
<script type='text/javascript'>(function (m, e, t, r, i, k, a) { m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments); }; m[i].l = 1 * new Date(); for (let j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } } k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a); })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js', 'ym'); ym(110725246, 'init', { clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true });</script>
<!-- telegraphyx: аналитика лендинг → ТГ-канал (кнопки ловит по классу header__button) -->
<script src='https://app.telegraphyx.ru/landing-connector?tgChannelID=-1003961363539&yaCounterID=110725246&withoutRedirectToChannel=true' defer></script>
<?php get_footer(); ?>
