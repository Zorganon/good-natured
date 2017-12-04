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
<link href="https://fonts.googleapis.com/css?family=Average|Montserrat" rel="stylesheet">
<link href="http://<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/Gloss_And_Bloom.ttf"/>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"/>

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
				<image src="<?php echo real_upload_url(); ?>/gnnlogo.png"></image>
			</div>
			<div class="header-consultations flex-item">
				<a class="header-consultations__button" href="/about">CONSULTATIONS AVAILABLE</a>
			</div>
		</div>
	</header>
	<nav class="nav-container nav-bar" role="navigation">
		<div class="site-navigation__bar flex-container">
			<a type="button" class="button large site-navigation__button" href="/home">HOME</a>
			<a type="button" class="button large site-navigation__button" href="/about">ABOUT</a>
			<a type="button" class="button large site-navigation__button" href="/recipes">RECIPES</a>
			<a type="button" class="button large site-navigation__button" href="/news">NEWS</a>
			<a type="button" class="button large site-navigation__button" href="/contact">CONTACT</a>
		</div>
	</nav>
		

