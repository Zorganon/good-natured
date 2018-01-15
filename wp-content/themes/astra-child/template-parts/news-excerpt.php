<div class="news-excerpt__container">
	<?php $args = array('post_type'=>'post', 'posts_per_page'=>1);

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); 
	?>
    <div class="news-excerpt__title"><?php echo the_title(); ?></div>
    <div class="news-excerpt__title-underscore"></div>
    <div class="news-excerpt__text"><?php echo the_excerpt(); ?></div>
    <a class="news-excerpt__button-wrapper" href="<?php echo esc_url(the_permalink()); ?>">
      <div class="news-excerpt__link">READ MORE</div>
    </a>
  <?php 
    endwhile;
    wp_reset_postdata();
    ?>
</div>
