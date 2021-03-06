<?php
/*
Template Name: About
*/
get_header(); ?>

	<div class="body-content-container">
<!-- hero image -->
	  <div class="about-hero-img__wrapper">
	    <image class="about-hero-image" src="<?php echo real_upload_url();?>/about-hero.png"></image>
	  </div>
	<!-- -->
	<!--- about blurb -->
	  <div class="about-blurb-divider">
	  	<div class="green-dashed-divider"></div>
	    <div class="about-blurb">
	    	<p>“I work with my clients to make small changes that drive lasting and powerful results. This can take place through one-to-one consultations or via Skype”</p>
	    </div>
	    <div class="green-dashed-divider"></div>
	  </div>
	  
	  <div class="about-janet-container">
	    <div class="about-janet__text-box">
	    	<div class="about-janet__title">About Janet</div>
	    	<div class="short-underscore"></div>
	    	<div class="about-janet__title-underscore"></div>
	    	<div class="about-janet__text">
	    		<p>I have had a life long interest in healthy eating, was vegetarian for a long period, and now look to using fresh local whole foods as the basis of my diet.</p>
					<p>I live and work in Crediton, Devon, and am a therapist at Crediton Complimentary Health Centre.  My clients visit me from Exeter, Okehampton, and surrounding towns and villages.</p>
					<p>I have strong links with local food suppliers, through the Farmers’ Markets in Crediton and Exeter, and through my association with Linscombe Farm, an award winning organic vegetable farm.</p>
					<p>My advice can be complimentary to conventional approaches to health, and can also be used as an alternative remedy to help with numerous health and well being issues.</p>
	    	</div>
	    </div>
	    <div class="about-janet__image">
	    	<image class="about-janet__image-image" style="background-image: url('<?php echo real_upload_url(); ?>/janet.jpg');"></image>
	    </div>
	  </div>
<!---- Large size divider text paragraph ---->	  
	  <div class="unsure-blurb-box">
	    <div class="short-underscore"></div>
	    <div class="unsure-blurb__text">
	     	<p>For those clients who are uncertain if Nutritional Therapy is for them, I offer a free 20 minute phone consultation.</p>
				<p>Should we jointly decide that Nutritional Therapy is a good approach for you to try, then we will arrange a consultation.  Prior to the consultation, you will be sent a questionnaire  which includes your medical history and a three day food diary to be returned to me at least three days in advance of the consultation. This enables me to build a picture of your health history and consider how I can help you achieve your goals. It also ensures you get more value from our consultation time as much of the analysis is carried out in advance.</p>
	    </div>
	    <div class="short-underscore"></div>
	  </div>
<!---- Nutrition Consultations Text Section -->	  
	  <div class="nutrition-consultations__wrapper">
	  	<div class="nutrition-consultations__image-wrapper">
	  		<image class="nutrition-consultations__image" style="background-image: url('<?php echo real_upload_url(); ?>/veges.jpg');"></image>
	  	</div>
	  	<div class="nutrition-consultations__textbox">
	  		<div class="nutrition-consultations__text-title">NUTRITION CONSULTATIONS</div>
	  		<div class="long-underscore"></div>
	  		<div class="nutrition-consultations__text">
	  			<p>Consultations takes place in Crediton, and last for one and a half hours. This costs £45. I practice from the Crediton Complementary Health Centre on the High Street. I also consult from my home, just on the outskirts of Crediton.</p>
					<p>You will go away with a written outline of menu plans, food choices, and any suggested supplements and life style factors. Further information in the form of “handouts” will be given to you where this might be helpful reference, plus reference to other web sites or information sources. This will all be tailored to the needs of each individual client. You will then have the information you need to help you make healthy choices, and plenty of ideas to get you started!</p>
					<p>Follow up consultations are not always needed – it depends on many factors. Follow ups can be by phone, skype or face to face consultation, charged at £20 for a half hour slot, or £40 for an hour.</p>
	  		</div>
	  	</div>
	  </div>
<!---- Price Tiles ---->
		<?php get_template_part( 'template-parts/service', 'tile'); ?>
	  <?php wp_reset_postdata(); ?>
<!---- featured news article? --->
		<div class="news-excerpt__wrapper">
			<?php get_template_part( 'template-parts/news', 'excerpt'); ?>
		</div>
		
<!----------- nutritional Therapy blurb ----------------------------->
		<div class="therapy-benefits__container">
			<div class="short-underscore"></div>
			<div class="therapy-benefits__text">
				<p>There are many conditions recognised as requiring unique nutritional recommendations to rebalance the body.</p>
				<p>Nutritional Therapy is generally considered to have a positive impact on the following:</p>
			</div>
			<div class="therapy-benefits__bullets row">
				<ul class="bullet-list">
					<li>Weight Management</li>
					<li>Energy Levels</li>
					<li>Stress Management</li>
				</ul>
				<ul class="bullet-list">
					<li>Food Cravings</li>
					<li>Skin Conditions</li>
					<li>Digestive Disorders</li>
				</ul>
			</div>
			<div class="short-underscore"></div>
		</div>
<!------------------------------------------------------------------->		
		<div class="nut-therapy-section">
			<div class="nut-therapy__wrapper">
				<div class="nut-therapy__text-wrapper">
					<div class="nut-therapy__title">About Nutritional Therapy</div>
					<div class="long-underscore"></div>
					<div class="nut-therapy__text">
						<p>Nutritional Therapy takes a natural approach using diet, lifestyle and where required, nutritional supplements, to assist the body to achieve and maintain optimum health. It encourages the body’s natural healing abilities and by doing so may be of benefit to many common health problems.</p>
						<p>It looks beyond the symptoms, to establish the root cause of ill health, such as poor digestion, toxicity and food and nutrient imbalances and deficiencies. If these can be identified, an improvement plan can be devised that may help towards reducing or eliminating the symptoms.
				Often making only a few simple changes to our diets can result in increased energy levels and improved mental and emotional well-being.</p>
						<p>Nutritional Therapy looks at each individual as a unique person. One-size-fits-all is certainly NOT part of how it works.  A full personal case history helps the Therapist work out what might be the underlying causes of symptoms, and then the client and therapist together devise a plan that the client feels they can work with.</p>
						<p>Nutritional Therapy is a very gentle, holistic approach to health and well being. Many clients are astounded at the difference a few simple changes to their food can make.</p>
						<p>There is plenty of evidence to support the use of diet to influence health and well being. Increasingly studies are showing the importance of food and nutrients to reduce ill health and disease, including  heart health, arthritis, MS, IBS, infections and immunity, Alzheimers, diabetes. See my links page for links to studies, and for further information. Whether you want to achieve a specific goal such as weight loss, or to address a more chronic health issue, Jan will work with you to help you achieve your goal. Some of the many health issues she supports include stress, low energy, digestive complaints, female health issues (such as PMS and menopause) and fibromyalgia.</p>
					</div>
				</div>
				<div class="nut-therapy__image-box">
					<div class="nut-therapy__image1">
						<image src="<?php echo real_upload_url(); ?>/nuts1.png"></image>
					</div>
					<div class="nut-therapy__image2">
						<image src="<?php echo real_upload_url(); ?>/nuts2.png"></image>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
