<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
		<h1 class="title"><?php the_title(); ?></h1>
		<?php do_action( 'alyssas_blog_breadcrumb_options' ); ?>
	</div>
</div>
<div id="content" class="site-content">
        <div class="container">
            <div class="row">
                <div class="rpl-lg-8 <?php echo esc_html($sidebar_class); ?>">
					<main id="primary" class="site-main">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/page/content-page', get_post_type() );

							

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
				</div>

<?php
get_sidebar();
get_footer();
