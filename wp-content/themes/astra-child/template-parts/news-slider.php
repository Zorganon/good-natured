<div class="news-slider__slider slider-container" id="news-slider">
	<?php $args = array('post_type'=>'post');

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); 
	?>
    <div class="post-tile__tile">
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
