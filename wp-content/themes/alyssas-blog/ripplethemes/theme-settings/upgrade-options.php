<?php

// Upgrade Button

function alyssas_blog_customizer_register( $wp_customize ) {

 
    $wp_customize->add_section( 'alyssas_blog_upgarde_button', array(
        'priority' => 300,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Upgrade pro version', 'alyssas-blog' ),
    ) );

    $wp_customize->add_setting( 'url_field_id', array(
        'default' => '',
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'transport' => '',
        'sanitize_callback' => 'esc_url',
    ) );

    $wp_customize->add_control( 'button_id', array(
        'type' => 'button',
        'priority' => 10,
        'section' => 'alyssas_blog_upgarde_button',
        'label' => __( 'Upgarde Pro Version', 'alyssas-blog' ),
        'description' => '',
    ) );

}
add_action( 'customize_register', 'alysass_blog_customizer_register' );