<?php

//=============================================================
// mainpost Style
//=============================================================
if ( ! function_exists( 'alyssas_blog_mainpost_hook_action' ) ) :
    
    function alyssas_blog_mainpost_hook_action() { 
        $hide_category = alyssas_blog_get_option( 'post_categories' );
        $hide_date = alyssas_blog_get_option( 'article_date_area' );
        $hide_post_by = alyssas_blog_get_option( 'post_by_admin' );
    
    $mainpost_cat_id     = alyssas_blog_get_option( 'alyssas-blog-mainpost-cat' );
    
    $category_name     = get_cat_name($mainpost_cat_id);
    
    $category_link     = get_category_link($mainpost_cat_id);
    
    $no_of_mainpost      = alyssas_blog_get_option('alyssas-blog-mainpost-number');
    
    $readmore          = alyssas_blog_get_option( 'alyssas_blog_readmore_text' );
    
    $excerpt_length    = alyssas_blog_get_option( 'mainpost_excerpt_length' );

   $args = array( 'cat' =>$mainpost_cat_id , 'posts_per_page' => $no_of_mainpost );

    $query = new WP_Query($args);

    if($query->have_posts()):?>

        <!-- main-post with sidebar start -->
        <aside class="main-post">
            <div class="container">
                <div class="row">
                    
                        <?php
                            while($query->have_posts()):
        
                                $query->the_post();
                            
                                if(has_post_thumbnail()){
        
                                    $image_id = get_post_thumbnail_id();
                                    $image_url = wp_get_attachment_image_src($image_id,'alyssas-blog-mainpost',true);
                                ?>
                                <div class="rpl-lg-6">
                                <div class="postItem">
                                    <figure>
                                        <img src="<?php echo esc_url($image_url[0]); ?>" alt="main-post" >
                                    </figure>
                                    <div class="content">
                                    <?php
                                        $the_cat = get_the_category();
                                            if(!empty($the_cat))
                                            {
                                                $category_name = $the_cat[0]->cat_name;
                                                $category_description = $the_cat[0]->category_description;
                                                $category_link = get_category_link( $the_cat[0]->cat_ID );
                                            }
                                            if( $hide_category != 1)
                                            {
                                            ?>

                                        <div class="readMore">
                                            <a class="common-button is-clear is-blue" href="<?php echo esc_url ($category_link); ?>"><?php
                                            echo esc_html($category_name);?></a>
                                        </div> 
                                    <?php } ?>
                                        
                                        <div class="post-header">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                            <div class="post-author">
                                            <?php if ( 'post' === get_post_type() ) :
                                                    if(!$hide_post_by){alyssas_blog_posted_by();}
                                                endif;
                                            ?>
                                            </div>
                                            <div class="post-meta">
                                                <?php if ( 'post' === get_post_type() ) :
                                                    if(!$hide_date){alyssas_blog_posted_on();}
                                                    if(!get_theme_mod('article_comment_link')) :?>
                                                    
                                                    <span class="comments-link">
                                                        <?php $cmt_link = get_comments_link(); 
                                                            $num_comments = get_comments_number();
                                                            if ( $num_comments == 0 ) {
                                                                $comment = __( 'No Comments', 'alyssas-blog' );
                                                            } elseif ( $num_comments > 1 ) {
                                                                $comment = $num_comments . __( ' Comments', 'alyssas-blog' );
                                                            } else {
                                                                $comment = __('1 Comment', 'alyssas-blog' );
                                                            }
                                                        ?>  
                                                        <a href="<?php echo esc_url( $cmt_link ); ?>"><?php echo esc_html( $comment );?></a>
                                                    </span>
                                                    <?php endif; ?>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="post-content">
                                            <p> <?php echo wp_trim_words(get_the_content(), $excerpt_length );?></p>
                                        </div>
                                        <div class="readMore">
                                            <a class="common-button is-border" href="<?php the_permalink(); ?>"><?php echo esc_html($readmore); ?></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            <?php } endwhile; 
                        ?>
                    
                </div>
            </div>
        </aside>

    <?php endif; wp_reset_postdata();
    }
endif;

add_action('alyssas_blog_mainpost_hook', 'alyssas_blog_mainpost_hook_action');