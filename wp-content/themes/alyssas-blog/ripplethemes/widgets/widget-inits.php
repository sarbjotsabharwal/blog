<?php

if ( ! function_exists( 'alyssas_blog_load_widgets' ) ) :

    /**
     * Load widgets.
     *
     * @since 1.0.0
     */
    function alyssas_blog_load_widgets() {

        // Recent Post Widget.
        register_widget( 'Alyssas_Blog_Recent_Post_Widget' );

        // Author Widget.
        register_widget( 'Alyssas_Blog_Author_Widget' );
		
		// Social Widget.
        register_widget( 'Alyssas_Blog_Social_Widget' );

        // profile Widget.
        register_widget( 'Alyssas_Blog_Profile_Widget' );
    }
endif;
add_action( 'widgets_init', 'alyssas_blog_load_widgets' );