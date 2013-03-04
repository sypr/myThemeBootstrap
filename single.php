<?php get_header(); ?>
<section class="main single row-fluid">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post hero-unit span12">
        <header>
        <h1 class="post-title">single <?php the_title(); ?></h1>
        <p class="post-info">
          Posté le <?php the_date(); ?> dans <?php the_category(', '); ?> par <?php the_author(); ?>.
        </p>
      </header>
        <div class="post-content" role="main">
          <?php the_content(); ?>
        </div>
       
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>