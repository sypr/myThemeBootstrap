<!DOCTYPE html>
<html>
  <head <?php language_attributes(); ?>>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

    <?php wp_head(); ?>
  </head>
  <body>
   
    <div class="wrap row-fluid">
    <section id="sidebar-left" class="span1 offset1"></section>
    <section class="main-content span12">
      <header class="hero-unit">
        <h1>header <a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
        
       <nav class="navbar">
       <div class="navbar-inner">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
            </a>
          <div class="nav-collapse in collapse">
              <?php wp_nav_menu( array(
               'theme_location'  => 'nav',
              // 'menu'            => , 
               'container'       => 'nav', 
               'container_class' => 'nav nav-list', 
               'container_id'    => 'nav-princ',
               'menu_class'      => 'menu', 
                      //   'menu_id'         => ,
               'echo'            => true,
               'fallback_cb'     => 'wp_page_menu_perso',
                      //   'before'          => ,
                      //   'after'           => ,
              // 'link_before'     => ,
             //  'link_after'      => ,
               'items_wrap'      => '<ul class="nav nav-stacked ">%3$s</ul>',
               'depth'           => 0,
               'walker'          =>  new Nav_Princ_Walker()
               ) ); ?>

            </div>
        </div>
       </nav>
        
      </header>