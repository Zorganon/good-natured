<?php
/*
Template Name: News
*/
get_header(); ?>

<div class="page-container">
	<div class="body-content-container">
		
		<div class="post-page-grid">
			<div class="green-dashed-divider"></div>
			<div class="post-page-grid-content">
				<?php $args = array('post_type'=>'post');
			
			    $nloop = new WP_Query($args);
			
			    while ($nloop->have_posts()) : $nloop->the_post(); 
				?>
			    <a class="post-tile__tile" href="<?php echo get_permalink(); ?>">
			      <div class="post-tile__img">
			        <?php echo the_post_thumbnail( 'medium-large' ); ?>
			      </div>
			      <div class="post-tile__title">
			          <?php echo the_title(); ?>
			      </div>
			      <div class="blue-line"></div>
			    </a>
			  <?php 
			    endwhile;
			    wp_reset_postdata();
			    ?>
			</div>
		</div>
		
	</div>
	
	
</div>
<?php get_footer();
