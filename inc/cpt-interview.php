<?php
if (!defined('ABSPATH')) exit;

add_action('init', function () {
  register_post_type('interview', [
    'labels' => [
      'name'          => 'お客様インタビュー',
      'singular_name' => 'インタビュー',
      'add_new_item'  => '新規インタビューを追加',
      'edit_item'     => 'インタビューを編集',
      'menu_name'     => 'お客様インタビュー',
    ],
    'public'        => true,
    'show_in_rest'  => true,
    'has_archive'   => true,
    'rewrite'       => ['slug' => 'interview', 'with_front' => false], // /interview/{slug}
    'supports'      => ['title', 'editor', 'thumbnail', 'excerpt', 'revisions'],
    'menu_position' => 7,
    'menu_icon'     => 'dashicons-format-quote',
  ]);
});
