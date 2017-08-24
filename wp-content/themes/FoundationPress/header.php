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
			<div class="desktop-title-bar__logo">
				<image src="wp-content/themes/FoundationPress/src/assets/images/logo.png"></image>
			</div>
			<div class="desktop-title-bar__funfact" data-funfact="">
				<p>is this on the page?</p>
			</div>
		</div>
		<nav class="nav-container top-bar desktop-top-bar nav-bar" role="navigation">
				<div class="site-navigation__bar grid-container">
					<div class="columns medium-2">
						<a class="site-navigation__button button large column medium-2" href="#">HOME</a>
					</div>
					<div class="columns medium-2">
						<a class="site-navigation__button button large column medium-2" href="#">ABOUT</a>
					</div>
					<div class="columns medium-2">
						<a class="site-navigation__button button large column medium-2" href="#">RECIPES</a>
					</div>
					<div class="columns medium-2">
						<a class="site-navigation__button button large column medium-2" href="#">LEARN</a>
					</div>
					<div class="columns medium-2">
						<a class="site-navigation__button button large column medium-2" href="#">NEWS</a>
					</div>
					<div class="columns medium-2">
						<a class="site-navigation__button button large column medium-2" href="#">CONTACT</a>
					</div>
				</div>
				

				<?php if ( ! get_theme_mod( 'wpt_mobile_menu_layout' ) || get_theme_mod( 'wpt_mobile_menu_layout' ) === 'topbar' ) : ?>
					<?php get_template_part( 'template-parts/mobile-top-bar' ); ?>
				<?php endif; ?>
			</div>
		</nav>
		
	</header>

	<section>
		<?php do_action( 'foundationpress_after_header' );
