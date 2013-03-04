<aside class="span4 hero-unit" role="complementary">
  <!-- Bouton RSS -->
  <h2>sidebar</h2>
  <section role="complementary">
    <!-- Derniers articles -->
    <h4 class="section">5 Derniers articles</h4>
    <ul class="list">
      <?php wp_reset_postdata();
      query_posts('posts_per_page=5');
      while (have_posts()) : the_post(); ?>
      <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
  </ul>
</section>

<!-- Formulaire de recherche -->
<section role="search">
  <?php get_search_form(); ?>
</section>

<!-- Archives -->
<section>
  <ul class="list" role="menubar">
    <?php wp_get_archives('type=monthly'); ?>
  </ul>
</section>

<h2>widget</h2>
<?php 

if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar right') ) ; 

  ?>

</aside>