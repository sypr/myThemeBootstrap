<?php get_header(); ?>
<section class="main page row-fluid">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post hero-unit span12">
        
        <h1 class="post-title">page <?php the_title(); ?></h1>
        <div class="post-content">
          <?php the_content(); ?>
        </div>
        
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>