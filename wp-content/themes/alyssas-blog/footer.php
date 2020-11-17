<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alyssas Blog
 */

?>
	<footer class="site-footer">
		<?php get_template_part( 'ripplethemes/footer/footer-widget');  ?>
	</footer><!-- #colophon -->
	<?php get_template_part( 'ripplethemes/footer/site-info');  ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
