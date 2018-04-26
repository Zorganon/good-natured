<div class="price-tile__container">
	<div class="row price-tile-row">
		<?php $args = array('post_type'=>'service'); ?>
		<?php $sloop = new WP_Query($args); ?>
		<?php while ($sloop->have_posts()) : $sloop->the_post(); ?>
		<a class="price-tile col-sm-12 col-md-3" href="/contact">
			<div class="price-tile__title">
				<?php echo the_title(); ?>
			</div>	
			<div class="price-tile__price">
				£<?php 
					$current_post_id = get_the_ID();
					$key = 'wpcf-price';
					$price = get_post_meta( $current_post_id, $key, true );
					echo $price; ?>
			</div>
			<div class="price-tile__description">
				<?php echo the_content(); ?>
			</div>
		</a>
	  <?php endwhile; ?>
  </div>
</div>