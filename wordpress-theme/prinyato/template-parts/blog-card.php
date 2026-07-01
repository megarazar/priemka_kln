<?php
/**
 * Карточка записи в ленте блога и на страницах рубрик.
 * Вызывается внутри WordPress-цикла: get_template_part( 'template-parts/blog-card' ).
 * Дизайн-система темы prinyato: карточка-«клочок» (torn-clip задаётся в styles.css).
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$cat = prinyato_primary_category();
?>
<article <?php post_class( 'blog-card' ); ?>>
  <a class="blog-card__media" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
    <?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail( 'prinyato-cover', array( 'alt' => the_title_attribute( array( 'echo' => false ) ), 'loading' => 'lazy' ) ); ?>
    <?php else : ?>
      <span class="blog-card__ph" aria-hidden="true">ПринятоПро</span>
    <?php endif; ?>
  </a>
  <div class="blog-card__body">
    <?php if ( $cat ) : ?>
      <a class="eyebrow" href="<?php echo esc_url( get_category_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a>
    <?php endif; ?>
    <h3 class="blog-card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="blog-card__excerpt"><?php echo esc_html( get_the_excerpt() ); ?></p>
    <div class="blog-card__meta">
      <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
      <span aria-hidden="true">·</span>
      <span><?php echo (int) prinyato_reading_time(); ?> мин</span>
    </div>
    <a class="more" href="<?php the_permalink(); ?>">Читать →</a>
  </div>
</article>
