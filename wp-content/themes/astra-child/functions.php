<?php

function real_upload_url() {
  $uploadarray = wp_upload_dir();
  $realurl = $uploadarray['baseurl'];
  return $realurl;
}

function gnn_enqueue_styles() {
  wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css');
  wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js');
}

add_action( 'wp_enqueue_scripts', 'gnn_enqueue_styles' );