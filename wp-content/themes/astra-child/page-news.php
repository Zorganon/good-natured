<?php
/*
Template Name: News
*/
get_header(); ?>

<div class="body-content-container">
	
	<div class="post-page-grid">
		<div class="green-dashed-divider"></div>
		<div class="post-page-grid-content container">
			<div class="row">
				<?php $args = array('post_type'=>'post');
			
			    $nloop = new WP_Query($args);
			
			    while ($nloop->have_posts()) : $nloop->the_post(); 
				?>
		    <div class="post-tile__tile col-xs-12 col-sm-6 col-md-6 col-lg-4 col-xl-3">
			    <a href="<?php echo get_permalink(); ?>">
			      <div class="post-tile__img">
			        <?php echo the_post_thumbnail( 'medium-large' ); ?>
			      </div>
			      <div class="post-tile__title">
			          <?php echo the_title(); ?>
			      </div>
			      <div class="blue-line"></div>
			    </a>
		    </div>
			  <?php 
			    endwhile;
			    wp_reset_postdata();
		    ?>
	  	</div>
		</div>
	</div>
	
</div>
	
<?php get_footer();
