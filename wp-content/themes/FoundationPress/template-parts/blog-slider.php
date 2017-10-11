<div class="blog-slider__slider">
	<?php 
	  $args = array(
      'post_type'=>'post'
    );

    $blog=new WP_Query($args);

    while ($blog->have_posts()) : $blog->the_post(); 
	?>
    <div class="blog-slider__post-tile">
      <div class="blog-slider__post-img">
        <?php the_post_thumbnail( 'medium-large' ); ?>
      </div>
      
      <div class="blog-slider__post-tile__title">
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