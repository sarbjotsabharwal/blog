<?php
/**
 * Load Core Files
 *
 * @since 1.0.0
*/
/**
 * Enqueue CSS and JS
 */
require get_template_directory() . '/ripplethemes/enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/ripplethemes/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/ripplethemes/template-tags.php';

/**
 * Template functions for theme.
 */
require get_template_directory() . '/ripplethemes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/ripplethemes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/ripplethemes/jetpack.php';
}

/**
 * Load mainpost file
 */
require get_template_directory() . '/ripplethemes/hooks/main-post.php';

/**
 * Load category dropdown functions
 */
require get_template_directory() . '/ripplethemes/customizer-category-control.php';


/**
 * Load breadcrumbs
 */
require get_template_directory() . '/ripplethemes/breadcrumbs/breadcrumbs.php';

/**
 * load custom widgets
 */
require get_template_directory() . '/ripplethemes/widgets/widget-inits.php';
require get_template_directory() . '/ripplethemes/widgets/sidebar-author-widget.php';
require get_template_directory() . '/ripplethemes/widgets/recent-widget.php';
require get_template_directory() . '/ripplethemes/widgets/social-widget.php';
require get_template_directory() . '/ripplethemes/widgets/profile-widget.php';

/**
 * Load Hooks
*/
require get_template_directory() . '/ripplethemes/hooks/breadcrumb.php';
require get_template_directory() . '/ripplethemes/hooks/masonry.php';
require get_template_directory() . '/ripplethemes/hooks/related-post.php';


