<?php
/**
 * Displays header site branding
 *
 * @package Alyssas Blog
 * @version 1.0.0
 */
?>

<div class="site-logo">
    <div class="site-branding">
        <?php
        the_custom_logo();
        if ( is_front_page() && is_home() ) :
            ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
        else :
            ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php
        endif;
        $alyssas_blog_description = get_bloginfo( 'description', 'display' );
        if ( $alyssas_blog_description || is_customize_preview() ) :
            ?>
            <p class="site-description"><?php echo $alyssas_blog_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
        <?php endif; ?>
    </div><!-- .site-branding -->
    
</div>