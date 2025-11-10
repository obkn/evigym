<?php

/**
 * テーマの基本設定（サムネイル・メニューなど）
 */
if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {
  // 基本機能
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_theme_support('automatic-feed-links');
  add_theme_support('html5', ['search-form', 'gallery', 'caption']);

  // メニュー登録
  register_nav_menus([
    'global' => 'グローバルメニュー',
    'footer' => 'フッターメニュー',
  ]);
});
