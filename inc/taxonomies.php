<?php
if (!defined('ABSPATH')) exit;

/**
 * タクソノミー
 * - 投稿店舗: post_store（通常の投稿用）
 * - 通ってた店舗: interview_store（インタビュー用）
 */
add_action('init', function () {
  // 投稿店舗（/blog/{store}/{id} の {store} になる）
  register_taxonomy('post_store', ['post'], [
    'hierarchical'      => true,
    'labels'            => [
      'name'          => '投稿店舗',
      'singular_name' => '投稿店舗',
      'search_items'  => '投稿店舗を検索',
      'all_items'     => 'すべての投稿店舗',
      'edit_item'     => '投稿店舗を編集',
      'update_item'   => '投稿店舗を更新',
      'add_new_item'  => '新規投稿店舗を追加',
      'new_item_name' => '新しい投稿店舗',
      'menu_name'     => '投稿店舗',
    ],
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'rewrite'           => ['slug' => 'post_store', 'with_front' => false],
  ]);

  // 通ってた店舗（インタビュー側）
  register_taxonomy('interview_store', ['interview'], [
    'hierarchical'      => true,
    'labels'            => [
      'name'          => '通ってた店舗',
      'singular_name' => '通ってた店舗',
      'menu_name'     => '通ってた店舗',
    ],
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'rewrite'           => ['slug' => 'interview_store', 'with_front' => false],
  ]);
}, 0);