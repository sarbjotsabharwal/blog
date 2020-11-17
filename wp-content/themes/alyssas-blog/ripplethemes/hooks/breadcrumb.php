<?php
//=============================================================
// Breadcrumb Options
//=============================================================
if ( ! function_exists( 'alyssas_blog_breadcrumb_action' ) ) :
    function alyssas_blog_breadcrumb_action() { 

    $breadcrumb_type = alyssas_blog_get_option( 'breadcrumb_type' );

    if($breadcrumb_type == 'normal'): ?>

            <!-- Breadcrumb Header -->
      
          <?php alyssas_blog_breadcrumb_trail(); ?>
         
        <!-- /Breadcrumb Header -->
	<?php
    endif; 
    }
endif;

add_action( 'alyssas_blog_breadcrumb_options', 'alyssas_blog_breadcrumb_action' );