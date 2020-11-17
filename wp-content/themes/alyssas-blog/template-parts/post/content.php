<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alyssas Blog
 */
$readmore  = alyssas_blog_get_option( 'alyssas_blog_readmore_text' );
$hide_category = alyssas_blog_get_option( 'post_categories' );
$hide_date = alyssas_blog_get_option( 'article_date_area' );
$hide_post_by = alyssas_blog_get_option( 'post_by_admin' );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
            <a class="common-button is-clear is-blue" href="<?php echo esc_url($category_link); ?>"><?php
            echo esc_html($category_name);?></a>
        </div> 
    <?php } ?>
    
	<header class="entry-header">
		<?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;
	    ?>
    </header>
    <!-- .entry-header -->

    <div class="entry-meta">
        <?php if ( 'post' === get_post_type() ) :
                if(!$hide_date){alyssas_blog_posted_on();}
                
                if(!$hide_post_by){alyssas_blog_posted_by();}
                if(!get_theme_mod('article_comment_link')) :?>
                
                <span class="comments-link">
                    <?php $cmt_link = get_comments_link(); 
                            $num_comments = get_comments_number();
                            if ( $num_comments == 0 ) {
                                $alyssas_blog_comment = __( 'No Comments', 'alyssas-blog' );
                            } elseif ( $num_comments > 1 ) {
                                $alyssas_blog_comment = $num_comments . __( ' Comments', 'alyssas-blog' );
                            } else {
                                $alyssas_blog_comment = __('1 Comment', 'alyssas-blog' );
                            }
                            
                    ?>  
                 <a href="<?php echo esc_url( $cmt_link ); ?>"><?php echo esc_html( $alyssas_blog_comment );?></a>
            </span>
            <?php endif; ?>
        <?php endif; ?>
            
    </div>
    <!-- .entry-meta -->
    <?php if ( has_post_thumbnail() ) : ?>
        <figure class="entry-thumb aligncenter">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </figure>
    <?php endif; ?>
    <!-- post thumbnail -->

	<div class="entry-content">
        <p> <?php echo wp_trim_words(get_the_content(), 40 );?></p>
    </div>
    <!-- .entry-content -->

    <?php
        if(!empty($readmore)) {
    ?>
        <div class="readMore"><a href="<?php the_permalink(); ?>" class="common-button is-border"><?php echo esc_html($readmore); ?></a></div>
    <?php  } ?>
</article><!-- #post-<?php the_ID(); ?> -->
