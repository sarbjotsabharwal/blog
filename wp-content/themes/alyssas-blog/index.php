<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alyssas Blog
 */

get_header();

?>
<!-- profile start -->
	<?php
		if(is_active_sidebar('profile-widget')) : ?>
			
		<aside class="profile-section">
			<div class="container">
				<?php
						dynamic_sidebar( 'profile-widget' );
				?>
			</div>
		</aside>
	<?php endif ?>
	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main class="site-main">
				<!-- main post -->
				<?php 
					do_action( 'alyssas_blog_mainpost_hook' );
				?>

				<!-- masonry post -->

				<?php 
					do_action( 'alyssas_blog_masonry_start_hook' );
				?>
				

				<!-- insta start -->
				<?php if(is_active_sidebar('insta-feeds')) : ?>
                <div class="container">
                    <div class="insta">
						<?php dynamic_sidebar('insta-feeds');?>
                    </div>
				</div>
				<?php endif ?>

		</main><!-- #main -->
	</div>
</div>
<?php
get_footer();
