<?php
/**
 * @package Fun_Facts_Display
 * @version 1.0
 
Plugin Name: Fun Facts Display
Plugin URI: none!
Description: This plugin searches for a post type called "Fun Facts" and randomly displays one of those posts in the site header.
Author: Dan Hudson
Version: 1.0
Author URI:
*/
  

function get_fun_facts() {
  global $wpdb;
  //retrieves, cleans and returns a random funfact post
  //get_results returns a numerically indexed array of row objects
  $results = $wpdb->get_results( 'SELECT * FROM wp_posts WHERE post_type = "funfact" ', OBJECT );
  // choose a random member of results array
  $funfactObject = $results[array_rand($results, 1)];
  $funfactString = apply_filters( 'the_content', $funfactObject->post_content );
  return $funfactString;
}

function show_fun_fact() {
  $funfact = get_fun_facts();
  echo "<h5>Did you know?</h5>";
  echo "<p id=funfact> $funfact </p>";
}

//add_action( 'wp_head', 'show_fun_fact' );
?>
