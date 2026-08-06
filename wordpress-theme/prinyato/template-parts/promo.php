<?php
/**
 * Блок акции. Единый вывод для всех страниц.
 *
 * Данные и рубильник — prinyato_promo() в functions.php (там же дата окончания:
 * после неё блок гаснет сам, здесь править ничего не нужно).
 *
 * Аргументы (через get_template_part($slug, null, $args)):
 *   'variant' — 'bar'  : узкая полоса (первый экран, под hero-CTA);
 *               'card' : плашка с заголовком и текстом (над квизом, в секциях).
 *   'cta'     — true: показать кнопку-якорь на квиз (только для 'card').
 *
 * Если акции нет — не выводится ничего.
 */

$pp_promo = function_exists( 'prinyato_promo' ) ? prinyato_promo() : false;
if ( ! $pp_promo ) {
	return;
}

$pp_variant = ( isset( $args['variant'] ) && 'card' === $args['variant'] ) ? 'card' : 'bar';
$pp_cta     = ! empty( $args['cta'] );
?>
<?php if ( 'bar' === $pp_variant ) : ?>
<div class="promo-bar" data-reveal>
	<span class="promo-bar__tag"><?php echo esc_html( $pp_promo['eyebrow'] ); ?></span>
	<span class="promo-bar__text"><b><?php echo esc_html( $pp_promo['short'] ); ?></b> — до <?php echo esc_html( $pp_promo['until_human'] ); ?></span>
</div>
<?php else : ?>
<div class="promo-card" data-reveal>
	<span class="promo-card__tag"><?php echo esc_html( $pp_promo['eyebrow'] ); ?> · до <?php echo esc_html( $pp_promo['until_human'] ); ?></span>
	<h3 class="promo-card__title"><?php echo esc_html( $pp_promo['title'] ); ?></h3>
	<p class="promo-card__text"><?php echo esc_html( $pp_promo['text'] ); ?></p>
	<?php if ( $pp_cta ) : ?>
	<div class="cta-row">
		<a class="btn lg" href="#quiz">Рассчитать стоимость</a>
	</div>
	<?php endif; ?>
</div>
<?php endif; ?>
