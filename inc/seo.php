<?php

/**
 * SEO関連（All in One SEO使用前提）
 * テーマ側ではメタタグやOGPの重複出力を防ぐ
 */

if (!defined('ABSPATH')) exit;

/**
 * WordPressのデフォルトメタタグを抑制
 * AIOSEOが出力を担当するため
 */
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_generator');

/**
 * タイトルタグ整形
 * AIOSEOを優先し、AIOSEOが無効な場合のみ独自処理を適用
 */
add_filter('pre_get_document_title', function ($title) {
  if (defined('AIOSEO_VERSION')) {
    return $title; // AIOSEOが有効なら何もしない
  }
  if (is_front_page() || is_home()) {
    return get_bloginfo('name');
  }
  return $title . ' | ' . get_bloginfo('name');
});

/**
 * 不要なmeta・emoji等の削除（軽量化兼SEO最適化）
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'feed_links_extra', 3);
