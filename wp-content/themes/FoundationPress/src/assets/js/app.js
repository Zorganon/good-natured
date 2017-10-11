import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

import './lib/demosite';
var $jq = jQuery.noConflict();
$(document).foundation();

$jq(document).ready(function(){
  
  $jq('.recipe-slider__slider').slick({
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        }
      },
      {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        }
      }
    ]
  });
  
  $jq('.blog-slider__slider').slick({
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
        }
      },
      {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        }
      }
    ]
  });
});