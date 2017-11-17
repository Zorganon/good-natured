<div class="news-slider__slider">
	<?php $args = array('post_type'=>'post');

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); 
	?>
    <div class="news-slider__post-tile">
      <a href="<?php echo get_permalink(); ?>">
        <div class="news-slider__post-img">
          <?php echo the_post_thumbnail( 'medium-large' ); ?>
        </div>
        <div class="news-slider__post-title">
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
