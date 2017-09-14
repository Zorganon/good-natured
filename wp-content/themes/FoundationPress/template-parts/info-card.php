<div class="info-card">
	<div class="info-card__image">
		<!-- grab image from wp post -->
		<?php 
		  $args = array(
        'post_type'=>'info-block', 
        'orderby'=>'rand', 
        'posts_per_page'=>'1'
      );
  
      $infoblock=new WP_Query($args);
  
      while ($infoblock->have_posts()) : $infoblock->the_post(); 
		?>
	</div>
	<div class="info-card__info">
		<div class="info-card__info__headline">
		  <h2><?php the_title(); ?></h2>
		</div>
		<div class="info-card__info__bullets">
		  <?php echo the_content() ?>
		</div>
		<div class="info-card__info__more-button"></div>
	</div>
	<?php
	  endwhile;
	  wp_reset_postdata();
	?>
</div>