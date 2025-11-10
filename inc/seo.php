<?php

/**
 * SEO関連（AIOSEOの調整）
 */
if (!defined('ABSPATH')) exit;

// AIOSEO 有効時のみ、WPデフォの重複しうる出力を抑止
if (defined('AIOSEO_VERSION')) {
  remove_action('wp_head', 'wp_shortlink_wp_head', 10);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);
  remove_action('wp_head', 'rel_canonical');
}

// タイトル：AIOSEO 無効時のみ簡易フォールバック
add_filter('pre_get_document_title', function ($title) {
  if (defined('AIOSEO_VERSION')) return $title;
  return (is_front_page() || is_home())
    ? get_bloginfo('name')
    : $title . ' | ' . get_bloginfo('name');
});

// 旧エディタ系・フィード系の不要タグを抑止
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
