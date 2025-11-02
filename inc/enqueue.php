<?php

/**
 * CSS / JS 読み込み設定
 */

if (!defined('ABSPATH')) exit;

add_action('wp_enqueue_scripts', function () {

  // バージョン番号（キャッシュ対策用）
  $theme_version = wp_get_theme()->get('Version');

  // jQueryはWordPress同梱を使用
  wp_enqueue_script('jquery');

  // メインCSS（CDNまたはローカル）
  wp_enqueue_style(
    'evigym-style',
    get_template_directory_uri() . '/assets/dist/css/main.min.css',
    [],
    $theme_version
  );

  // メインJS（CDNまたはローカル）
  wp_enqueue_script(
    'evigym-script',
    get_template_directory_uri() . '/assets/dist/js/main.min.js',
    ['jquery'],
    $theme_version,
    true
  );

  // フォントや外部リソースがある場合
  // wp_enqueue_style('evigym-fonts', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap', [], null);
});
