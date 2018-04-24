<?php

function real_upload_url() {
  $uploadarray = wp_upload_dir();
  $realurl = $uploadarray['baseurl'];
  return $realurl;
}

function gnn_enqueue_styles() {
  wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/slick/slick.css');
  wp_enqueue_style( 'slickthemecss', get_stylesheet_directory_uri() . '/slick/slick-theme.css');
  wp_enqueue_style( 'gloss', get_stylesheet_directory_uri() . '/assets/fonts/Gloss_And_Bloom.ttf');
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.css');
  wp_enqueue_style( 'front', get_stylesheet_directory_uri() . '/assets/css/front.css', array('slickcss', 'slickthemecss', 'bootstrap'));
  wp_enqueue_style( 'aboutpage', get_stylesheet_directory_uri() . '/assets/css/about.css', array('slickcss', 'slickthemecss', 'bootstrap'));
  wp_enqueue_style( 'news', get_stylesheet_directory_uri() . '/assets/css/news.css', array('slickcss', 'slickthemecss', 'bootstrap'));
  wp_enqueue_style( 'recipes', get_stylesheet_directory_uri() . '/assets/css/recipes.css', array('slickcss', 'slickthemecss', 'bootstrap'));
}
function gnn_enqueue_scripts() {
  wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/assets/js/jquery-3.2.1.min.js');
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js');
  wp_enqueue_script( 'sticky', get_stylesheet_directory_uri() . '/assets/js/jquery.sticky.js');
  wp_enqueue_script( 'jsscripts', get_stylesheet_directory_uri() . '/assets/js/customscripts.js');
  wp_enqueue_script( 'slickinit', get_stylesheet_directory_uri() . '/assets/js/slider-init.js');
  wp_enqueue_script( 'slick', get_stylesheet_directory_uri() . '/slick/slick.min.js');
}

add_action( 'wp_enqueue_scripts', 'gnn_enqueue_scripts' );
add_action( 'wp_enqueue_scripts', 'gnn_enqueue_styles' );