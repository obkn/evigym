<?php
if (!defined('ABSPATH')) exit;
add_action('init', function () {
  register_post_type('store', [
    'label' => '店舗',
    'labels' => [
      'name' => '店舗', 'singular_name' => '店舗', 'add_new_item' => '店舗を追加',
      'edit_item' => '店舗を編集', 'new_item' => '新しい店舗', 'view_item' => '店舗を表示',
      'search_items' => '店舗を検索'
    ],
    'public' => true,
    'has_archive' => true,
    'rewrite' => ['slug' => 'stores', 'with_front' => false],
    'menu_position' => 20,
    'menu_icon' => 'dashicons-store',
    'supports' => ['title','editor','thumbnail','excerpt','revisions'],
    'show_in_rest' => true
  ]);
  register_taxonomy('store_area', 'store', [
    'label' => '店舗エリア',
    'public' => true,
    'hierarchical' => true,
    'rewrite' => ['slug' => 'stores/area', 'with_front' => false],
    'show_in_rest' => true
  ]);
});
