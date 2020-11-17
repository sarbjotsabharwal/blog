<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
<!-- /Breadcrumb Header -->
<div id="content" class="site-content details">
        <div class="container">
            <div class="row">
                <div class="rpl-lg-8 <?php echo esc_html($sidebar_class); ?>">
					<main id="primary" class="site-main">

						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/post/single-content', get_post_type() );

							the_post_navigation(
								array(
									'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'alyssas-blog' ) . '</span> <span class="nav-title">%title</span>',
									'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'alyssas-blog' ) . '</span> <span class="nav-title">%title</span>',
								)
							);

							if(!get_theme_mod('post_author_info')) :
								get_template_part('templates/template-author');
							  endif;
							  
							  if(!get_theme_mod('article_related_post')) :
								do_action( 'alyssas_blog_related_post' );
							 endif; 

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
