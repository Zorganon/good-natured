<div class="news-excerpt__wrapper">
	<?php $args = array('post_type'=>'post', 'posts_per_page'=>1);

    $loop = new WP_Query($args);

    while ($loop->have_posts()) : $loop->the_post(); 
	?>
    <div class="news-excerpt__meta"></div>
    <div class="news-excerpt__title"><?php echo the_title(); ?></div>
    <div class="news-excerpt__text"><?php echo the_content(); ?></div>
  <?php 
    endwhile;
    wp_reset_postdata();
    ?>
</div>
