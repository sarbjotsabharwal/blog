<?php
/**
 * Masonry Start Class and Id functions
 *
 * @since Alyssa's_Blog 1.0.0
 *
 */
if (!function_exists('alyssas_blog_masonry_start')) :
    function alyssas_blog_masonry_start()
    { 
        $page_number = get_query_var('paged');
        if ($page_number == 0) {
            $output_page = 2;
        } else {
            $output_page = $page_number + 1;
        }?>
        <aside class="mansory-item">
            <div class="container">
                    
                <?php if ( have_posts() ) : ?>
                    <div class="row grid">
                    <?php
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();

                        /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                        get_template_part( 'template-parts/post/masonry-content', get_post_type() );

                    endwhile;

                    ?>
                    </div>

                    
                    <?php
                    echo "
                    <div class='buttons is-center'>
                        <div class='ajax-pagination ' role='button'><button class='show-more common-button is-bg is-pink is-icon' data-number='$output_page' role='button'><i class='fas fa-redo-alt'></i>" . __('View More', 'alyssas-blog') . "</div><div id='free-temp-post'></div></button>
                        </div>
                        ";

                    else :

                    get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
            </div>
        </aside>
        
        <?php
    }
endif;
add_action('alyssas_blog_masonry_start_hook', 'alyssas_blog_masonry_start', 10, 1);

