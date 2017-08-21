<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<?php wp_head(); ?>
	</head>
	<body>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="full-width site-header" role="banner">
		
		<div class="desktop-title-bar title-bar">
			<div class="desktop-title-bar__logo float-left">
				<image src="wp-content/themes/FoundationPress/src/assets/images/logo.png"></image>
			</div>
			<div class="desktop-title-bar__funfact float-right" data-funfact="">
				<p>is this on the page?</p>
			</div>
		</div>
		<div class="grid-container top-bar">
			<nav class="site-navigation desktop-top-bar nav-bar" role="navigation">
					<div class="site-navigation__bar">
						<a class="site-navigation__button button large" href="#">HOME</a>
						<a class="site-navigation__button button large" href="#">ABOUT</a>
						<a class="site-navigation__button button large" href="#">RECIPES</a>
						<a class="site-navigation__button button large" href="#">LEARN</a>
						<a class="site-navigation__button button large" href="#">NEWS</a>
						<a class="site-navigation__button button large" href="#">CONTACT</a>
					</div>
					
	
					<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
						<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
					<?php endif; ?>
				</div>
			</nav>
		</div>
		
	</header>

	<section>
		<?php do_action( 'foundationpress_after_header' );
