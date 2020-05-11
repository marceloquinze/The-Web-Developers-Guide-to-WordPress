<?php

function learnwp_customizer( $wp_customize ){	

   $wp_customize->add_section(
      'sec_copyright', array(
         'title'       => 'Copyright Settings',
         'description' => 'Copyright Section',
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
	      'label'       => 'Copyright',
	      'description' => 'Please, add your copyright information here',
	      'section'     => 'sec_copyright',
	      'type'        => 'text',
	   )
	);


	$wp_customize->add_section(
	   'sec_slider', array(
	      'title'       => 'Slider Settings',
	      'description' => 'Slider Section'
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
	      'label'        => 'Set slider page 1',
	      'description'  => 'Set slider page 1',
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
	      'label'        => 'Button Text for Page 1',
	      'description'  => 'Button Text for Page 1',
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
	      'label'        => 'URL for Page 1',
	      'description'  => 'URL for Page 1',
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
	      'label'        => 'Set slider page 2',
	      'description'  => 'Set slider page 2',
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
	      'label'        => 'Button Text for Page 2',
	      'description'  => 'Button Text for Page 2',
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
	      'label'        => 'URL for Page 2',
	      'description'  => 'URL for Page 2',
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
	      'label'        => 'Set slider page 3',
	      'description'  => 'Set slider page 3',
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
	      'label'        => 'Button Text for Page 3',
	      'description'  => 'Button Text for Page 3',
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
	      'label'        => 'URL for Page 3',
	      'description'  => 'URL for Page 3',
	      'section'      => 'sec_slider',
	      'type'         => 'url'
	   )
	);

}
add_action( 'customize_register', 'learnwp_customizer' );