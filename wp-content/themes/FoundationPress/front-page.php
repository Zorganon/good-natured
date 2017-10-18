<?php
/*
Template Name: Front
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="page-container">
	<div class="body-content-container">
<!-- Hero Slider -->
		<div class="front-hero-slider-container hero-container centered-content">
			<image src="wp-content/themes/FoundationPress/src/assets/images/heroimg.png"></image>
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
				<div class="about-infocard__button">MORE ABOUT JANET</div>
			</div>
		</div>
<!-- end of About infoCard -->
		<div class="divider"></div>
		
<!-- random infoCard section -->

		<div class="infocard-1-container row">
			<div class="infocard-1__content-container columns small-12 medium-4">
				<div class="infocard-1__header">Food can have a profound impact, improving sleep, energy levels, productivity, weight etc</div>
				<div class="infocard-1__bullets">
					<ul>
						<li>Analyze dietary habits and address nutritional gaps</li>
						<li>Create menu plans full of delicious, whole foods tailored to individual health needs</li>
						<li>Identify the personal triggers that lead to making mindless food choices, such as emotions or social pressures</li>
					</ul>
				</div>
				<div class="infocard-1__button button button-primary">
					<a  href="/about">LEARN MORE</a>
				</div>
			</div>
			<div class="infocard-1__image-container columns small-12 medium-4">
				<div class="infocard-1__image">
					<image src="wp-content/themes/FoundationPress/src/assets/images/infocard1.png"></image>
				</div>
			</div>
		</div>
<!-- end of first infoCard section -->

<!-- blog excerpt section -->
		<div class="blog-sample-container">
			<div class="blog-sample__box">
				<?php get_template_part( 'blog-excerpt-post' ); ?>
			</div>
		</div>
<!-- end of blog section -->
		<div class="recipe-slider__slider">
			<div><p>Test slide 1</p></div>
			<div><p>Test Slide 2</p></div>
			<div><p>Test Slide 3</p></div>
		</div>
<!-- Blog slider section -->

		<div class="blog-slider-container">
			<div class="blog-slider__wrapper">
				<?php get_template_part( 'blog-slider' ); ?>
			</div>
		</div>

<!-- recipe slider section -->
		
		<div class="recipe-slider-container">
			<div class="recipe-slider__wrapper">
				<?php get_template_part( 'recipe-slider' ); ?>
			</div>
			
		</div>
		
		
		<?php do_action( 'foundationpress_after_content' ); ?>
		
		<divider></divider>
	
		<!-- this is the recipe slider section -->
		<section class="recipe-slider">
			<div class="recipe-slider__topbar flex-container align-justify">
				<div class="recipe-slider__title section-title-text">
					RECIPES & NUTRITION
				</div>
				<div class="recipe-slider__more-text section-more-text">
					<a href="/recipes">SEE ALL</a>
				</div>
			</div>
				<!-- inserts class recipe-image-slider -->
			<?php get_template_part( 'recipe-slider' ); ?>
				<!-- placeholder for recipe_slider_loop()  -->
		</section>
		
	
	<p>this is the end of the page template</p>
	</div>
</div>
<?php get_footer();
