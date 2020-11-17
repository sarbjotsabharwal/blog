<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alyssas Blog
 */

get_header();
	$sidebar_class =alyssas_blog_get_option( 'alyssas_blog_sidebar' );	
?>
	<!-- Breadcrumb Header -->
	<div class="custom-breadcrumb">
        <div class="container">
            <h1 class="title"><?php the_archive_title(); ?></h1>
            <?php do_action( 'alyssas_blog_breadcrumb_options' ); ?>
        </div>
    </div>
	<!-- /Breadcrumb Header -->
	
<div id="content" class="site-content archive">
        <div class="container">
            <div class="row">
				
			<div class="rpl-lg-8 <?php echo esc_html($sidebar_class); ?>">
				<main id="primary" class="site-main">

					<?php if ( have_posts() ) : ?>

						<!-- <header class="page-header">
							<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header> -->
						<!-- .page-header -->

						<?php
						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							* Include the Post-Type-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Type name) and that will be used instead.
							*/
							get_template_part( 'template-parts/post/content', get_post_type() );

						endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/post/content', 'none' );

					endif;
					?>

				</main><!-- #main -->
			</div>

<?php
get_sidebar();
get_footer();
