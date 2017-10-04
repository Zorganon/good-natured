<div class="recipe-slider__slider">
	<?php 
	  $args = array(
      'post_type'=>'recipe'
    );

    $recipe=new WP_Query($args);

    while ($recipe->have_posts()) : $recipe->the_post(); 
	?>
    <div class="recipe-slider__post-tile">
      <div class="recipe-slider__post-img">
        <?php the_post_thumbnail( 'medium-large' ); ?>
      </div>
      
      <div class="recipe-slider__post-tile__title">
        <p>
          <?php
            echo the_title();
          ?>
        </p>
      </div>
      
    </div>
  <?php 
    endwhile;
    wp_reset_postdata();
    ?>
</div>