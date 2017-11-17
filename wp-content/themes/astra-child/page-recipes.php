<?php
/*
Template Name: recipe
*/
get_header(); ?>

<div class="page-container">
	<div class="body-content-container">
		
		<div class="divider"></div>
		<div class="post-page-grid">
			<div class="post-page-grid-wrapper">
			<?php $args = array('post_type'=>'recipe');
		
		    $rloop = new WP_Query($args);
		
		    while ($rloop->have_posts()) : $rloop->the_post(); 
			?>
		    <div class="post__tile">
		      <div class="recipe-post__img">
		        <?php echo the_post_thumbnail( 'medium-large' ); ?>
		      </div>
		      <div class="recipe-post__title">
		          <?php echo the_title(); ?>
		      </div>
		    </div>
		  <?php 
		    endwhile;
		    wp_reset_postdata();
		    ?>
		</div>
	</div>
		

		<?php do_action( 'foundationpress_after_content' ); ?>
		
	</div>
	
	
</div>
<?php get_footer();
