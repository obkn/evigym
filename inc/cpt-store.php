<?php
if (!defined('ABSPATH')) exit;

add_action('init', function () {
  register_post_type('store', [
    'labels' => [
      'name'          => '店舗情報',
      'singular_name' => '店舗',
      'add_new_item'  => '新規店舗情報を追加',
      'edit_item'     => '店舗を編集',
      'menu_name'     => '店舗情報',
    ],
    'public'            => true,
    'show_in_rest'      => true,
    'has_archive'       => 'stores',          // /stores/
    'rewrite'           => ['slug' => 'stores', 'with_front' => false],
    'supports'          => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
    'menu_position'     => 5,
    'menu_icon'         => 'dashicons-store',
  ]);
});
