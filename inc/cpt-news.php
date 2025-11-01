<?php
if (!defined('ABSPATH')) exit;

add_action('init', function () {
  register_post_type('news', [
    'labels' => [
      'name' => 'ニュース',
      'singular_name' => 'ニュース',
      'add_new_item' => '新しいニュースを追加',
      'edit_item' => 'ニュースを編集',
      'all_items' => 'ニュース一覧',
    ],
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-megaphone',
    'has_archive' => true,
    'rewrite' => ['slug' => 'news', 'with_front' => false],
    'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
    'show_in_rest' => true,
  ]);
});
