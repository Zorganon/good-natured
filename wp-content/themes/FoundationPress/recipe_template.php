<?php
/*
Template Name: Recipe post
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div class="page-container">
	<div class="body-content-container">
	  <div class="r-seeall-button"></div>
	  <div class="recipe-post-blurb-container">
	    <div class="recipe-post__title"><?php insert title ?></div>
	    <div class="recipe-post__tags-list"><?php insert tags ?></div>
	    <div class="recipe-post-blurb__row row">
	      <div class="recipe-post-blurb__image column small-6"></div>
	      <div class="recipe-post-blurb__text-box column small-6">
	        <h3>Did you know?</h3>
	        <p><?php get factoid field content ?></p>
	      </div>
	    </div>
	    <div class="recipe-post-main row">
	      <div class="recipe-post-main__ingredients">
	        <?php insert ingredients into list ?>
	      </div>
	      <div class="recipe-post-main__instructions">
	        <?php insert instructions ?>
	      </div>
	    </div>
	  </div>
	  
  </div>
  
	<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
