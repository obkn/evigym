<?php
if (!defined('ABSPATH')) exit;
add_action('init', function () {
  register_post_type('interview', [
    'label' => 'インタビュー',
    'labels' => [
      'name' => 'インタビュー', 'singular_name' => 'インタビュー', 'add_new_item' => 'インタビューを追加',
      'edit_item' => 'インタビューを編集', 'new_item' => '新しいインタビュー', 'view_item' => 'インタビューを表示',
      'search_items' => 'インタビューを検索'
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'interview', 'with_front' => false],
    'menu_position' => 21,
    'menu_icon' => 'dashicons-format-chat',
    'supports' => ['title','editor','thumbnail','excerpt','revisions'],
    'show_in_rest' => true
  ]);
});
