<?php
/*
Template Name: Front
*/
get_header(); ?>

<div class="page-container">
	<div class="body-content-container">
<!-- Hero Slider -->
		<div class="front-hero-container">
			<image class="front-hero__image" src="wp-content/themes/FoundationPress/src/assets/images/heroimg.png"></image>
		</div>
		<div class="divider-container flex-container align-center">
			<div class="scroll-down-divider">
				<image src="wp-content/themes/FoundationPress/src/assets/images/scroll-down.png" class="centered-content"></image>
			</div>
		</div>
		
<!-- end hero slider -->		
		<div class="divider"></div>
<!-- About Jan info Card -->
		<div class="about-infocard-container row">
			<div class="about-infocard__image small-4 columns">
				<image src="wp-content/themes/FoundationPress/src/assets/images/about-info-image.png"></image>
			</div>
			<div class="about-infocard__content-box small-8 columns">
				<div class="about-infocard__title">I'm Janet Bailey</div>
				<div class="about-infocard__content"><p>I’m a firm believer in the old adage “you are what you eat”.  I have a degree in Anatomy and Physiology, have taught Human Biology and have a Diploma in Nutritional Therapy.</p></div>
				<a class="about-infocard__button button" href="/about">MORE ABOUT JANET</a>
			</div>
		</div>
<!-- end of About infoCard -->
		<div class="divider"></div>
		
<!-- random infoCard section -->

		<div class="impact-container row">
			<div class="impact__content-container columns small-12 medium-4">
				<div class="impact__header">Food can have a profound impact, improving sleep, energy levels, productivity, weight etc</div>
				<div class="impact__bullets">
					<ul>
						<li>Analyze dietary habits and address nutritional gaps</li>
						<li>Create menu plans full of delicious, whole foods tailored to individual health needs</li>
						<li>Identify the personal triggers that lead to making mindless food choices, such as emotions or social pressures</li>
					</ul>
				</div>
				<div class="impact__button">
					<a class="button" href="/about">LEARN MORE</a>
				</div>
			</div>
			<div class="impact__image-container columns small-12 medium-4">
				<div class="impact__image">
					<image src="wp-content/uploads/2017/10/infocard1.png"></image>
				</div>
			</div>
		</div>
<!-- end of first infoCard section -->

<!-- news excerpt section -->
		<div class="news-sample-container">
			<div class="news-sample__box-wrapper">
				<div class="news-sample__box">
					<?php get_template_part( 'news-excerpt' ); ?>
				</div>
			</div>
		</div>
<!-- end of news section -->

<!-- news slider section -->

		<div class="news-slider-container">
			<div class="news-slider__wrapper">
				<?php get_template_part( 'news-slider' ); ?>
			</div>
			<a class="news-slider__more-button button" href="/news">News and Views</a>
		</div>

<!-- recipe slider section -->
		
		<div class="recipe-slider-container">
			<div class="recipe-slider__wrapper">
				<?php get_template_part( 'recipe', 'slider' ); ?>
			</div>
			<a class="recipe-slider__more-button button" href="/recipes">View Recipes</a>
			
		</div>
		
	</div>
</div>
<?php get_footer();
