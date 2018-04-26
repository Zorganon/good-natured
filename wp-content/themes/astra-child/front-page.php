<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="page-container">
	<div class="body-content-container">
<!-- Hero Image -->
		<div class="front-hero-wrapper" id="hero">
			<div class="front-hero__image" style="background: #00AAAF url('<?php echo real_upload_url(); ?>/front-hero.png') no-repeat center center;">
				<div class="front-hero__text-wrapper">
					<div class="front-hero__title">
						What is Nutritional Therapy?
					</div>
					<div class="front-hero__sub-title">
						<p>The practice of establishing healthy food and lifestyle habits</p>
					</div>
					<a class="front-hero__button button" href="/contact">BOOK A CONSULTATION</a>
				</div>
			</div>
			<image class="front-hero-mobile__image" style="background: url('<?php echo real_upload_url(); ?>/front-hero-mobile.png') no-repeat center center;"></image>
		</div>
<!-- end hero slider -->		
		<div class="divider-container">
			<div class="scroll-down-divider">
				<image src="<?php echo get_stylesheet_directory_uri(); ?>/scroll-down.png" class="centered-content"></image>
			</div>
		</div>
<!-- About Jan info Card -->
		<div class="green-dashed-divider"></div>
		<div class="frontpage-infocard__wrapper">
			<div class="frontpage-infocard-container flex-container">
				<div class="frontpage-infocard__image-box flex-item">
					<image class="frontpage-infocard__image" src="<?php echo real_upload_url(); ?>/about-info-image.png"></image>
				</div>
				<div class="frontpage-infocard__content-box flex-item flex-container">
					<div class="frontpage-infocard__title">I'm Janet Bailey</div>
					<div class="frontpage-infocard__subtitle">Devon-based Nutritional Therapist</div>
					<div class="frontpage-infocard__text">
						<p>I’m a firm believer in the old adage “you are what you eat”.  I have a degree in Anatomy and Physiology, have taught Human Biology and have a Diploma in Nutritional Therapy.</p>
					</div>
					<a type="button" class="frontpage-infocard__button button" href="/about">MORE ABOUT JANET</a>
				</div>
			</div>
		</div>
<!-- end of About infoCard -->
		<div class="green-dashed-divider"></div>
		
<!-- random infoCard section -->

		<div class="impact-container flex-container">
			<div class="impact-text__container columns small-12 medium-4">
				<div class="impact-text__wrapper">
					<div class="impact__header">Food can have a profound impact, improving sleep, energy levels, productivity, weight etc</div>
					<div class="impact__header-underscore"></div>
					<div class="impact__bullets">
						<ul>
							<li>Analyze dietary habits and address nutritional gaps</li>
							<li>Create menu plans full of delicious, whole foods tailored to individual health needs</li>
							<li>Identify the personal triggers that lead to making mindless food choices, such as emotions or social pressures</li>
						</ul>
					</div>
					<div class="impact__button">
						<a type="button" class="button" href="/about">LEARN MORE</a>
					</div>
				</div>	
			</div>
			<div class="impact__image-container columns small-12 medium-4">
				<div class="impact__image">
					<image src="<?php echo real_upload_url(); ?>/infocard1.png"></image>
				</div>
			</div>
		</div>
<!-- end of impact  section -->

<!-- news excerpt section -->
		<div class="news-excerpt__wrapper">
			<?php get_template_part( 'template-parts/news', 'excerpt' ); ?>
		</div>
		
		<div class="extra-space"></div>
		
		<div class="slider-bar-title news-slider-title">
			<a class="slider-title-button" href="/news">
			NEWS & VIEWS
			</a>
		</div>
		<div class="fp-news-slider slider-wrapper">
			<?php get_template_part( 'template-parts/news', 'slider' ); ?>
		</div>
		
		<div class="extra-space"></div>
		
		<div class="slider-bar-title recipe-slider-title">
			<a href="/recipes">RECIPES</a>
		</div>
		<div class="fp-recipe-slider slider-wrapper">
			<?php get_template_part( 'template-parts/recipe', 'slider' ); ?>
		</div>
		<div class="extra-space"></div>
	</div>
</div>
<?php get_footer(); ?>
