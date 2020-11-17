<?php
    // Main post Section.

$wp_customize->add_section( 'alyssas_blog_mainpost_section', array(
   'priority'       => 20,
   'capability'     => 'edit_theme_options',
   'theme_supports' => '',
   'title'          => __( 'Main post setting', 'alyssas-blog' ),
   'panel'       => 'alyssas_option_panel',
) );

       /* Mainpost cat selection */
    $wp_customize->add_setting( 'alyssas-blog-mainpost-cat',
     array(
                'capability'        => 'edit_theme_options',
                'default'           => $default['alyssas-blog-mainpost-cat'],
                'sanitize_callback' => 'absint',
          ) );

/*mainpost Category Selection*/
    $wp_customize->add_control(
        new Alyssas_Blog_Customize_Category_Dropdown_Control(
            $wp_customize,
            'alyssas-blog-mainpost-cat',
            array(
                    'label'     => __( 'Select Category', 'alyssas-blog' ),
                    'section'   => 'alyssas_blog_mainpost_section',
                    'settings'  => 'alyssas-blog-mainpost-cat',
                    'type'      => 'category_dropdown',
                    'priority'  => 0
                 )
        )
    );
   

/*Set number of mainpost */

 $wp_customize->add_setting( 'alyssas-blog-mainpost-number', array(
        'capability'        => 'edit_theme_options',
        'transport'         => 'refresh',
        'default'           => 2,
        'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'alyssas-blog-mainpost-number', array(
        'label'             => __( 'Number of mainpost ', 'alyssas-blog' ),
        'description'       => __('Select the number of mainpost', 'alyssas-blog'),
        'section'           => 'alyssas_blog_mainpost_section',
        'settings'          => 'alyssas-blog-mainpost-number',
        'type'              => 'number',
        'priority'          => 0,
        'input_attrs'       => array(
        'min'               => '2',
        'max'               => '4',
        'step'              => '1',
        ),
) );


// Excerpt Length.
$wp_customize->add_setting( 'mainpost_excerpt_length',
    array(
        'default'           => $default['mainpost_excerpt_length'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);

$wp_customize->add_control( 'mainpost_excerpt_length',
    array(
        'label'    => esc_html__( 'Enter Excerpt Length', 'alyssas-blog' ),
        'section'  => 'alyssas_blog_mainpost_section',
        'type'     => 'number',
        'priority' => 0,
    )
);