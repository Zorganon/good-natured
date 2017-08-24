<?php
/*
Template Name: Front
*/
get_header(); ?>
<wonka></wonka>


<?php do_action( 'foundationpress_before_content' ); ?>

<div class="body-content-container">
	
	<div class="front-hero-slider-container hero-container">
		<p>I'm on the front page!</p>
	</div>
	<div class="divider"></div>
	<!-- this is the recipe slider section -->
	<section class="recipe-slider">
		<div class="recipe-slider__title">
		</div>
		<div class="recipe-slider__slider">
			<!-- inserts class recipe-image-slider -->
			<!-- placeholder for recipe_slider_loop()  -->
			<div style='width: 80%; height: 540px; background-color: white;'></div>
		</div>
	</section>
	
	<div class="divider"></div>
	
	
	<!-- this is the Billboard facts section -->
	<section class="billboard-info-card-container">
		<div class="info-card">
			<div class="info-card__image">
				<image src=""></image>
			</div>
			<div class="info-card__info">
				<div class="info-card__info__headline"></div>
				<div class="info-card__info__bullets"></div>
				<div class="info-card__info__more-button"></div>
			</div>
		</div>
	</section>
	
	<divider></divider>
	
	<section class="news-blog-container">
		<div class="news-blog__title">
			
		</div>
		<div class="news-blog__slider">
			<!-- inserts class news-image-slider -->
			<!-- php news_slider_loop() -->
		</div>
	</section>
	
	
	<?php do_action( 'foundationpress_after_content' ); ?>
	
	<divider></divider>
</div>


<p>this is the end of the page template</p>
<?php get_footer();
