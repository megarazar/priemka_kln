<?php
/**
 * Секция «Реальные приёмки на видео» — длинные горизонтальные ролики (16:9).
 *
 * Единый источник для главной и страницы «Цены». Видео грузится только
 * по клику в модалку #video-modal (footer.php), при загрузке страницы
 * сторонних iframe нет.
 *
 * Не путать с template-parts/reels.php — там короткие вертикальные клипы 9:16.
 */

$pp_T = get_template_directory_uri();
?>
<section class="sec" id="video" data-section="video">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Доказательства</span>
      <h2 class="sh">Реальные приёмки на видео</h2>
      <p class="sec-lead">Не на словах, а на видео. Снимаем реальные приёмки: как тепловизор находит дефект, как он попадает в акт, как застройщик его устраняет. Первые ролики появятся здесь совсем скоро — вы увидите процесс ещё до того, как что-то закажете.</p>
    </div>
    <div class="video-grid">
      <div class="vcard" data-reveal>
        <button type="button" class="vthumb" data-video-open data-video-embed="https://vk.ru/video_ext.php?oid=-239384119&amp;id=456239039&amp;autoplay=1" aria-label="Смотреть видео: приёмка квартиры в новостройке">
          <img src="<?php echo $pp_T; ?>/assets/img/video-1.jpg?v=<?php echo filemtime( get_template_directory() . '/assets/img/video-1.jpg' ); ?>" alt="Акт технической приёмки: чек-лист, локальная смета и инженер на объекте" loading="lazy" decoding="async">
          <span class="play"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg></span>
        </button>
        <p>Приёмка квартиры в новостройке: как тепловизор находит дефект и как он попадает в акт.</p>
      </div>
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $pp_T; ?>/assets/img/video-2.jpg" alt="Инженер проверяет стену лазерным нивелиром в новостройке" loading="lazy" decoding="async"><span class="vsoon">Скоро</span></div>
        <p>Дистанционная приёмка для клиента из другого города — весь процесс онлайн.</p>
      </div>
      <div class="vcard" data-reveal>
        <div class="vthumb"><img src="<?php echo $pp_T; ?>/assets/img/video-3.jpg" alt="Эксперт заполняет дефектную ведомость на приёмке" loading="lazy" decoding="async"><span class="vsoon">Скоро</span></div>
        <p>Приёмка дома на побережье: что проверяем в ИЖС.</p>
      </div>
    </div>
    <p class="micro" data-reveal>Снимаем реальные приёмки и публикуем их здесь по мере выхода.</p>
  </div>
</section>
