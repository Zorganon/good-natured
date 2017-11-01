<?php

function real_upload_url() {
  $uploadarray = wp_upload_dir();
  $realurl = $uploadarray['baseurl'];
  return $realurl;
}