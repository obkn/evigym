<?php
if (!defined('ABSPATH')) exit;
add_action('wp_enqueue_scripts', function () {
  $ver = wp_get_theme()->get('Version');
  wp_enqueue_style('evigym-style', get_stylesheet_uri(), [], $ver);
  wp_enqueue_style('ev-bootstrap', 'https://evigym.com/bootstrap/css/bootstrap.css', [], null);
  wp_enqueue_style('ev-bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', [], null);
  wp_enqueue_style('ev-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', [], null);
  wp_enqueue_style('ev-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', [], null);
  wp_enqueue_style('ev-common', 'https://evigym.com/css/minify/common.css', [], null);
  wp_enqueue_style('ev-page', 'https://evigym.com/css/minify/page.css', [], null);
  wp_enqueue_style('ev-page00', 'https://evigym.com/css/minify/page00.css', [], null);
  wp_enqueue_style('ev-tabbar', 'https://evigym.com/css/minify/tabbar.css', [], null);
  wp_enqueue_style('ev-fa5', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', [], null);

  wp_enqueue_script('jquery');
  wp_enqueue_script('ev-bootstrap', 'https://evigym.com/bootstrap/js/bootstrap.min.js', ['jquery'], null, true);
  wp_enqueue_script('ev-bootstrap-bundle', 'https://evigym.com/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], null, true);
  wp_enqueue_script('ev-slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], null, true);
  wp_enqueue_script('ev-bxslider-js', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', ['jquery'], null, true);
  wp_enqueue_script('ev-smooth-scroll', 'https://evigym.com/js/smooth-scroll.min.js', ['jquery'], null, true);
  wp_enqueue_script('ev-jquery-nav', 'https://evigym.com/js/jquery.nav.js', ['jquery'], null, true);
  wp_enqueue_script('ev-rollover', 'https://evigym.com/js/rollover.js', ['jquery'], null, true);
  wp_enqueue_script('ev-matchheight', 'https://evigym.com/js/jquery.matchHeight.js', ['jquery'], null, true);
  wp_enqueue_script('ev-main', 'https://evigym.com/js/main.js', ['jquery'], null, true);
  wp_enqueue_script('ev-lazysizes', 'https://evigym.com/js/lazysizes.min.js', [], null, true);
  wp_enqueue_script('evigym-front-init', get_template_directory_uri() . '/assets/js/front-init.js', ['jquery'], null, true);

  $inline = <<< 'JS'
jQuery(function($) {
  var btn = $('.contact-btn');
  if (btn.length) {
    var btnTop = btn.offset().top;
    $(window).on('scroll', function () {
      var winTop = $(this).scrollTop();
      btn.toggleClass('fixed', winTop >= btnTop);
    });
  }
  if ($('.js-matchHeigtht').length) $('.js-matchHeigtht').matchHeight();
  if ($('.slider').length) $('.slider').bxSlider({ auto: true, pause: 5000, touchEnabled:false });
  if ($('.traigners-top .swiper-slide').length) {
    $('.traigners-top').bxSlider({ minSlides:2, maxSlides:4, slideWidth:220, slideMargin:10, touchEnabled:false });
  }
});
JS;
  // wp_add_inline_script('ev-main', $inline);
}, 20);
