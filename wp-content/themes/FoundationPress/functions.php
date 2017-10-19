<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );



function recipe_slider_loop() {
  global $post;
  // arguments, adjust as needed
  $args = array(
  'post_type' => 'recipe',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'paged' => get_query_var( 'paged' ),
  );
  // Use $loop, a custom variable we made up, so it doesn't overwrite anything
  $loop = new WP_Query( $args );
  // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
  // don't want to use $wp_query, use our custom variable instead.
  if ( $loop->have_posts() ) : 
    echo '<div class="recipe-image-slider">'; //adding in my containing div and Slick target
    while ( $loop->have_posts() ) : $loop->the_post(); 
      echo '<a href="' . get_the_permalink() . '"><div>'; //add in the link to the post
      the_post_thumbnail( 'thumbnail' );//add in the featured image at a specific size
      echo '<h5>' . get_the_title() . '</h5></div></a>';//add in the title of the post
    endwhile;
    echo '</div>';
  endif;
  // We only need to reset the $post variable. If we overwrote $wp_query,
  // we'd need to use wp_reset_query() which does both.
  wp_reset_postdata();
}

function news_slider_loop() {
  global $post;
  // arguments, adjust as needed
  $args = array(
  'post_type' => 'post',
  'posts_per_page' => -1,
  'post_status' => 'publish',
  'paged' => get_query_var( 'paged' ),
  );
  // Use $loop, a custom variable we made up, so it doesn't overwrite anything
  $loop = new WP_Query( $args );
  // have_posts() is a wrapper function for $wp_query->have_posts(). Since we
  // don't want to use $wp_query, use our custom variable instead.
  if ( $loop->have_posts() ) : 
    echo '<div class="news-image-slider">'; //adding in my containing div and Slick target
    while ( $loop->have_posts() ) : $loop->the_post(); 
      echo '<a href="' . get_the_permalink() . '"><div>'; //add in the link to the post
      the_post_thumbnail( 'thumbnail' );//add in the featured image at a specific size
      echo '<h5>' . get_the_title() . '</h5></div></a>';//add in the title of the post
    endwhile;
    echo '</div>';
  endif;
  // We only need to reset the $post variable. If we overwrote $wp_query,
  // we'd need to use wp_reset_query() which does both.
  wp_reset_postdata();
}


// function for pulling prices to display on the about page
function show_price_tile( $postid ) {
  global $wpdb;
  //get_results returns a numerically indexed array of row objects
  $serviceObject = $wpdb->get_results( 'SELECT * FROM wp_posts WHERE post_id = $postid', OBJECT );
  $field_slug = "wpcf-price";
  $servicePrice = get_post_meta($serviceObject->ID, $field_slug, true);
  $serviceContent = apply_filters( 'the_content', $serviceObject->post_content );
  
  echo "<div class='price-tile__service'>" . $serviceObject->the_title . "</div>";
  echo "<p class='price-tile__price'>" . $servicePrice . "</p>";
  echo "<p class='price-tile__text'>" . $serviceObject->the_content . "</p>";
  wp_reset_postdata();
}

