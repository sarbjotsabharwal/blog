<?php
/**
 * Enqueue scripts and styles.
 */
function alyssas_blog_scripts() {
	global $alyssas_blog_theme_options;

	/*body  */
    wp_enqueue_style('alyssas-body', '//fonts.googleapis.com/css?family=Maven+Pro:wght@400;500;600;700;800;900&display=swap', array(), null);
    /*heading  */
    wp_enqueue_style('alyssas-heading', '//fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap', array(), null);
	
	 /*Site title  google font  */
	 wp_enqueue_style('alyssas-author', '//fonts.googleapis.com/css?family=Cookie&display=swap', array(), null);
	
	/*Author  google font  */
	wp_enqueue_style('alyssas-author', '//fonts.googleapis.com/css?family=Rochester&display=swap', array(), null);
	
	wp_enqueue_style( 'all', get_template_directory_uri()  . '/assets/css/all.min.css', array() );
	wp_enqueue_style( 'alyssas-blog-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'alyssas-blog-style', 'rtl', 'replace' );

	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'all', get_template_directory_uri() . '/assets/js/all.min.js',array('jquery'), _S_VERSION, true );
	
    wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), '4.6.0' );
  
    wp_enqueue_script( 'alyssas-custom-pagination', get_template_directory_uri() . '/assets/js/custom-infinte-pagination.js', array('jquery'), '4.6.0' );
    
	wp_enqueue_script( 'alyssas-blog-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	
	wp_enqueue_script( 'alyssas-custom', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );
	global $wp_query;
    $paged = ( get_query_var( 'paged' ) > 1 ) ? get_query_var( 'paged' ) : 1;
    $max_num_pages = $wp_query->max_num_pages;

    wp_localize_script( 'alyssas-custom', 'alyssas_ajax', array(
        'ajaxurl' => admin_url( 'admin-ajax.php' ),
        'paged'     => $paged,
        'max_num_pages'      => $max_num_pages,
        'next_posts'      => next_posts( $max_num_pages, false ),
        'show_more'      => __( 'View More', 'alyssas-blog' ),
        'no_more_posts'        => __( 'No More', 'alyssas-blog' ),
    ));

	wp_enqueue_script( 'alyssas-blog-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alyssas_blog_scripts' );


