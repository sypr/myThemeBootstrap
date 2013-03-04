<?php get_header(); ?>

<section class="main archive row-fluid">
<section class="span12">
  <?php query_posts('posts_per_page=20'); ?>
	<?php get_template_part('loop'); ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>