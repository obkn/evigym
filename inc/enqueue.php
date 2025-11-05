<?php

/**
 * Assets enqueue
 */
if (! defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', function () {

  $theme_dir = get_template_directory();
  $theme_uri = get_template_directory_uri();
  $static    = $theme_uri . '/assets/static';

  // --- jQuery（WP同梱・deferしない）---
  wp_enqueue_script('jquery');

  // --- CSS ---
  wp_enqueue_style('evigym-bootstrap',   $static . '/bootstrap/css/bootstrap.css', [], null, 'all');
  wp_enqueue_style('evigym-bxslider',    'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css', [], '4.2.12', 'all');
  wp_enqueue_style('evigym-slick',       'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', [], '1.9.0', 'all');
  wp_enqueue_style('evigym-slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css', ['evigym-slick'], '1.9.0', 'all');
  wp_enqueue_style('evigym-common',  $static . '/css/minify/common.css', [], null, 'all');
  wp_enqueue_style('evigym-page',    $static . '/css/minify/page.css',   ['evigym-common'], null, 'all');
  wp_enqueue_style('evigym-page00',  $static . '/css/minify/page00.css', ['evigym-common'], null, 'all');
  wp_enqueue_style('evigym-tabbar',  $static . '/css/minify/tabbar.css', ['evigym-common'], null, 'all');
  wp_enqueue_style('evigym-fontawesome', 'https://use.fontawesome.com/releases/v5.5.0/css/all.css', [], '5.5.0', 'all');

  // --- JS（ライブラリ類）---
  wp_enqueue_script('evigym-bxslider', 'https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js', ['jquery'], '4.2.12', true);
  wp_script_add_data('evigym-bxslider', 'defer', true);

  wp_enqueue_script('evigym-slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], '1.9.0', true);
  wp_script_add_data('evigym-slick', 'defer', true);

  wp_enqueue_script('evigym-bootstrap-bundle', $static . '/bootstrap/js/bootstrap.bundle.min.js', ['jquery'], null, true);
  wp_script_add_data('evigym-bootstrap-bundle', 'defer', true);

  wp_enqueue_script('evigym-smooth-scroll', $static . '/js/smooth-scroll.min.js', [], null, true);
  wp_script_add_data('evigym-smooth-scroll', 'defer', true);

  wp_enqueue_script('evigym-jquery-nav', $static . '/js/jquery.nav.js', ['jquery'], null, true);
  wp_script_add_data('evigym-jquery-nav', 'defer', true);

  wp_enqueue_script('evigym-rollover', $static . '/js/rollover.js', ['jquery'], null, true);
  wp_script_add_data('evigym-rollover', 'defer', true);

  wp_enqueue_script('evigym-matchheight', $static . '/js/jquery.matchHeight.js', ['jquery'], null, true);
  wp_script_add_data('evigym-matchheight', 'defer', true);

  // --- メイン（テーマ内）---
  wp_enqueue_script('evigym-main', $static . '/js/main.js', ['jquery'], null, true);
  // ここはあえて defer しない：確実にフッターで先に実行させる

  // --- lazysizes（async）---
  wp_enqueue_script('evigym-lazysizes', $static . '/js/lazysizes.min.js', [], null, true);
  wp_script_add_data('evigym-lazysizes', 'async', true);

  // --- インライン：ハンバーガーは jQuery 依存なしの委譲方式 ---
  $inline_js = <<<'JS'
  (function(){
    // ハンバーガー開閉（イベントデリゲーション）
    document.addEventListener('click', function(e){
      var btn = e.target.closest('.js-hamburger');
      if (btn){
        document.body.classList.toggle('nav-open');
        return;
      }
      var blackBg = e.target.closest('#js-black-bg');
      if (blackBg){
        document.body.classList.remove('nav-open');
      }
    }, { passive: true });

    if (window.jQuery){
      var $ = window.jQuery;

      // contact ボタン固定
      var $btn = $('.contact-btn');
      if ($btn.length){
        var btnTop = $btn.offset().top;
        $(window).on('scroll', function () {
          var winTop = $(this).scrollTop();
          $btn.toggleClass('fixed', winTop >= btnTop);
        });
      }

      // matchHeight（クラス名は js-matchHeight に統一）
      if ($.fn.matchHeight){
        $('.js-matchHeight').matchHeight();
      }

      // bxSlider
      if ($('.slider').length && $.fn.bxSlider){
        $('.slider').bxSlider({auto:true,pause:5000,touchEnabled:false});
      }
      if ($('.traigners-top').length && $.fn.bxSlider){
        $('.traigners-top').bxSlider({minSlides:2,maxSlides:4,slideWidth:220,slideMargin:10,touchEnabled:false});
      }

      // ドロップダウン
      var dropdown_menu_state = false;
      $(document).on('click', '.dropdown', function(){
        $('.dropdown-menu').toggle();
        setTimeout(function(){
          dropdown_menu_state = $('.dropdown-menu').is(':visible');
        },200);
      });
      $('body').on('click', function(){
        setTimeout(function(){
          if (dropdown_menu_state && $('.dropdown-menu').is(':visible')){
            $('.dropdown-menu').toggle();
            dropdown_menu_state = $('.dropdown-menu').is(':visible');
          }
        },100);
      });
    }
  })();
  JS;

  wp_add_inline_script('evigym-main', $inline_js, 'after');

  // --- TOP限定：Swiper を追加し、依存解決して inline を実行 ---
  if (is_front_page()) {
    $css_rel = '/assets/static/css/inline/top.css';
    $js_rel  = '/assets/static/js/inline/top.js';

    $css_ver = file_exists($theme_dir . $css_rel) ? filemtime($theme_dir . $css_rel) : null;
    $js_ver  = file_exists($theme_dir . $js_rel)  ? filemtime($theme_dir . $js_rel)  : null;

    // Swiper（v6系：現行初期化コードと相性良い）
    wp_enqueue_style(
      'evigym-swiper',
      'https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.css',
      [],
      '6.8.4',
      'all'
    );
    wp_enqueue_script(
      'evigym-swiper',
      'https://cdn.jsdelivr.net/npm/swiper@6.8.4/swiper-bundle.min.js',
      [],
      '6.8.4',
      true
    );
    wp_script_add_data('evigym-swiper', 'defer', true);

    // TOP専用 CSS（Swiperの後に）
    wp_enqueue_style('evigym-inline-top', $theme_uri . $css_rel, ['evigym-swiper'], $css_ver, 'all');

    // TOP専用 JS（jQuery, メイン, bxSlider, Swiper に依存）
    wp_enqueue_script(
      'evigym-inline-top',
      $theme_uri . $js_rel,
      ['jquery', 'evigym-main', 'evigym-bxslider', 'evigym-swiper'],
      $js_ver,
      true
    );
    // defer は付けない（依存＆フッター実行で順序担保）
  }
}, 100);
