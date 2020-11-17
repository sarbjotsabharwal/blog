<?php
	/*Sidebar Options*/
	
	$wp_customize->add_section( 'alyssas_blog_new_sidebar' , array(
		'title'          => 'Sidebar option',
		'description'    => '',
		'priority'       => 96,
		'capability'     => 'edit_theme_options',
		'panel'      => 'alyssas_option_panel',
	) );
	// sidebar option
    $wp_customize->add_setting( 'alyssas_blog_sidebar', array(
        'capability'        => 'edit_theme_options',
        'default'           => $default['alyssas_blog_sidebar'],
        'sanitize_callback' => 'alyssas_blog_sanitize_select'
    ) );

    
    $wp_customize->add_control( 'alyssas_blog_sidebar', array(
        'choices' => array(
                'right-sidebar' => __('Right Sidebar','alyssas-blog'),
                'left-sidebar'  => __('Left Sidebar','alyssas-blog'),
               
            ),
        'label'         => __( 'Select Sidebar Options', 'alyssas-blog' ),
        'section'       => 'alyssas_blog_new_sidebar',
        'settings'      => 'alyssas_blog_sidebar',
        'type'          => 'select',
        'priority'	    => 0
    ) );

