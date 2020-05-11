<?php

function learnwp_customizer( $wp_customize ){	

   $wp_customize->add_section(
      'sec_copyright', array(
         'title'       => __( 'Copyright Settings', 'learnwp' ),
         'description' => __( 'Copyright Section', 'learnwp' ),
         'priority'    => 160,
      )
   );

	$wp_customize->add_setting(
	   'set_copyright', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'sanitize_text_field'
	   )
	);

	$wp_customize->add_control(
	   'set_copyright', array(
	      'label'       => __( 'Copyright', 'learnwp' ),
	      'description' => __( 'Please, add your copyright information here', 'learnwp' ),
	      'section'     => 'sec_copyright',
	      'type'        => 'text',
	   )
	);


	$wp_customize->add_section(
	   'sec_slider', array(
	      'title'       => __( 'Slider Settings', 'learnwp' ),
	      'description' => __( 'Slider Section', 'learnwp' ),
	   )
	);

	$wp_customize->add_setting(
	   'set_slider_page1', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'absint'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_page1', array(
	      'label'        => __( 'Set slider page 1', 'learnwp' ),
	      'description'  => __( 'Set slider page 1', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'dropdown-pages'
	   )
	);

	$wp_customize->add_setting(
	   'set_slider_button_text1', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'sanitize_text_field'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_button_text1', array(
	      'label'        => __( 'Button Text for Page 1', 'learnwp' ),
	      'description'  => __( 'Button Text for Page 1', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'text'
	   )
	);

	$wp_customize->add_setting(
	   'set_slider_button_url1', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'esc_url_raw'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_button_url1', array(
	      'label'        => __( 'URL for Page 1', 'learnwp' ),
	      'description'  => __( 'URL for Page 1', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'url'
	   )
	);

	$wp_customize->add_setting(
	   'set_slider_page2', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'absint'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_page2', array(
	      'label'        => __( 'Set slider page 2', 'learnwp' ),
	      'description'  => __( 'Set slider page 2', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'dropdown-pages'
	   )
	);         

	$wp_customize->add_setting(
	   'set_slider_button_text2', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'sanitize_text_field'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_button_text2', array(
	      'label'        => __( 'Button Text for Page 2', 'learnwp' ),
	      'description'  => __( 'Button Text for Page 2', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'text'
	   )
	);

	$wp_customize->add_setting(
	   'set_slider_button_url2', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'esc_url_raw'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_button_url2', array(
	      'label'        => __( 'URL for Page 2', 'learnwp' ),
	      'description'  => __( 'URL for Page 2', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'url'
	   )
	);         

	$wp_customize->add_setting(
	   'set_slider_page3', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'absint'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_page3', array(
	      'label'        => __( 'Set slider page 3', 'learnwp' ),
	      'description'  => __( 'Set slider page 3', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'dropdown-pages'
	   )
	);         

	$wp_customize->add_setting(
	   'set_slider_button_text3', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'sanitize_text_field'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_button_text3', array(
	      'label'        => __( 'Button Text for Page 3', 'learnwp' ),
	      'description'  => __( 'Button Text for Page 3', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'text'
	   )
	);

	$wp_customize->add_setting(
	   'set_slider_button_url3', array(
	      'type'               => 'theme_mod',
	      'default'            => '',
	      'sanitize_callback'  => 'esc_url_raw'
	   )
	);

	$wp_customize->add_control(
	   'set_slider_button_url3', array(
	      'label'        => __( 'URL for Page 3', 'learnwp' ),
	      'description'  => __( 'URL for Page 3', 'learnwp' ),
	      'section'      => 'sec_slider',
	      'type'         => 'url'
	   )
	);

	/*------------------*/
	// Home Page Settings

	$wp_customize->add_section(
	   'sec_home_page', array(
	      'title'         => __( 'Home Page Products and Blog Settings', 'learnwp' ),
	      'description'   => __( 'Home Page Section', 'learnwp' ),
	   )
	);   

	if( class_exists( 'WooCommerce' )):

		$wp_customize->add_setting(
		   'set_popular_title', array(
		      'type'              => 'theme_mod',
		      'default'           => '',
		      'sanitize_callback' => 'sanitize_text_field'
		   )
		);

		$wp_customize->add_control(
		   'set_popular_title', array(
		      'label'         => __( 'Popular Products Title', 'learnwp' ),
		      'description'   => __( 'Popular Products Title', 'learnwp' ),
		      'section'       => 'sec_home_page',
		      'type'          => 'text'
		   )
		);

		$wp_customize->add_setting(
		   'set_popular_max_num', array(
		      'type'               => 'theme_mod',
		      'default'            => '',
		      'sanitize_callback'  => 'absint'
		   )
		);

		$wp_customize->add_control(
		   'set_popular_max_num', array(
		      'label'        => __( 'Popular Products Max Number', 'learnwp' ),
		      'description'  => __( 'Popular Products Max Number', 'learnwp' ),
		      'section'      => 'sec_home_page',
		      'type'         => 'number'
		   )
		);

		$wp_customize->add_setting(
		   'set_popular_max_col', array(
		      'type'               => 'theme_mod',
		      'default'            => '',
		      'sanitize_callback'  => 'absint'
		   )
		);

		$wp_customize->add_control(
		   'set_popular_max_col', array(
		      'label'        => __( 'Popular Products Max Columns', 'learnwp' ),
		      'description'  => __( 'Popular Products Max Columns', 'learnwp' ),
		      'section'      => 'sec_home_page',
		      'type'         => 'number'
		   )
		);

		$wp_customize->add_setting(
		   'set_new_arrivals_title', array(
		      'type'              => 'theme_mod',
		      'default'           => '',
		      'sanitize_callback' => 'sanitize_text_field'
		   )
		);

		$wp_customize->add_control(
		   'set_new_arrivals_title', array(
		      'label'         => __( 'New Arrivals Title', 'learnwp' ),
		      'description'   => __( 'New Arrivals Title', 'learnwp' ),
		      'section'       => 'sec_home_page',
		      'type'          => 'text'
		   )
		);

		$wp_customize->add_setting(
		   'set_new_arrivals_max_num', array(
		      'type'               => 'theme_mod',
		      'default'            => '',
		      'sanitize_callback'  => 'absint'
		   )
		);

		$wp_customize->add_control(
		   'set_new_arrivals_max_num', array(
		      'label'        => __( 'New Arrivals Max Number', 'learnwp' ),
		      'description'  => __( 'New Arrivals Max Number', 'learnwp' ),
		      'section'      => 'sec_home_page',
		      'type'         => 'number'
		   )
		);

		$wp_customize->add_setting(
		   'set_new_arrivals_max_col', array(
		      'type'               => 'theme_mod',
		      'default'            => '',
		      'sanitize_callback'  => 'absint'
		   )
		);

		$wp_customize->add_control(
		   'set_new_arrivals_max_col', array(
		      'label'        => __( 'New Arrivals Max Columns', 'learnwp' ),
		      'description'  => __( 'New Arrivals Max Columns', 'learnwp' ),
		      'section'      => 'sec_home_page',
		      'type'         => 'number'
		   )
		);

		$wp_customize->add_setting(
		   'set_deal_title', array(
		      'type'              => 'theme_mod',
		      'default'           => '',
		      'sanitize_callback' => 'sanitize_text_field'
		   )
		);

		$wp_customize->add_control(
		   'set_deal_title', array(
		      'label'         => __( 'Deal of the Week Title', 'learnwp' ),
		      'description'   => __( 'Deal of the Week Title', 'learnwp' ),
		      'section'       => 'sec_home_page',
		      'type'          => 'text'
		   )
		);

		$wp_customize->add_setting(
		   'set_deal_show', array(
		      'type'               => 'theme_mod',
		      'default'            => '',
		      'sanitize_callback'  => 'learnwp_sanitize_checkbox'
		   )
		);

		$wp_customize->add_control(
		   'set_deal_show', array(
		      'label'        => __( 'Show Deal of the Week?', 'learnwp' ),
		      'section'      => 'sec_home_page',
		      'type'         => 'checkbox'
		   )
		);

		$wp_customize->add_setting(
		   'set_deal', array(
		      'type'               => 'theme_mod',
		      'default'            => '',
		      'sanitize_callback'  => 'absint',
		      'validate_callback'  => 'validate_sale_price'
		   )
		);

		function validate_sale_price( $validity, $product ) {
		   $sale_validation = get_post_meta( $product, '_sale_price', true );
		   if ( empty( $sale_validation ) ):
		   	  /* translators: 1: product ID number */
		      $validity->add( 'sale_price_not_set', sprintf( __( 'Please Add Sale Price - Product ID: %1$s', 'learnwp' ), $product ) );
		   endif;
		   return $validity;
		}

		$wp_customize->add_control(
		   'set_deal', array(
		      'label'        => __( 'Deal of the Week Product ID', 'learnwp' ),
		      'description'  => __( 'Product ID to Display', 'learnwp' ),
		      'section'      => 'sec_home_page',
		      'type'         => 'number'
		   )
		);

	endif;
	
	$wp_customize->add_setting(
	   'set_blog_title', array(
	      'type'              => 'theme_mod',
	      'default'           => '',
	      'sanitize_callback' => 'sanitize_text_field'
	   )
	);

	$wp_customize->add_control(
	   'set_blog_title', array(
	      'label'         => __( 'Blog Section Title', 'learnwp' ),
	      'description'   => __( 'Blog Section Title', 'learnwp' ),
	      'section'       => 'sec_home_page',
	      'type'          => 'text'
	   )
	);      

}
add_action( 'customize_register', 'learnwp_customizer' );
function learnwp_sanitize_checkbox( $checked ){
   return ( ( isset ( $checked ) && true == $checked ) ? true : false );
}