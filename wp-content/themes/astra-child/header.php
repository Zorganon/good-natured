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
<?php astra_html_before(); ?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="wp-content/themes/astra-child/style.css"/>

<?php astra_head_bottom(); ?>
<?php wp_head(); ?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>

<?php astra_body_top(); ?>
<div id="page" class="hfeed site">
	
	<?php astra_header_before(); ?>

	<?php astra_header_after(); ?>

	<?php astra_content_before(); ?>

	<div id="content" class="site-content">

		<div class="obsolete-ast-container">

		<?php astra_content_top(); ?>
		
	<header class="full-width site-header" role="banner">
		<div class="desktop-title-bar title-bar flex-container">
			<div class="desktop-title-bar__logo flex-item">
				<image src="wp-content/uploads/2017/10/gnnlogo.png"></image>
			</div>
			<div class="header-consultations flex-item">
				<a type='button' class="button" href="/about">CONSULTATIONS AVAILABLE</a>
			</div>
		</div>
	</header>
	<nav class="nav-container nav-bar" role="navigation">
			<div class="site-navigation__bar flex-container">
				<div class="site-navigation__button">
					<a type="button" class="button large" href="/home">HOME</a>
				</div>
				<div class="site-navigation__button flex-item">
					<a class="button large" href="/about">ABOUT</a>
				</div>
				<div class="site-navigation__button flex-item">
					<a type="button" class="button large" href="/recipes">RECIPES</a>
				</div>
				<div class="site-navigation__button flex-item">
					<a type="button" class="button large" href="/news">NEWS</a>
				</div>
				<div class="site-navigation__button flex-item">
					<a type="button" class="button large" href="/contact">CONTACT</a>
				</div>
			</div>
			
		</div>
	</nav>
		

