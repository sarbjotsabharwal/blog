<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alyssas Blog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'alyssas-blog' ); ?></a>
	<?php $header_image = esc_url(get_header_image());
		$header_class = ($header_image == "") ? '' : 'header-image';
	?>
	<header id="masthead" class="site-header <?php echo esc_attr($header_class); ?>" style="background-image:url(<?php echo esc_url($header_image) ?>); background-size: cover; background-position: center; background-repeat: no-repeat;">
			<div class="menu-wrapper">

				<div class="container">
					<button role="button" class="toggle-button open-button">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</button><!-- .toggle button -->
					<nav id="site-navigation" class="main-navigation">
						
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
					
				</div>
				
			</div>
			<?php get_template_part( 'ripplethemes/header/site', 'branding' ); ?>
	</header><!-- #masthead -->
