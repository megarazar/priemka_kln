<?php
/**
 * Лента рилсов ВК («Как это выглядит на объекте»).
 *
 * Единый источник для всех страниц. Клипы играются через video_ext.php
 * (чистый плеер, без соц-UI ВК), видео грузится только по клику в модалку
 * #video-modal из footer.php. Обложки лежат локально в assets/img/reel-*.jpg —
 * подписанные ссылки ВК протухают, поэтому не линкуем их напрямую.
 *
 * Аргументы (через get_template_part($slug, null, $args)):
 *   'tag'   — 'section' (по умолчанию, отдельная секция) или 'div' (подблок).
 *   'title' — заголовок; по умолчанию «Как это выглядит на объекте».
 *   'lead'  — подводка под заголовком.
 *   'eyebrow' — надзаголовок в режиме секции (по умолчанию «Живые съёмки»).
 *   CTA под лентой (по умолчанию — заявка на приёмку; на арбитражных лендингах
 *   /telegram/ и /max/ заменяется на переход в канал):
 *   'cta_text'   — текст над кнопкой.
 *   'cta_label'  — надпись на кнопке.
 *   'cta_url'    — ссылка кнопки; если задана, кнопка ведёт на неё в новой вкладке
 *                  (без телефона и без data-lead-open).
 *   'cta_attrs'  — доп. атрибуты кнопки (строка), напр. крючки аналитики.
 *   'cta_icon'   — готовый <svg> перед надписью на кнопке.
 *   'cta_micro'  — мелкий текст под кнопкой (пустая строка — не выводить).
 *
 * Заголовок: h2 в режиме секции, h3 — в режиме подблока.
 */

$pp_tag   = ( isset( $args['tag'] ) && 'div' === $args['tag'] ) ? 'div' : 'section';
$pp_is_div = ( 'div' === $pp_tag );
$pp_title = isset( $args['title'] ) ? $args['title'] : 'Как это выглядит на объекте';
$pp_lead  = isset( $args['lead'] ) ? $args['lead'] : 'Короткие видео с реальных приёмок: что находим, чем меряем и как дефект попадает в акт. Снимаем сами, без постановки.';
$pp_eyebrow = isset( $args['eyebrow'] ) ? $args['eyebrow'] : 'Живые съёмки';
$pp_cta_text  = isset( $args['cta_text'] ) ? $args['cta_text'] : 'Хотите, чтобы так же тщательно проверили вашу квартиру?';
$pp_cta_url   = isset( $args['cta_url'] ) ? $args['cta_url'] : '';
$pp_cta_label = isset( $args['cta_label'] ) ? $args['cta_label'] : 'Оставить заявку';
$pp_cta_attrs = isset( $args['cta_attrs'] ) ? $args['cta_attrs'] : '';
$pp_cta_icon  = isset( $args['cta_icon'] ) ? $args['cta_icon'] : '';
$pp_cta_micro = isset( $args['cta_micro'] ) ? $args['cta_micro'] : '';
$pp_T     = get_template_directory_uri();

$pp_reels = array(
	array( 456239049, 'reel-1.jpg', 'ЖК «Суздальский», Калининград', 'Примыкание наличника входной двери со стороны МОП.' ),
	array( 456239045, 'reel-2.jpg', 'Зачем нужна приёмка', 'Зачем вообще принимать квартиру у застройщика — коротко о главном.' ),
	array( 456239044, 'reel-3.jpg', 'ЖК «Клевер»: ключ застрял', 'Ключ застрял в замке прямо на приёмке — и такое находим.' ),
	array( 456239037, 'reel-4.jpg', 'ЖК «Речной парк»', 'Приёмка квартиры в ЖК «Речной парк».' ),
	array( 456239031, 'reel-5.jpg', 'ЖК «Русская Европа»', 'Приёмка в ЖК «Русская Европа»: с чего начинаем осмотр.' ),
	array( 456239029, 'reel-6.jpg', 'Пионерский', 'Приёмка квартиры в Пионерском — выезжаем и на побережье.' ),
	array( 456239026, 'reel-7.jpg', 'ЖК «Ключи»', 'Приёмка квартиры от застройщика в ЖК «Ключи».' ),
	array( 456239047, 'reel-8.jpg', 'Знакомство с командой', 'Кто приезжает к вам на приёмку.' ),
	array( 456239042, 'reel-9.jpg', 'Центр Калининграда', 'Приёмка квартиры в центре Калининграда.' ),
	array( 456239035, 'reel-10.jpg', 'ЖК «Клевер», застройщик «СтройИнвест»', 'Честно о качестве: ЖК «Клевер» от «СтройИнвест».' ),
);
?>
<?php if ( $pp_is_div ) : ?>
<div class="reels" id="reels">
<?php else : ?>
<section class="sec reels" id="reels" data-section="reels">
  <div class="wrap">
<?php endif; ?>
  <div class="hs" data-hscroll>
    <div class="hs-pin">
<?php if ( $pp_is_div ) : ?>
      <h3 class="sh3" data-reveal><?php echo esc_html( $pp_title ); ?></h3>
<?php else : ?>
      <div class="sec-head" data-reveal>
        <span class="eyebrow"><?php echo esc_html( $pp_eyebrow ); ?></span>
        <h2 class="sh"><?php echo esc_html( $pp_title ); ?></h2>
      </div>
<?php endif; ?>
      <p class="sec-lead" data-reveal><?php echo esc_html( $pp_lead ); ?></p>
      <div class="reels-track" data-hscroll-track>
<?php foreach ( $pp_reels as $pp_r ) :
	list( $pp_vid, $pp_img, $pp_alt, $pp_cap ) = $pp_r;
	$pp_src = get_template_directory() . '/assets/img/' . $pp_img;
?>
        <article class="reel" data-reveal>
          <button type="button" class="reel-thumb" data-video-open data-video-embed="https://vk.ru/video_ext.php?oid=-239384119&amp;id=<?php echo $pp_vid; ?>&amp;autoplay=1" aria-label="Смотреть видео: <?php echo esc_attr( $pp_alt ); ?>">
            <img src="<?php echo $pp_T; ?>/assets/img/<?php echo $pp_img; ?>?v=<?php echo file_exists( $pp_src ) ? filemtime( $pp_src ) : '1'; ?>" alt="<?php echo esc_attr( $pp_alt ); ?> — приёмка квартиры, ПринятоПро" width="360" height="640" loading="lazy" decoding="async">
            <span class="play"><svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M8 5v14l11-7z"/></svg></span>
          </button>
          <p class="reel-cap"><?php echo esc_html( $pp_cap ); ?></p>
        </article>
<?php endforeach; ?>
      </div>
      <div class="reels-cta" data-reveal>
        <p class="reels-cta__text"><?php echo esc_html( $pp_cta_text ); ?></p>
        <div class="cta-row">
<?php if ( '' !== $pp_cta_url ) : /* арбитражный режим: одна кнопка — переход в канал */ ?>
          <a class="btn lg" href="<?php echo esc_url( $pp_cta_url ); ?>" target="_blank" rel="noopener noreferrer"<?php echo $pp_cta_attrs ? ' ' . $pp_cta_attrs : ''; ?>><?php echo $pp_cta_icon; ?><?php echo esc_html( $pp_cta_label ); ?></a>
<?php else : ?>
          <a class="btn lg" href="#lead-modal" data-lead-open><?php echo esc_html( $pp_cta_label ); ?></a>
          <a class="btn ghost" href="tel:+79062377902">Позвонить</a>
<?php endif; ?>
        </div>
<?php if ( '' !== $pp_cta_url ) : ?>
<?php   if ( '' !== $pp_cta_micro ) : ?>
        <p class="micro"><?php echo esc_html( $pp_cta_micro ); ?></p>
<?php   endif; ?>
<?php else : ?>
        <p class="micro">Ответим в рабочее время и подберём дату приёмки. Больше коротких видео — <a href="https://vk.com/prinyatopro" target="_blank" rel="noopener noreferrer">в нашем сообществе ВКонтакте</a>.</p>
<?php endif; ?>
      </div>
    </div>
  </div>
<?php if ( $pp_is_div ) : ?>
</div>
<?php else : ?>
  </div>
</section>
<?php endif; ?>
