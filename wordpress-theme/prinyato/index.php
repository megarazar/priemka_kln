<?php get_header(); ?>
<main id="primary" class="wrap" style="padding:60px 0">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else : ?>
    <p>Контент готовится.</p>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
