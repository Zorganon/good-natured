<?php
/*
Template Name: About
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="page-container">
	<div class="body-content-container">
<!-- hero image -->
	  <div class="about-hero-img">
	    <image src="wp-content/uploads/about-hero.png"></image>
	  </div>
	<!-- -->
	<!--- about blurb -->
	  <div class="about-blurb-divider">
	  	<div class="about-blurb-divider__border"></div>
		    <p>“I work with my clients to make small changes that drive lasting and powerful results. This can take place through one-to-one consultations or via Skype”</p>
	    <div class="about-blurb-divider__border"></div>
	  </div>
	  
	  <div class="about-janet-container row">
	    <div class="about-janet__text-box column small-12 medium-6">
	    	<div class="about-janet__title">About Janet</div>
	    	<div class="about-janet__title-underscore"></div>
	    	<div class="about-janet__text">
	    		<p>I have had a life long interest in healthy eating, was vegetarian for a long period, and now look to using fresh local whole foods as the basis of my diet.</p>
					<p>I live and work in Crediton, Devon, and am a therapist at Crediton Complimentary Health Centre.  My clients visit me from Exeter, Okehampton, and surrounding towns and villages.</p>
					<p>I have strong links with local food suppliers, through the Farmers’ Markets in Crediton and Exeter, and through my association with Linscombe Farm, an award winning organic vegetable farm.</p>
					<p>My advice can be complimentary to conventional approaches to health, and can also be used as an alternative remedy to help with numerous health and well being issues.</p>
	    	</div>
	    </div>
	    <div class="about-janet__image column small-12 medium-6">
	    	<image src="wp-content/uploads/2017/10/janet.png"></image>
	    </div>
	  </div>
<!---- Large size divider text paragraph ---->	  
	  <div class="unsure-blurb-box">
	    <div class="unsure-blurb__divider"></div>
	    <div class="unsure-blurb__text">
	     	<p>For those clients who are uncertain if Nutritional Therapy is for them, I offer a free 20 minute phone consultation.</p>
				<p>Should we jointly decide that Nutritional Therapy is a good approach for you to try, then we will arrange a consultation.  Prior to the consultation, you will be sent a questionnaire  which includes your medical history and a three day food diary to be returned to me at least three days in advance of the consultation. This enables me to build a picture of your health history and consider how I can help you achieve your goals. It also ensures you get more value from our consultation time as much of the analysis is carried out in advance.</p>
	    </div>
	    <div class="unsure-blurb__divider"></div>
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
	  	<?php $args = array('post_type'=>'service');
	  		$sloop = new WP_Query($args);
	  		while ($sloop->have_posts()) : $sloop->the_post();
	  	?>
	  	<div class="price-tile column small-12 medium-3">
	  		<div class="price-tile__title">
	  			<?php echo the_title(); ?>
	  		</div>	
	  		<div class="price-tile__price">
	  			£<?php $current_post_id = get_the_ID();
	  				$key = 'wpcf-price';
	  				$price = get_post_meta( $current_post_id, $key, true );
	  				echo $price; ?>
	  		</div>
	  		<div class="price-tile__description">
	  			<?php echo the_content(); ?>
	  		</div>
  		</div>
		  <?php endwhile; wp_reset_postdata(); ?>
	  </div>  
<!---- featured news article? --->
		<div class="featured-article-container">
			<?php get_template_part( 'news-excerpt'); ?>
		</div>
		
<!--- nutritional Therapy blurb ---->
		<div class="therapy-benefits-blurb-container">
			<div class="therapy-benefits-blurb__text">
				<p>There are many conditions recognised as requiring unique nutritional recommendations to rebalance the body.</p>
				<p>Nutritional Therapy is generally considered to have a positive impact on the following:</p>
			</div>
			<div class="therapy-benefits-blurb__benefits row">
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
		<div class="about-nutritional-therapy-container">
			<div class="about-nutritional-therapy__title">About Nutritional Therapy</div>
			<div class="generic-wrapper row">
				<div class="about-nutritional-therapy__text column small-12 medium-9">
					<p>Nutritional Therapy takes a natural approach using diet, lifestyle and where required, nutritional supplements, to assist the body to achieve and maintain optimum health. It encourages the body’s natural healing abilities and by doing so may be of benefit to many common health problems.</p>
					<p>It looks beyond the symptoms, to establish the root cause of ill health, such as poor digestion, toxicity and food and nutrient imbalances and deficiencies. If these can be identified, an improvement plan can be devised that may help towards reducing or eliminating the symptoms.
			Often making only a few simple changes to our diets can result in increased energy levels and improved mental and emotional well-being.</p>
					<p>Nutritional Therapy looks at each individual as a unique person. One-size-fits-all is certainly NOT part of how it works.  A full personal case history helps the Therapist work out what might be the underlying causes of symptoms, and then the client and therapist together devise a plan that the client feels they can work with.</p>
					<p>Nutritional Therapy is a very gentle, holistic approach to health and well being. Many clients are astounded at the difference a few simple changes to their food can make.</p>
					<p>There is plenty of evidence to support the use of diet to influence health and well being. Increasingly studies are showing the importance of food and nutrients to reduce ill health and disease, including  heart health, arthritis, MS, IBS, infections and immunity, Alzheimers, diabetes. See my links page for links to studies, and for further information. Whether you want to achieve a specific goal such as weight loss, or to address a more chronic health issue, Jan will work with you to help you achieve your goal. Some of the many health issues she supports include stress, low energy, digestive complaints, female health issues (such as PMS and menopause) and fibromyalgia.</p>
				</div>
				<div class="about-nutritional-therapy__image column small-12 medium-3">
					<image></image>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();
