<?php
/**
 * Alyssa's Blog Theme Customizer
 *
 * @package Alyssas Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

 
if ( ! function_exists( 'alyssas_blog_default_theme_options' ) ) :

	/**
	 * Get default theme options.
	 *
	 * @since 1.0.0
	 *
	 * @return array Default theme options.
	 */
	function alyssas_blog_default_theme_options() {

		$defaults                                 = array();
		///Mainpost Excerpt Length
		$defaults['mainpost_excerpt_length']        = 30;
		
		// Mainpost cat selection
		$defaults['alyssas-blog-mainpost-cat']         = 1;

		// Breadcrumb.
		$defaults['breadcrumb_type']              = 'normal';

		// sidebar option.
		$defaults['alyssas_blog_sidebar']          = 'right-sidebar';

		// you may like title.
		$defaults['you_may_like_title']             = esc_html__( 'Related Post', 'alyssas-blog' );

		// Read more text.
		$defaults['alyssas_blog_readmore_text']                = esc_html__( 'Read more', 'alyssas-blog' );
		
		// Copyright text.
		$defaults['alyssas_blog_copyright_text']               = esc_html__( 'Copyright &copy; All rights reserved.', 'alyssas-blog' );

		// Power by text.
		$defaults['alyssas_blog_powerby_text']                 = wp_kses_post( 'Proudly powered by <a href="https://wordpress.org/">WordPress</a> | Theme: Alyssas Blog by <a href="https://ripplethemes.com">Ripplethemes.</a>', 'alyssas-blog' );
	
		return $defaults;
	}

endif;



if ( ! function_exists( 'alyssas_blog_get_option' ) ) :

	/**
	 * Get theme option.
	 * @param string $key Option key.
	 * @return mixed Option value.
	 */
	function alyssas_blog_get_option( $key ) {

		if ( empty( $key ) ) {

			return;

		}

		$value            = '';

		$default          = alyssas_blog_default_theme_options();

		$default_value    = null;

		if ( is_array( $default ) && isset( $default[ $key ] ) ) {

			$default_value = $default[ $key ];

		}

		if ( null !== $default_value ) {

			$value = get_theme_mod( $key, $default_value );

		}else {

			$value = get_theme_mod( $key );

		}

		return $value;

	}

endif;

function alyssas_blog_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'alyssas_blog_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'alyssas_blog_customize_partial_blogdescription',
			)
		);
	}
	/**
	 * Theme options.
	 */
	$default = alyssas_blog_default_theme_options();
	
	require get_template_directory() . '/ripplethemes/theme-settings/theme-settings.php';

}
add_action( 'customize_register', 'alyssas_blog_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function alyssas_blog_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function alyssas_blog_customize_partial_blogdescription() {
	bloginfo( 'description' );
}



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function alyssas_blog_customize_preview_js() {
	wp_enqueue_script( 'alyssas_blog-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'alyssas_blog_customize_preview_js' );

/**
 * Load dynamic logic for the customizer controls area.
 */

function alyssas_blog_panels_js() {
	wp_enqueue_style( 'alyssas_blog-customizer-style', get_template_directory_uri() .'/assets/css/customizer-style.css');
	wp_enqueue_script( 'alyssas_blog-customize-controls', get_theme_file_uri( '/assets/js/customize-controls.js' ), array(), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'alyssas_blog_panels_js' );

/**
 * enqueue Script for admin dashboard.
 */

if (!function_exists('alyssas_blog_widgets_backend_enqueue')) :
    function alyssas_blog_widgets_backend_enqueue($hook)
    {
        

        wp_register_script('alyssas_blog-custom-widgets', get_template_directory_uri() . '/assets/js/widget.js', array('jquery'), true);
        
        wp_enqueue_media();
        wp_enqueue_script('alyssas_blog-custom-widgets');
    }

    add_action('admin_enqueue_scripts', 'alyssas_blog_widgets_backend_enqueue');
endif;
