<?php
/**
 * The template for displaying all pages
 * @package Alyssas Blog
 * @version 1.0.0
 * Template Name: About Me
 */


 while ( have_posts() ) : the_post();
 
$alyssas_blog_user_ID     = $post->post_author;
$facebook    = get_the_author_meta( 'facebook' );
$twitter     = get_the_author_meta( 'twitter' );
$pinterest   = get_the_author_meta( 'pinterest' );
$linkedin    = get_the_author_meta( 'linkedin' );
$instagram   = get_the_author_meta( 'instagram' );
$stumbleupon = get_the_author_meta( 'stumbleupon' );
$designation = get_the_author_meta( 'designation' );
 endwhile;
get_header(); ?>

<!-- Breadcrumb Header -->
<div class="custom-breadcrumb">
	<div class="container">
		<h1 class="title"><?php the_title(); ?></h1>
		<?php do_action( 'alyssas_blog_breadcrumb_options' ); ?>
	</div>
</div>

<div id="content" class="site-content about-me">
    <div id="primary" class="content-area">
        <div class="container">
            <div class="row">
                <div class="rpl-lg-8">
                    <main id="main" class="site-main">
                        <!-- profile start -->
                        <aside class="profile-section">
                            <div class="profile">
                                <div class="profile-row">
                                    <figure>
                                        <a itemprop="url"  title="<?php echo ucfirst(get_the_author()); ?>">
                                            <img src="<?php echo esc_url( get_avatar_url( $alyssas_blog_user_ID,array( 'size'=>205 )) ); ?>" width="205" height="205" alt="alissa-blog" > 
                                        </a>
                                    </figure>
                                    <div class="profile-post">
                                        <div class="post-meta">
                                            <h3><?php echo ucfirst(get_the_author()); ?></h3>
                                            <span><?php echo esc_html($designation); ?></span>
                                            <p><?php echo nl2br(get_the_author_meta('description')); ?></p>
                                        </div>
                                        <div class="post-meta">
                                            <?php  while ( have_posts() ) : the_post(); ?>
                                                
                                                    <?php the_content(); ?>

                                            <?php  endwhile; // End of the loop.?>
                                        </div>
                                    </div>
                                </div>
                                <div class="pf-social">
                                    <ul class="">
                                        <?php
                                        if(!empty($facebook))
                                        {
                                        ?>
                                            <li><a href="<?php echo esc_url($facebook); ?>"><i class="fab fa-facebook"></i></a></li>
                                        <?php
                                            }
                                            if(!empty($twitter))
                                            {
                                        ?>
                                            <li><a href="<?php echo esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a></li>
                                        <?php 
                                            }
                                            if(!empty($instagram))
                                            {
                                        ?>
                                            <li><a href="<?php echo esc_url($instagram); ?>"><i class="fab fa-instagram"></i></a></li>
                                        <?php
                                            }
                                            if(!empty($linkedin))
                                            {
                                        ?>

                                            <li><a href="<?php echo esc_url($linkedin); ?>"><i class="fab fa-linkedin"></i></a></li>
                                        
                                        <?php
                                            }
                                            if(!empty($pinterest))
                                            {
                                        ?>
                                        
                                            <li><a href="<?php echo esc_url($pinterest); ?>"><i class="fab fa-pinterest"></i></a></li>
                                        <?php
                                        }
                                        if(!empty($stumbleupon))
                                            {
                                        ?> 
                                            <li><a href="<?php echo esc_url($stumbleupon); ?>"><i class="fab fa-youtube"></i></a></li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </main>
                </div>
            
<?php 
get_sidebar('right-sidebar');
get_footer();
