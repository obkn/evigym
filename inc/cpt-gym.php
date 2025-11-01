<?php
if (!defined('ABSPATH')) exit;

add_action('init', function () {
  register_post_type('gym', [
    'labels' => [
      'name'          => '店舗ブログ',
      'singular_name' => '店舗ブログ',
      'add_new_item'  => '新規店舗ブログを追加',
      'edit_item'     => '店舗ブログを編集',
      'menu_name'     => '店舗ブログ',
    ],
    'public'        => true,
    'show_in_rest'  => true,
    'has_archive'   => true,
    'rewrite'       => ['slug' => 'gym', 'with_front' => false], // /gym/{slug}
    'supports'      => ['title','editor','thumbnail','excerpt','revisions'],
    'menu_position' => 6,
    'menu_icon'     => 'dashicons-welcome-write-blog',
  ]);
});