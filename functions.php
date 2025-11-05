<?php

/**
 * eviGym Theme functions.php
 * 
 * 現行サイト（Laravel + WP構成）のWP部分を完全再現するための構成。
 * すべての機能は inc ディレクトリに分割し、ここから読み込む。
 */

if (!defined('ABSPATH')) exit;

// 定数定義
define('EVIGYM_THEME_PATH', get_template_directory());
define('EVIGYM_INC_PATH', EVIGYM_THEME_PATH . '/inc');

// ======================================
// 🔧 必須ファイル読込
// ======================================

require_once EVIGYM_INC_PATH . '/setup.php';       // テーマ初期設定
require_once EVIGYM_INC_PATH . '/enqueue.php';     // CSS/JS 読み込み
require_once EVIGYM_INC_PATH . '/redirect.php';    // リダイレクト制御
require_once EVIGYM_INC_PATH . '/seo.php';         // SEO最適化・重複抑止
require_once EVIGYM_INC_PATH . '/others.php';      // その他共通カスタマイズ

// require_once EVIGYM_INC_PATH . '/cpt.php';         // カスタム投稿タイプ
// require_once EVIGYM_INC_PATH . '/taxonomy.php';    // カスタムタクソノミー
// require_once EVIGYM_INC_PATH . '/scf.php';         // Smart Custom Fields 補助

// ======================================
// 🧩 デバッグ・環境確認
// ======================================
// （必要ならコメントアウト解除して使用）
//
// add_action('wp_footer', function() {
//   echo '<pre style="background:#000;color:#0f0;padding:10px;">';
//   echo 'Theme loaded: ' . wp_get_theme()->get('Name');
//   echo "\n";
//   echo 'Loaded includes:';
//   echo "\n";
//   print_r(get_included_files());
//   echo '</pre>';
// });


/**
 * gym_blog（店舗ブログ）の個別URLを
 *   /blog/{store-term}/{post-id}
 * にする。タクソノミーは gym_blog_taxonomy（= 投稿店舗）。
 */
add_filter('post_type_link', function ($permalink, $post, $leavename) {
  if ($post->post_type !== 'gym_blog') return $permalink;

  // 投稿に紐づく「投稿店舗」タームの先頭を使う（未設定なら 'store' を仮置き）
  $terms = wp_get_post_terms($post->ID, 'gym_blog_taxonomy');
  $term  = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->slug : 'store';

  // 期待する形: /blog/{store}/{ID}
  $path = sprintf('blog/%s/%d', $term, $post->ID);
  return home_url(user_trailingslashit($path));
}, 10, 3);

/**
 * 上記URLを解決するためのリライトルール
 * 例) /blog/shinjuku/8722 -> index.php?p=8722
 * （ID指定で呼ぶのでポストタイプ混在でも解決できる）
 */
add_action('init', function () {
  add_rewrite_rule('^blog/([^/]+)/([0-9]+)/?$', 'index.php?p=$matches[2]', 'top');
});

/**
 * テーマ切替直後に1回だけリライトルールを再生成
 * （既に保存済みなら害はなし。気になる場合は削除可）
 */
add_action('after_switch_theme', function () {
  flush_rewrite_rules();
});
