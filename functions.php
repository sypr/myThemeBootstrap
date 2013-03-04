<?php
//walker pour navigation sans class et id superflue
require("ExtendFunctionPhp/ClassNavPrincWalker.php");


function my_styles() {

    wp_register_style( 'googlefont', "http://fonts.googleapis.com/css?family=Cabin:400,700,400italic,700italic" );
    wp_register_style( 'responsive', get_template_directory_uri() . '/asset/css/responsive.css' );
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/asset/css/bootstrap.css' );
    wp_register_style( 'my_style', get_template_directory_uri() . '/asset/css/styles.css' );
    
    wp_enqueue_style( 'googlefont' );
    wp_enqueue_style( 'bootstrap' );
    wp_enqueue_style( 'responsive' );
    wp_enqueue_style( 'my_style' );
    
}
add_action('wp_enqueue_scripts','my_styles');

register_nav_menus( array(
	'nav' => 'Menu de navigation'
	) );

//création side bar widgetiser
if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Sidebar right',
'before_widget' => '<section>',
'after_widget' => '</section>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

function home_page_menu_args( $args ) {
$args['show_home'] = true;
return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

?>

