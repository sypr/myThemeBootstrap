<?php
/*
Template Name: Statistiques
*/
?>
<?php get_header(); ?>
<section class="main stat row-fluid">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <article class="post span12 hero-unit">
        
<header class="head-article">
  <h1 class="post-title"><?php the_title(); ?></h1>
      </header>
          <p>Nombre de Posts : <strong><?php echo wp_count_posts()->publish; ?></strong></p>
          <p>Nombre de Pages : <strong><?php echo wp_count_posts('page')->publish; ?></strong></p>
          <p>Nombre de commentaires publiés : <strong><?php echo wp_count_comments()->approved; ?></strong></p>
        
      </article>
    <?php endwhile; ?>
  <?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>