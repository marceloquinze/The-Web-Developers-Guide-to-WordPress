<?php

// Register Custom Navigation Walker 
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

require_once get_template_directory() . '/inc/customizer.php';

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

  // Flexslider Javascript and CSS files
  wp_enqueue_script( 'flexslider-min-js', get_template_directory_uri() . '/inc/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
  wp_enqueue_style( 'flexslider-css', get_template_directory_uri() . '/inc/flexslider/flexslider.css', array(), '', 'all' );
  wp_enqueue_script( 'flexslider-js', get_template_directory_uri() . '/inc/flexslider/flexslider.js', array( 'jquery' ), '', true );  

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
     wp_enqueue_script( 'comment-reply' );
  }    

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
  add_image_size( 'learnwp-slider', 1920, 800, array( 'center', 'center' ) );

  add_theme_support( 'title-tag' );

  add_theme_support( 'custom-logo', array(
     'height'       => 85,
     'width'        => 160,
     'flex-height'  => true,
     'flex-width'   => true,
  ) );  

}
add_action( 'after_setup_theme', 'learnwp_config', 0 );

add_action( 'widgets_init', 'learnwp_sidebars' );
function learnwp_sidebars(){
   register_sidebar( array(
      'name'          => 'Learn WP Main Sidebar',
      'id'            => 'learn-wp-sidebar-1',
      'description'   => 'Drag and drop your widgets here',
      'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ) );
   register_sidebar( array(
      'name'          => 'Footer Sidebar 1',
      'id'            => 'learn-wp-sidebar-footer1',
      'description'   => 'Drag and drop your widgets here',
      'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ) );
   register_sidebar( array(
      'name'          => 'Footer Sidebar 2',
      'id'            => 'learn-wp-sidebar-footer2',
      'description'   => 'Drag and drop your widgets here',
      'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ) );
   register_sidebar( array(
      'name'          => 'Footer Sidebar 3',
      'id'            => 'learn-wp-sidebar-footer3',
      'description'   => 'Drag and drop your widgets here',
      'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">', 
      'after_widget'  => '</div>',
      'before_title'  => '<h4 class="widget-title">',
      'after_title'   => '</h4>',
   ) );            
}
