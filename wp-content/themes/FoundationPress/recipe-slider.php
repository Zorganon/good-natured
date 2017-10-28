<div class="recipe-slider__slider">
	<?php $args = array( 'post_type'=>'recipe' );

    $loop = new WP_Query($args);

    while ($loop->have_posts() ) : $loop->the_post(); 
	?>
    <div class="recipe-slider__post-tile">
      <div class="recipe-slider__post-img">
        <?php echo the_post_thumbnail( 'medium-large' ); ?>
      </div>
      <div class="recipe-slider__post-tile__title">
        <p>
          <?php echo the_title(); ?>
        </p>
      </div>
    </div>
  <?php 
    endwhile;
    wp_reset_postdata();
    ?>
</div>

