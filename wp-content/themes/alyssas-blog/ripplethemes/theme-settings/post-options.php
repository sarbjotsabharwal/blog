<?php

// Post Settings
	
	$wp_customize->add_section( 'alyssas_blog_new_section_post' , array(
		'title'          => 'Post Settings',
		'description'    => '',
		'priority'       => 96,
		'capability'     => 'edit_theme_options',
		'panel'      => 'alyssas_option_panel',
	) );
	

	// post cat Settings
	$wp_customize->add_setting(
		'post_categories',
		array(
			'default'          => false,
			'sanitize_callback'=> 'alyssas_blog_sanitize_checkbox',
		)
	);
	
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'post_cat',
			array(
				'label'      =>  esc_html__('Hide Category','alyssas-blog'),
				'section'    => 'alyssas_blog_new_section_post',
				'settings'   => 'post_categories',
				'type'		 => 'checkbox',
				'priority'	 => 3
			)
		)
	);

	// tags Settings
	$wp_customize->add_setting(
        'post_by_admin',
        array(
            'default'          => false,
			'sanitize_callback'=> 'alyssas_blog_sanitize_checkbox',
        )
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'admin_tags',
			array(
				'label'      =>  esc_html__('Hide post by','alyssas-blog'),
				'section'    => 'alyssas_blog_new_section_post',
				'settings'   => 'post_by_admin',
				'type'		 => 'checkbox',
				'priority'	 => 5
			)
		)
	);

	$wp_customize->add_setting(
		'article_date_area',
		array(
			'default'          => false,
			'sanitize_callback'=> 'alyssas_blog_sanitize_checkbox',
		)
	);
   $wp_customize->add_control(
	   new WP_Customize_Control(
		   $wp_customize,
		   'post_date',
		   array(
			   'label'      =>  esc_html__('Hide Date','alyssas-blog'),
			   'section'    => 'alyssas_blog_new_section_post',
			   'settings'   => 'article_date_area',
			   'type'		 => 'checkbox',
			   'priority'	 => 2
		   )
	   )
   );

   $wp_customize->add_setting(
	'article_comment_link',
	array(
		'default'          => false,
		'sanitize_callback'=> 'alyssas_blog_sanitize_checkbox',
	)
);

   $wp_customize->add_control(
	   new WP_Customize_Control(
		   $wp_customize,
		   'post_comment_link',
		   array(
			   'label'      =>  esc_html__('Hide Comment Link','alyssas-blog'),
			   'section'    => 'alyssas_blog_new_section_post',
			   'settings'   => 'article_comment_link',
			   'type'		 => 'checkbox',
			   'priority'	 => 4
		   )
	   )
   );

   // Setting Read More Text.
$wp_customize->add_setting( 'alyssas_blog_readmore_text',
array(
    'default'           => $default['alyssas_blog_readmore_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
)
);

$wp_customize->add_control( 'alyssas_blog_readmore_text',
array(
    'label'    => esc_html__( 'Read more button text', 'alyssas-blog' ),
    'section'  => 'alyssas_blog_new_section_post',
    'type'     => 'text',
    'priority' => 40,
)
);