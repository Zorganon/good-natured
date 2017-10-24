<?php
/*
Template Name: About
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="page-container">
	<div class="body-content-container">
	  <div class="about-hero-img">
	    
	  </div>
	  <div class="blurb-divider">
	    <p>“I work with my clients to make small changes that drive lasting and powerful results. This can take place through one-to-one consultations or via Skype”</p>
	  </div>
	  <div class="about-janet-container">
	    <div class="about-janet__text-box">
	    	<div class="about-janet__title">About Janet</div>
	    	<div class="about-janet__title-underscore"></div>
	    	<div class="about-janet__text">
	    		<p>I have had a life long interest in healthy eating, was vegetarian for a long period, and now look to using fresh local whole foods as the basis of my diet.</p>
					<p>I live and work in Crediton, Devon, and am a therapist at Crediton Complimentary Health Centre.  My clients visit me from Exeter, Okehampton, and surrounding towns and villages.</p>
					<p>I have strong links with local food suppliers, through the Farmers’ Markets in Crediton and Exeter, and through my association with Linscombe Farm, an award winning organic vegetable farm.</p>
					<p>My advice can be complimentary to conventional approaches to health, and can also be used as an alternative remedy to help with numerous health and well being issues.</p>
	    	</div>
	    </div>
	    <div class="about-janet__image">
	    	<image src="wp-content/themes/FoundationPress/aboutjanet.png"></image>
	    </div>
	  </div>
<!---- Large size divider text paragraph ---->	  
	  <div class="unsure-blurb-box">
	    <div class="unsure-blurb__divider">
	      <image></image>
	    </div>
	    <div class="unsure-blurb__text">
	      <p>For those clients who are uncertain if Nutritional Therapy is for them, I offer a free 20 minute phone consultation.</p>
				<p>Should we jointly decide that Nutritional Therapy is a good approach for you to try, then we will arrange a consultation.  Prior to the consultation, you will be sent a questionnaire  which includes your medical history and a three day food diary to be returned to me at least three days in advance of the consultation. This enables me to build a picture of your health history and consider how I can help you achieve your goals. It also ensures you get more value from our consultation time as much of the analysis is carried out in advance.</p>
	    </div>
	    <div class="unsure-blurb__divider">
	      <image></image>
	    </div>
	  </div>
<!---- Nutrition Consultations Text Section -->	  
	  <div class="nutrition-consultations__box">
	  	<div class="nutrition-consultations__image"></div>
	  	<div class="nutrition-consultations__textbox">
	  		<div class="nutrition-consultations__text-title"></div>
	  		<div class="nutrition-consultations__text">
	  			<p>Consultations takes place in Crediton, and last for one and a half hours. This costs £45. I practice from the Crediton Complementary Health Centre on the High Street. I also consult from my home, just on the outskirts of Crediton.</p>
					<p>You will go away with a written outline of menu plans, food choices, and any suggested supplements and life style factors. Further information in the form of “handouts” will be given to you where this might be helpful reference, plus reference to other web sites or information sources. This will all be tailored to the needs of each individual client. You will then have the information you need to help you make healthy choices, and plenty of ideas to get you started!</p>
					<p>Follow up consultations are not always needed – it depends on many factors. Follow ups can be by phone, skype or face to face consultation, charged at £20 for a half hour slot, or £40 for an hour.</p>
	  		</div>
	  	</div>
	  </div>
<!---- Price Tiles ---->
	  <div class="price-tile-container row">
	  	<div class="price-tile-1 column small-6 medium-3">
	  		<?php show_price_tile( 4 ); ?>
	  	</div>
	  	<div class="price-tile column small-6 medium-3">
	  		<?php show_price_tile( 6 ); ?>
	  	</div>
	  	<div class="price-tile column small-6 medium-3">
	  		<?php show_price_tile( 7 ); ?>
	  	</div>
	  	<div class="price-tile column small-6 medium-3">
	  		<?php show_price_tile( 8 ); ?>
	  	</div>
	  </div>
<!---- featured blog article? --->
		<div class="featured-article-container">
			
		</div>
		
<!--- nutritional Therapy blurb ---->
	<div class="nutritional-therapy-blurb-container">
		<div class="nutritional-therapy-blurb__title"></div>
		<div class="nutritional-therapy-blurb__benefits row">
			<ul class="column small-12 medium-6">
				<li>Weight Management</li>
				<li>Energy Levels</li>
				<li>Stress Management</li>
			</ul>
			<ul class="column small-12 medium-6">
				<li>Food Cravings</li>
				<li>Skin Conditions</li>
				<li>Digestive Disorders</li>
			</ul>
		</div>
	</div>
</div>
<?php get_footer();
