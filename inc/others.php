<?php

/**
 * その他の共通カスタマイズ・軽量化など
 */

if (!defined('ABSPATH')) exit;

/**
 * 管理バーを非表示（フロントエンド）
 * ※ログイン中も邪魔にならないように
 */
add_filter('show_admin_bar', '__return_false');

/**
 * 絵文字スクリプトの読み込み停止（高速化）
 * ※SEOと重複しているけど、ここにも保険として記載
 */
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

/**
 * WPバージョンを非表示（セキュリティ対策）
 */
remove_action('wp_head', 'wp_generator');

/**
 * 固定ページスラッグを自動で親ページ名込みにする（例: parent/child）
 */
add_filter('wp_unique_post_slug', function ($slug, $post_ID, $post_status, $post_type, $post_parent) {
  if ($post_type === 'page' && $post_parent > 0) {
    $parent = get_post($post_parent);
    if ($parent && !is_wp_error($parent)) {
      $slug = $parent->post_name . '/' . $slug;
    }
  }
  return $slug;
}, 10, 5);

/**
 * クラシックエディタ内 TinyMCE テーブルプラグインの拡張
 * （tinymce-advanced / Advanced Editor Tools と併用）
 */
add_filter('tiny_mce_before_init', function ($initArray) {
  // TinyMCE expects JSON strings for these settings.
  $initArray['table_default_attributes'] = json_encode([
    'border' => '0',
    'cellpadding' => '0',
    'cellspacing' => '0',
  ]);
  $initArray['table_default_styles'] = json_encode([
    'borderCollapse' => 'collapse',
    'width' => '100%',
  ]);
  return $initArray;
});

/**
 * コメント機能を完全に無効化（メニュー・投稿タイプ・REST含む）
 */
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php'); // 左メニューから「コメント」を削除
});

add_action('init', function () {
  // コメント・トラックバックのサポートを全投稿タイプから削除
  foreach (get_post_types() as $post_type) {
    remove_post_type_support($post_type, 'comments');
    remove_post_type_support($post_type, 'trackbacks');
  }

  // コメントフィードを無効化
  add_filter('feed_links_show_comments_feed', '__return_false');
});

// コメントフォームとフィードを強制無効化
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);
add_filter('comments_array', '__return_empty_array', 10, 2);
