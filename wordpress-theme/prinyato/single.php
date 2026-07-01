<?php
/**
 * Шаблон одиночной записи блога (single post).
 * Дизайн-система темы prinyato (AURADESIGN). Meta (title/OG/canonical) — Yoast.
 * Schema: BreadcrumbList + BlogPosting выводим здесь (Yoast-схема отключена в functions.php).
 */
get_header(); $T = get_template_directory_uri();

while ( have_posts() ) : the_post();
    $cat        = prinyato_primary_category();
    $home       = home_url( '/' );
    $blog_url   = home_url( '/blog/' );
    $cover      = has_post_thumbnail() ? wp_get_attachment_image_url( get_post_thumbnail_id(), 'prinyato-cover' ) : '';
    $read_min   = prinyato_reading_time();

    // --- BreadcrumbList ---
    $crumbs = array(
        array( '@type' => 'ListItem', 'position' => 1, 'name' => 'Главная', 'item' => $home ),
        array( '@type' => 'ListItem', 'position' => 2, 'name' => 'Блог',    'item' => $blog_url ),
    );
    $pos = 3;
    if ( $cat ) {
        $crumbs[] = array( '@type' => 'ListItem', 'position' => $pos++, 'name' => $cat->name, 'item' => get_category_link( $cat ) );
    }
    $crumbs[] = array( '@type' => 'ListItem', 'position' => $pos, 'name' => get_the_title(), 'item' => get_permalink() );
    $ld_breadcrumb = array(
        '@context'        => 'https://schema.org',
        '@type'           => 'BreadcrumbList',
        'itemListElement' => $crumbs,
    );

    // --- BlogPosting ---
    $ld_article = array(
        '@context'         => 'https://schema.org',
        '@type'            => 'BlogPosting',
        'mainEntityOfPage' => array( '@type' => 'WebPage', '@id' => get_permalink() ),
        'headline'         => get_the_title(),
        'description'      => wp_strip_all_tags( get_the_excerpt() ),
        'datePublished'    => get_the_date( 'c' ),
        'dateModified'     => get_the_modified_date( 'c' ),
        'author'           => array( '@type' => 'Organization', 'name' => 'ПринятоПро', '@id' => 'https://prinyatopro.ru/#business' ),
        'publisher'        => array(
            '@type' => 'Organization',
            'name'  => 'ПринятоПро',
            '@id'   => 'https://prinyatopro.ru/#business',
            'logo'  => array( '@type' => 'ImageObject', 'url' => $T . '/assets/img/logo.png' ),
        ),
    );
    if ( $cover ) {
        $ld_article['image'] = array( $cover );
    }
    $json_flags = JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES;
?>
<main id="primary">

<script type="application/ld+json"><?php echo wp_json_encode( $ld_breadcrumb, $json_flags ); ?></script>
<script type="application/ld+json"><?php echo wp_json_encode( $ld_article, $json_flags ); ?></script>

<!-- ===== ШАПКА СТАТЬИ ===== -->
<article <?php post_class( 'post' ); ?>>
<section class="sec post-head" id="post-head" data-section="post-head">
  <div class="wrap">
    <nav class="crumbs" aria-label="Хлебные крошки">
      <a href="<?php echo esc_url( $home ); ?>">Главная</a>
      <span aria-hidden="true">/</span>
      <a href="<?php echo esc_url( $blog_url ); ?>">Блог</a>
      <?php if ( $cat ) : ?>
        <span aria-hidden="true">/</span>
        <a href="<?php echo esc_url( get_category_link( $cat ) ); ?>"><?php echo esc_html( $cat->name ); ?></a>
      <?php endif; ?>
    </nav>
    <div class="sec-head">
      <?php if ( $cat ) : ?><span class="eyebrow"><?php echo esc_html( $cat->name ); ?></span><?php endif; ?>
      <h1 class="sh"><?php the_title(); ?></h1>
      <div class="post-meta">
        <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
        <span aria-hidden="true">·</span>
        <span><?php echo (int) $read_min; ?> мин чтения</span>
      </div>
    </div>
    <?php if ( $cover ) : ?>
      <figure class="post-cover">
        <?php the_post_thumbnail( 'prinyato-cover', array( 'alt' => the_title_attribute( array( 'echo' => false ) ) ) ); ?>
      </figure>
    <?php endif; ?>
  </div>
</section>

<!-- ===== ТЕЛО СТАТЬИ ===== -->
<section class="sec post-body" id="post-body" data-section="post-body">
  <div class="wrap">
    <div class="prose">
      <?php the_content(); ?>
    </div>
    <?php if ( has_tag() ) : ?>
      <div class="post-tags"><?php the_tags( '', '', '' ); ?></div>
    <?php endif; ?>
  </div>
</section>
</article>

<?php
    // --- Похожие статьи: до 3 записей из той же рубрики ---
    if ( $cat ) :
        $related = new WP_Query( array(
            'category__in'        => array( $cat->term_id ),
            'post__not_in'        => array( get_the_ID() ),
            'posts_per_page'      => 3,
            'ignore_sticky_posts' => 1,
            'no_found_rows'       => true,
        ) );
        if ( $related->have_posts() ) : ?>
<section class="sec post-related" id="post-related" data-section="post-related">
  <div class="wrap">
    <div class="sec-head">
      <span class="eyebrow">Читайте также</span>
      <h2 class="sh">Ещё по теме</h2>
    </div>
    <div class="blog-grid">
      <?php while ( $related->have_posts() ) : $related->the_post(); ?>
        <?php get_template_part( 'template-parts/blog-card' ); ?>
      <?php endwhile; ?>
    </div>
  </div>
</section>
<?php   endif; wp_reset_postdata();
    endif;

    // --- Единый CTA информационной статьи ---
    prinyato_blog_cta();

endwhile;
?>
</main>
<?php get_footer(); ?>
