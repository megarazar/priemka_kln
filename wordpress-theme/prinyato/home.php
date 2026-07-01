<?php
/**
 * Лента блога — страница записей /blog/ (Настройки → Чтение → «Страница записей»).
 * Дизайн-система темы prinyato. Meta — Yoast. Карточка — template-parts/blog-card.php.
 */
get_header(); $T = get_template_directory_uri();

$blog_page_id = (int) get_option( 'page_for_posts' );
$blog_title   = $blog_page_id ? get_the_title( $blog_page_id ) : 'Блог';
$blog_lead    = $blog_page_id ? get_post_field( 'post_excerpt', $blog_page_id ) : '';
if ( '' === $blog_lead ) {
    $blog_lead = 'Гайды по приёмке, разборы законов и оборудования, реальные кейсы — чтобы вы понимали, что происходит с вашей квартирой, до подписания акта.';
}
$blog_cats = get_categories( array( 'hide_empty' => true, 'orderby' => 'name' ) );

$ld_breadcrumb = array(
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Главная', 'item' => home_url( '/' ) ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => $blog_title, 'item' => home_url( '/blog/' ) ),
    ),
);
?>
<main id="primary">

<script type="application/ld+json"><?php echo wp_json_encode( $ld_breadcrumb, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES ); ?></script>

<!-- ===== ШАПКА ЛЕНТЫ ===== -->
<section class="sec blog-head" id="blog-head" data-section="blog-head">
  <div class="wrap">
    <div class="sec-head" data-reveal>
      <span class="eyebrow">База знаний</span>
      <h1 class="sh"><?php echo esc_html( $blog_title ); ?></h1>
      <p class="sec-lead"><?php echo esc_html( $blog_lead ); ?></p>
    </div>
    <?php if ( ! empty( $blog_cats ) ) : ?>
      <nav class="blog-filter" aria-label="Рубрики блога" data-reveal>
        <a class="chip is-active" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Все</a>
        <?php foreach ( $blog_cats as $c ) : ?>
          <a class="chip" href="<?php echo esc_url( get_category_link( $c ) ); ?>"><?php echo esc_html( $c->name ); ?></a>
        <?php endforeach; ?>
      </nav>
    <?php endif; ?>
  </div>
</section>

<!-- ===== ЛЕНТА СТАТЕЙ ===== -->
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
          'screen_reader_text' => 'Навигация по страницам блога',
      ) ); ?>
    <?php else : ?>
      <p class="blog-empty" data-reveal>Скоро здесь появятся статьи. А пока — <a href="/tseny/">посмотрите услуги и цены</a> или <a href="#lead-modal" data-lead-open>оставьте заявку</a>.</p>
    <?php endif; ?>
  </div>
</section>

<?php prinyato_blog_cta(); ?>

</main>
<?php get_footer(); ?>
