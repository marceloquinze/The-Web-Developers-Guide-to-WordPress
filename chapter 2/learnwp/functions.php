<?php

// Register Custom Navigation Walker 
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
* Enqueue scripts and styles.
*/
function learnwp_load_scripts(){
	//Bootstrap javascript and CSS files  
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery' ), '4.3.1', true );
    wp_enqueue_style( 'bootstrapcss', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '4.3.1', 'all' );

   	// Theme's main stylesheet
   	wp_enqueue_style( 'learnwp-style', get_stylesheet_uri(), array(),'1.0', 'all' );

	// Google Fonts
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700|Seaweed+Script' );

}
add_action( 'wp_enqueue_scripts', 'learnwp_load_scripts' );

function learnwp_config(){
   register_nav_menus(
      array(
         'learnwp_main_menu' 	=> 'Learn WP Main Menu',
         'learnwp_footer_menu' 	=> 'Learn WP Footer Menu',
      )
   );	

  $args = array(
    'height'  => 225,
    'width' => 1920
  );
  add_theme_support( 'custom-header', $args );
  add_theme_support( 'post-thumbnails' );  

  add_image_size( 'learnwp-blog', 960, 640, array( 'center', 'center' ) );

  add_theme_support( 'title-tag' );

  add_theme_support( 'custom-logo', array(
     'height'       => 85,
     'width'        => 160,
     'flex-height'  => true,
     'flex-width'   => true,
  ) );  

}
add_action( 'after_setup_theme', 'learnwp_config', 0 );
