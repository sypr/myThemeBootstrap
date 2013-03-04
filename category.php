<?php get_header(); ?>

<section class="main category row-fluid">

<section class="span12">
  <h1>Catégorie : <?php single_cat_title(); ?></h1>

  <?php get_template_part('loop'); ?>

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
