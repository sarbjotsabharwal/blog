<?php
/**
 * Displays footer site info
 *
 * @package Alyssa Blog
 * @version 1.0.0
 */

?>

<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="copyright-text">

			<?php 
			  $copyright_text = alyssas_blog_get_option( 'alyssas_blog_copyright_text' ); 

			  $powerby_text   = alyssas_blog_get_option( 'alyssas_blog_powerby_text' );
						    
	        if ( ! empty( $copyright_text ) ) : ?>
	    
	           <?php echo wp_kses_data( $copyright_text ); ?>
	    
	        <?php endif; 

	        if ( ! empty( $powerby_text ) ) : ?>
						    
		           <?php echo wp_kses_post( $powerby_text ); ?>
		    
		    <?php endif; ?>

		</div>

	</div>
</div><!-- /Bottom Bar -->