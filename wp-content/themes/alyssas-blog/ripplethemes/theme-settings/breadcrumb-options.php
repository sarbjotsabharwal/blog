<?php 
/*Extra Options*/


// Breadcrumb Section.
	$wp_customize->add_section( 'section_breadcrumb',array(
        'title'      => esc_html__( 'Breadcrumb Options', 'alyssas-blog' ),
        'priority'   => 100,
        'capability' => 'edit_theme_options',
        'panel'      => 'alyssas_option_panel',
        )
    );

// Setting breadcrumb_type.
$wp_customize->add_setting( 'breadcrumb_type',
    array(
        'default'           => $default['breadcrumb_type'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'alyssas_blog_sanitize_select',
    )
);

$wp_customize->add_control( 'breadcrumb_type',
    array(
        'label'       => esc_html__( 'Breadcrumb Type', 'alyssas-blog' ),
        'section'     => 'section_breadcrumb',
        'type'        => 'radio',
        'priority'    => 100,
        'choices'     => array(
            'disable' => esc_html__( 'Disable', 'alyssas-blog' ),
            'normal'  => esc_html__( 'Normal', 'alyssas-blog' ),
        ),
    )
);