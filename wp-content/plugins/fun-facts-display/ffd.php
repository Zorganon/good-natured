<?php
/**
 * @package Fun_Facts_Display
 * @version 1.0
 */
/*
Plugin Name: Fun Facts Display
Plugin URI: none!
Description: This plugin searches for a post type called "Fun Facts" and randomly displays one of those posts in the site header.
Author: Matt Mullenweg
Version: 1.6
Author URI: http://ma.tt/
*/
function get_fun_facts() {
 //retrieves, cleans and returns a random funfact post
  
}

function show_fun_fact() {
  $funfact = get_fun_facts();
  echo "<p id='funfact'> $funfact </p>";
  
}

add_action( 'wp_load', 'show_fun_fact' );

function fun_fact_css() {
  //load funfact css file.
}
add_action( 'wp_load', 'fun_fact_css');