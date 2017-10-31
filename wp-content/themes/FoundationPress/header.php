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
		<link rel="stylesheet" type="text/css" href="wp-content/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="wp-content/slick/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo get_theme_uri() ?>/style.css"/>
		<?php wp_head(); ?>
	</head>
	<body>
	<?php do_action( 'foundationpress_after_body' ); ?>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php do_action( 'foundationpress_layout_start' ); ?>

	<header class="full-width site-header" role="banner">
		<div class="desktop-title-bar title-bar row">
			<div class="column small-12 medium-6">
				<div class="desktop-title-bar__logo">
					<image src="wp-content/uploads/2017/10/gnnlogo.png"></image>
				</div>
			</div>
			<div class="header-consultations hide-for-small-only medium-3 medium-offset-3">
				<a type='button' class="button large" href="/about">CONSULTATIONS AVAILABLE</a>
			</div>
		</div>
		<nav class="nav-container site-navigation top-bar desktop-top-bar nav-bar" role="navigation">
				<div class="site-navigation__bar row">
					<div class="column small-2">
						<a class="site-navigation__button button large" href="/home">HOME</a>
					</div>
					<div class="column small-2">
						<a class="site-navigation__button button large" href="/about">ABOUT</a>
					</div>
					<div class="column small-2">
						<a class="site-navigation__button button large" href="/recipes">RECIPES</a>
					</div>
					<div class="column small-2">
						<a class="site-navigation__button button large" href="/news">NEWS</a>
					</div>
					<div class="column small-2">
						<a class="site-navigation__button button large" href="/contact">CONTACT</a>
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
