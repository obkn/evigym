<?php

/**
 * CSS・JSの読み込み管理
 */
if (!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', function () {
  if (is_admin()) return;

  $dir = get_template_directory();
  $uri = get_template_directory_uri();
  $ver = fn($rel) => file_exists("$dir$rel") ? filemtime("$dir$rel") : null;

  // ---------- FC（/fc or page-fc.php）は fc.css のみ ----------
  $is_fc = is_page_template('page-fc.php') || is_page('fc');
  if ($is_fc) {
    wp_enqueue_style('evigym-fc', $uri . '/assets/static/css/fc.css', [], $ver('/assets/static/css/fc.css'));
    return;
  }

  // ---------- 通常ページ ----------
  // CSS
  wp_enqueue_style('evigym-bootstrap',   $uri . '/assets/static/bootstrap/css/bootstrap.css');
  wp_enqueue_style('evigym-bxslider',    'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', [], '4.2.12');
  wp_enqueue_style('evigym-slick',       'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', [], '1.9.0');
  wp_enqueue_style('evigym-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', ['evigym-slick'], '1.9.0');
  wp_enqueue_style('evigym-common',      $uri . '/assets/static/css/minify/common.css', [], $ver('/assets/static/css/minify/common.css'));
  wp_enqueue_style('evigym-page',        $uri . '/assets/static/css/minify/page.css',   ['evigym-common'], $ver('/assets/static/css/minify/page.css'));
  wp_enqueue_style('evigym-page00',      $uri . '/assets/static/css/minify/page00.css', ['evigym-common'], $ver('/assets/static/css/minify/page00.css'));
  wp_enqueue_style('evigym-tabbar',      $uri . '/assets/static/css/minify/tabbar.css', ['evigym-common'], $ver('/assets/static/css/minify/tabbar.css'));
  wp_enqueue_style('evigym-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', [], '5.5.0');

  // JS（最低限）
  wp_enqueue_script('jquery');
  wp_enqueue_script('evigym-bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', ['jquery'], '4.2.12', true);
  wp_enqueue_script('evigym-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], '1.9.0', true);
  wp_enqueue_script('evigym-bootstrap-bundle', $uri . '/assets/static/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], $ver('/assets/static/bootstrap/js/bootstrap.bundle.min.js'), true);
  wp_enqueue_script('evigym-main', $uri . '/assets/static/js/main.js', ['jquery'], $ver('/assets/static/js/main.js'), true);
  wp_enqueue_script('evigym-inline-common', $uri . '/assets/static/js/inline/common.js', ['jquery', 'evigym-main'], $ver('/assets/static/js/inline/common.js'), true);
  wp_enqueue_script('evigym-lazysizes', $uri . '/assets/static/js/lazysizes.min.js', [], $ver('/assets/static/js/lazysizes.min.js'), true);
  wp_script_add_data('evigym-lazysizes', 'async', true);

  // ---------- ページ別 ----------
  if (is_front_page()) {
    wp_enqueue_style('evigym-swiper6', 'https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.css', [], '6.8.4');
    wp_enqueue_script('evigym-swiper6', 'https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js', [], '6.8.4', true);
    wp_enqueue_style('evigym-top', $uri . '/assets/static/css/inline/top.css', ['evigym-swiper6'], $ver('/assets/static/css/inline/top.css'));
    wp_enqueue_script('evigym-top', $uri . '/assets/static/js/inline/top.js', ['jquery', 'evigym-main', 'evigym-bxslider', 'evigym-swiper6'], $ver('/assets/static/js/inline/top.js'), true);
  }

  if (is_page('plan') || is_page_template('page-plan.php')) {
    wp_enqueue_style('evigym-swiper8', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', [], '8');
    wp_enqueue_script('evigym-swiper8', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], '8', true);
    wp_enqueue_style('evigym-plan', $uri . '/assets/static/css/inline/plan.css', ['evigym-swiper8'], $ver('/assets/static/css/inline/plan.css'));
    wp_enqueue_script('evigym-plan', $uri . '/assets/static/js/inline/plan.js', ['jquery', 'evigym-main', 'evigym-bxslider', 'evigym-swiper8'], $ver('/assets/static/js/inline/plan.js'), true);
  }

  if (is_page('reserve') || is_page_template('page-reserve.php')) {
    wp_enqueue_script('evigym-reserve', $uri . '/assets/static/js/inline/reserve.js', ['jquery', 'evigym-main'], $ver('/assets/static/js/inline/reserve.js'), true);
  }

  if (is_page(['beginner', 'contact', 'online-training']) || is_page_template(['page-beginner.php', 'page-contact.php', 'page-online-training'])) {
    wp_enqueue_script('evigym-toggle', $uri . '/assets/static/js/inline/toggle.js', ['jquery', 'evigym-main'], $ver('/assets/static/js/inline/toggle.js'), true);
  }

  if (is_page('howto-training') || is_page_template('page-howto-training.php') || is_singular('post') || is_category() || is_tag()) {
    $base = '/assets/static/css/wp';
    wp_enqueue_style('evigym-howto-normalize',  $uri . "$base/normalize.css", [], $ver("$base/normalize.css"));
    wp_enqueue_style('evigym-howto-style2',     $uri . "$base/style_2.css",   ['evigym-howto-normalize'], $ver("$base/style_2.css"));
    wp_enqueue_style('evigym-howto-style-min',  $uri . "$base/style.min.css", ['evigym-howto-style2'],    $ver("$base/style.min.css"));
    wp_enqueue_style('evigym-howto-screen-min', $uri . "$base/screen.min.css", ['evigym-howto-style-min'], $ver("$base/screen.min.css"));
    wp_enqueue_style('evigym-howto-style',      $uri . "$base/style.css",     ['evigym-howto-screen-min'], $ver("$base/style.css"));
    wp_enqueue_style('evigym-howto-style1',     $uri . "$base/style_1.css",   ['evigym-howto-style'],     $ver("$base/style_1.css"));
  }

  if (is_singular('interview')) {
    wp_enqueue_script('evigym-interview', $uri . '/assets/static/js/inline/interview.js', ['jquery', 'evigym-main'], $ver('/assets/static/js/inline/interview.js'), true);
  }

  if (is_singular('gym')) {
    wp_enqueue_style('evigym-swiper8', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', [], '8');
    wp_enqueue_script('evigym-swiper8', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', [], '8', true);
    wp_enqueue_style('evigym-gym', $uri . '/assets/static/css/inline/gym.css', ['evigym-swiper8'], $ver('/assets/static/css/inline/gym.css'));
    wp_enqueue_script('evigym-gym', $uri . '/assets/static/js/inline/gym.js', ['jquery', 'evigym-main', 'evigym-swiper8'], $ver('/assets/static/js/inline/gym.js'), true);
  }
}, 50);
