<?php

/* Theme Options Panel */
    $wp_customize->add_panel( 'alyssas_option_panel', array(
	'priority' => 30,
	'capability' => 'edit_theme_options',
	'title' => __( 'Alyssas Theme Options', 'alyssas-blog' ),
) );

/* Customizer Options */
require get_template_directory() . '/ripplethemes/theme-settings/sanitize-functions.php';
require get_template_directory() . '/ripplethemes/theme-settings/footer-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/breadcrumb-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/post-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/mainpost-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/sidebar-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/single-page-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/upgrade-options.php';
require get_template_directory() . '/ripplethemes/theme-settings/probutton.php';



