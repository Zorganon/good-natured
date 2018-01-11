<?php
/*
Template Name: recipe
*/
get_header(); ?>

<div class="page-container">
	<div class="body-content-container">
		
		<div class="post-page-grid">
			<div class="green-dashed-divider"></div>
			<div class="post-page-grid-content">
				<?php $args = array('post_type'=>'recipe');
			
			    $rloop = new WP_Query($args);
			
			    while ($rloop->have_posts()) : $rloop->the_post(); 
				?>
			    <div class="post-tile__tile col-sm-12 col-md-4">
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
		

		<?php do_action( 'foundationpress_after_content' ); ?>
		
	</div>
	
	
</div>
<?php get_footer();
