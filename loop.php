
<?php if (have_posts()) : ?>

  <?php while (have_posts()) : the_post(); ?>

    <article class="post hero-unit">
      <header>
      <h3 class="post-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
      </h3>
       <p class="post-info">
        <?php the_date(); ?> | <?php the_category(', ') ?>.
      </p>
      </header>
      <div class="post-content">
        <?php the_excerpt(); ?>
      </div>

     
    </article>
  <?php endwhile; ?>
<?php else : ?>
  <p class="nothing  hero-unit ">
    Il n'y a pas de Post à afficher !
  </p>
<?php endif; ?>
