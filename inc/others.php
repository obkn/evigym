<?php

/**
 * 軽量化・管理バー・コメント無効など
 */
if (!defined('ABSPATH')) exit;

// 管理バー（フロント）非表示
add_filter('show_admin_bar', '__return_false');

// 絵文字と WP バージョン非表示
add_action('init', function () {
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'wp_generator');
}, 5);

// TinyMCE テーブル既定
add_filter('tiny_mce_before_init', function ($m) {
  $m['table_default_attributes'] = json_encode(['border' => '0', 'cellpadding' => '0', 'cellspacing' => '0']);
  $m['table_default_styles']     = json_encode(['borderCollapse' => 'collapse', 'width' => '100%']);
  return $m;
});

// コメント完全無効化
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php');
});
add_action('init', function () {
  foreach (get_post_types() as $pt) {
    remove_post_type_support($pt, 'comments');
    remove_post_type_support($pt, 'trackbacks');
  }
  add_filter('feed_links_show_comments_feed', '__return_false');
}, 20);
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);

// Action Scheduler の「past-due actions」警告を出さない
add_filter('action_scheduler_pastdue_actions_check_pre', '__return_false');
