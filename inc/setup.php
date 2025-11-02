<?php

/**
 * テーマセットアップ関連
 */

if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {

  // タイトルタグ自動生成
  add_theme_support('title-tag');

  // 投稿サムネイルを有効化
  add_theme_support('post-thumbnails');

  // 自動フィードリンクを有効化
  add_theme_support('automatic-feed-links');

  // HTML5マークアップのサポート
  add_theme_support('html5', [
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
  ]);

  // メニュー登録
  register_nav_menus([
    'global' => 'グローバルメニュー',
    'footer' => 'フッターメニュー',
  ]);

  // 投稿フォーマットサポート（もし使用していれば）
  add_theme_support('post-formats', ['gallery', 'image', 'video']);

  // エディタ用CSS（クラシックエディタ対応）
  add_editor_style('assets/dist/css/editor-style.css');
});
