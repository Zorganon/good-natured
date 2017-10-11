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
		<div class="about-infocard-container">
			<div class="about-infocard__top-border"></div>
			<div class="about-infocard__image">
				<image></image>
			</div>
			<div class="about-infocard__title"></div>
			<div class="about-infocard__content"></div>
			<div class="about-infocard__button"></div>
			<div class="about-infocard__bottom-border"></div>
		</div>
<!-- end of About infoCard -->
		<div class="divider"></div>
		
<!-- random infoCard section -->

		<div class="infocard-1-container grid-container">
			<div class="infocard-1__content container">
				<div class="infocard-1__header"></div>
				<div class="infocard-1__bullets"></div>
				<div class="infocard-1__button"></div>
			</div>
			<div class="infocard-1__image-container">
				<div class="infocard-1__image-1"></div>
				<div class="infocard-1__image-2"></div>
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
