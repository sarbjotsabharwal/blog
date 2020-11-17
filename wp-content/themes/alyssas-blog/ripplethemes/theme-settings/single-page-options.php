<?php
// signle page option
$wp_customize->add_section( 'alyssas_blog_single_page', array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Single page setting', 'alyssas-blog' ),
    'panel'       => 'alyssas_option_panel',
    ) );


    

    $wp_customize->add_setting(
        'article_nav_post',
        array(
            'default'          => false,
			'sanitize_callback'=> 'alyssas_blog_sanitize_checkbox',
        )
    );

  
    

    $wp_customize->add_setting(
        'article_related_post',
        array(
            'default'          => false,
			'sanitize_callback'=> 'alyssas_blog_sanitize_checkbox',
        )
    );

    $wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'post_related',
			array(
				'label'      =>  esc_html__('Hide Related Posts Box','alyssas-blog'),
				'section'    => 'alyssas_blog_single_page',
				'settings'   => 'article_related_post',
				'type'		 => 'checkbox',
				'priority'	 => 9
			)
		)
    );
    
    // Setting related Text.
	$wp_customize->add_setting( 'you_may_like_title',
        array(
            'default'           => $default['you_may_like_title'],
            'capability'        => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control( 'you_may_like_title',
        array(
            'label'    => esc_html__( 'Related Posts Title', 'alyssas-blog' ),
            'section'  => 'alyssas_blog_single_page',
            'type'     => 'text',
            'priority' => 100,
        )
    );


	
    
   