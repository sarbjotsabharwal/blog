<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Alyssas Blog
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function alyssas_blog_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Add class if sidebar is used.
	if ( is_active_sidebar( 'right-sidebar' ) && ! is_page() ) {
		$classes[] = 'has-sidebar';
	}

	

  // Add body class for sidebar

	if ( is_singular() ||  is_page() || is_archive() ) {
		$sidebar_class =alyssas_blog_get_option( 'alyssas_blog_sidebar' );
		$classes[]     = $sidebar_class;
	}

	
	// Adds a class of no-sidebar when there is no sidebar present.
	// if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	// 	$classes[] = 'no-sidebar';
	// }

	return $classes;
}
add_filter( 'body_class', 'alyssas_blog_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function alyssas_blog_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'alyssas_blog_pingback_header' );
