<?php
/*Footer Options*/
$wp_customize->add_section('alyssas_blog_footer_section', array(
    'priority' => 20,
    'capability' => 'edit_theme_options',
    'theme_supports' => '',
    'title' => __('Footer Settings', 'alyssas-blog'),
    'panel' => 'alyssas_option_panel',
));


// Setting copyright_text.
$wp_customize->add_setting( 'alyssas_blog_copyright_text',
array(
 'default'           => $default['alyssas_blog_copyright_text'],
 'capability'        => 'edit_theme_options',
 'sanitize_callback' => 'sanitize_text_field',
)
);

$wp_customize->add_control( 'alyssas_blog_copyright_text',
array(
 'label'    => esc_html__( 'Copyright Text', 'alyssas-blog' ),
 'section'  => 'alyssas_blog_footer_section',
 'type'     => 'text',
 'priority' => 100,
)
);

// Setting powerby_text.
$wp_customize->add_setting( 'alyssas_blog_powerby_text',
array(
 'default'           => $default['alyssas_blog_powerby_text'],
 'capability'        => 'edit_theme_options',
 'sanitize_callback' => 'wp_kses_post',
)
);

$wp_customize->add_control( 'alyssas_blog_powerby_text',
array(
 'label'    => esc_html__( 'Powerby Text', 'alyssas-blog' ),
 'section'  => 'alyssas_blog_footer_section',
 'type'     => 'text',
 'priority' => 100,
)
);





