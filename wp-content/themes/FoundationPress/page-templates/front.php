<?php
/*
Template Name: Front
*/
get_header(); ?>



<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<div class="body-content-container">
	
	<div class="front-hero-slider">
		
	</div>
	<div class="divider"></div>
	<!-- this is the recipe slider section -->
	<section class="recipe-slider">
		<div class="recipe-slider__title">
		</div>
		<div class="recipe-slider__slider">
			<!-- inserts class recipe-image-slider -->
			<?php recipe_slider_loop() ?>
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
			<?php news_slider_loop() ?>
		</div>
	</section>
	
	<?php endwhile;?>
	<?php do_action( 'foundationpress_after_content' ); ?>
	
	<div class="section-divider">
		<hr />
	</div>
	
	
	<section class="benefits">
		<header>
			<h2>Build Foundation based sites, powered by WordPress</h2>
			<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
		</header>
	
		<div class="semantic">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/semantic.svg" alt="semantic">
			<h3>Semantic</h3>
			<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
		</div>
	
		<div class="responsive">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/responsive.svg" alt="responsive">
			<h3>Responsive</h3>
			<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>
	
		</div>
	
		<div class="customizable">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/customizable.svg" alt="customizable">
			<h3>Customizable</h3>
			<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>
	
		</div>
	
		<div class="professional">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/assets/images/demo/professional.svg" alt="professional">
			<h3>Professional</h3>
			<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
		</div>
	
		<div class="why-foundation">
			<a href="/kitchen-sink">See what's in Foundation out of the box →</a>
		</div>
	
	</section>
</div>


<p>this is the end of the page template</p>
<?php get_footer();
