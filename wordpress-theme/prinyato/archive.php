<?php
/**
 * Архивы блога: рубрики, метки, даты, автор.
 * Дизайн-система темы prinyato. Meta — Yoast. Карточка — template-parts/blog-card.php.
 */
get_header(); $T = get_template_directory_uri();

$is_term    = is_category() || is_tag() || is_tax();
$arch_title = $is_term ? single_term_title( '', false ) : wp_strip_all_tags( get_the_archive_title() );
$arch_desc  = $is_term ? wp_strip_all_tags( term_description() ) : '';
if ( '' === $arch_desc ) {
    $arch_desc = 'Статьи ПринятоПро по этой теме: гайды, разборы и практические советы по приёмке квартир и технадзору.';
}
$blog_url = home_url( '/blog/' );

$crumbs = array(
    array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Главная', 'item' => home_url( '/' ) ),
    array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Блог',    'item' => $blog_url ),
    array( '@type' => 'ListItem', 'position' => 3, 'name' => $arch_title, 'item' => get_pagenum_link() ),
);
$ld_breadcrumb = array(
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => $crumbs,
);
?>
<main id="primary">

<script type="application/ld+json"><?php echo wp_json_encode( $ld_breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?></script>

<!-- ===== ШАПКА АРХИВА ===== -->
<section class="sec blog-head" id="blog-head" data-section="blog-head">
  <div class="wrap">
    <nav class="crumbs" aria-label="Хлебные крошки" data-reveal>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Главная</a>
      <span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( $blog_url ); ?>">Блог</a>
      <span aria-hidden="true">/</span>
      <span><?php echo esc_html( $arch_title ); ?></span>
    </nav>
    <div class="sec-head" data-reveal>
      <span class="eyebrow">Рубрика блога</span>
      <h1 class="sh"><?php echo esc_html( $arch_title ); ?></h1>
      <p class="sec-lead"><?php echo esc_html( $arch_desc ); ?></p>
    </div>
  </div>
</section>

<!-- ===== ЛЕНТА АРХИВА ===== -->
<section class="sec blog-list" id="blog-list" data-section="blog-list">
  <div class="wrap">
    <?php if ( have_posts() ) : ?>
      <div class="blog-grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/blog-card' ); ?>
        <?php endwhile; ?>
      </div>
      <?php the_posts_pagination( array(
          'mid_size'  => 1,
          'prev_text' => '← Назад',
          'next_text' => 'Вперёд →',
          'screen_reader_text' => 'Навигация по страницам',
      ) ); ?>
    <?php else : ?>
      <p class="blog-empty" data-reveal>В этой рубрике пока нет статей. Вернуться в <a href="<?php echo esc_url( $blog_url ); ?>">блог</a>.</p>
    <?php endif; ?>
  </div>
</section>

<?php prinyato_blog_cta(); ?>

</main>
<?php get_footer(); ?>
