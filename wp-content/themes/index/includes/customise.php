<?php

	function index_customise_theme($wp_customize){
		$wp_customize->add_setting('custom_logo_setting', 
			array(
				'default' =>		'',
				'type' => 			'theme_mod',
				'capabilities' =>	'edit_theme_options',
				'transport' => 		'refresh'
			) 
		);


		$wp_customize->add_section('custom_logo_section', 
			array(
				'title' => 'Custom Logo',
				'priority' => 30
			)
		);


		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'custom_logo',
		        array(
		            'label'      => __( 'Upload a logo', 'theme_name' ),
		            'section'    => 'custom_logo_section',
		            'settings'   => 'custom_logo_setting',
		            'context'    => 'your_setting_context' 
		        )
			)
		);


	}

	add_action('customize_register', 'index_customise_theme');

?>