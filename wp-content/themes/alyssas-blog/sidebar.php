<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alyssas Blog
 */
$sidebar_class =alyssas_blog_get_option( 'alyssas_blog_sidebar' );
if ( ! is_active_sidebar( 'right-sidebar' ) ) {
	return;
}
?>
			<div class="rpl-lg-4 <?php echo esc_html($sidebar_class); ?>">
				<aside id="secondary" class="widget-area sidebar">
					<?php dynamic_sidebar( 'right-sidebar' ); ?>
				</aside><!-- #secondary -->
			</div>
		</div>
	</div>
</div>
