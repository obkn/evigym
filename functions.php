<?php

/**
 * eviGym Theme functions.php
 */
if (!defined('ABSPATH')) exit;

/* ========== 定数 & 必須読み込み ========== */
define('EVIGYM_THEME_PATH', get_template_directory());
define('EVIGYM_INC_PATH',   EVIGYM_THEME_PATH . '/inc');

/* ========== テーマ機能・共通処理の読込 ========== */
require_once EVIGYM_INC_PATH . '/setup.php';   // テーマの基本設定（サムネイル・メニューなど）
require_once EVIGYM_INC_PATH . '/enqueue.php'; // CSS・JSの読み込み管理
require_once EVIGYM_INC_PATH . '/seo.php';     // SEO関連（AIOSEOの調整）
require_once EVIGYM_INC_PATH . '/others.php';  // 軽量化・管理バー・コメント無効など

/* ========== 1回だけルール再生成 ========== */
add_action('after_switch_theme', function () {
  flush_rewrite_rules(false);
});
add_action('init', function () {
  if (!get_option('evigym_rewrite_flushed_20251107c')) {
    flush_rewrite_rules(false);
    update_option('evigym_rewrite_flushed_20251107c', 1);
  }
}, 99);

/* ========== パーマリンク & リライトルール ========== */
add_action('init', function () {
  // 投稿（post）を /howto-training/%postname%/
  global $wp_rewrite;
  $wp_rewrite->set_permalink_structure('/howto-training/%postname%/');

  // 仮想ページ用クエリ変数（/blog/{store}/）
  add_rewrite_tag('%evistore%', '([^&]+)');

  // /blog/{store}/{id}/ → gym_blog個別
  add_rewrite_rule('^blog/([^/]+)/([0-9]+)/?$', 'index.php?post_type=gym_blog&p=$matches[2]', 'top');

  // /blog/{store}/ → 店舗別一覧（仮想ページ）
  add_rewrite_rule('^blog/([^/]+)/?$', 'index.php?evistore=$matches[1]', 'top');

  // /blog/ → 固定ページ（slug: blog）
  add_rewrite_rule('^blog/?$', 'index.php?pagename=blog', 'top');

  // /staff/{slug} → trainer
  add_rewrite_rule('^staff/([^/]+)/?$', 'index.php?post_type=trainer&name=$matches[1]', 'top');
}, 5);

/* ========== gym_blog のリンク整形 ========== */
add_filter('post_type_link', function ($permalink, $post) {
  if ($post->post_type !== 'gym_blog') return $permalink;
  $terms = wp_get_post_terms($post->ID, 'gym_blog_taxonomy');
  $term  = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->slug : 'store';
  return home_url(user_trailingslashit("blog/{$term}/{$post->ID}"));
}, 10, 2);

/* ========== /blog/{store}/ 用テンプレート差し替え ========== */
add_filter('query_vars', function ($vars) {
  $vars[] = 'evistore';
  return $vars;
});
add_filter('template_include', function ($template) {
  $store = get_query_var('evistore');
  if (!empty($store)) {
    $store_tpl = locate_template('page-blog-store.php');
    if ($store_tpl) return $store_tpl;
  }
  return $template;
});

/* ========== CPT の rewrite を一括調整 ========== */
add_filter('register_post_type_args', function ($args, $post_type) {
  switch ($post_type) {
    case 'trainer':
      $args['rewrite'] = ['slug' => 'trainers', 'with_front' => false, 'feeds' => false, 'pages' => true];
      break;
    case 'gym':
      $args['rewrite'] = ['slug' => 'stores', 'with_front' => false, 'feeds' => false, 'pages' => true];
      break;
    case 'interview':
      $args['rewrite'] = ['slug' => 'interview', 'with_front' => false, 'feeds' => false, 'pages' => true];
      break;
    case 'news':
      $args['rewrite'] = ['slug' => 'news', 'with_front' => false, 'feeds' => false, 'pages' => true];
      $args['has_archive'] = false;
      break;
  }
  return $args;
}, 10, 2);

/* ========== iframe 許可（post コンテキスト拡張） ========== */
add_filter('wp_kses_allowed_html', function ($tags, $context) {
  if ($context === 'post') {
    $tags['iframe'] = [
      'src'             => true,
      'width'           => true,
      'height'          => true,
      'frameborder'     => true,
      'allow'           => true,
      'allowfullscreen' => true,
      'title'           => true,
      'style'           => true,
      'class'           => true,
      'loading'         => true,
      'referrerpolicy'  => true,
      'name'            => true,
      'id'              => true,
      'sandbox'         => true,
      'srcdoc'          => true,
    ];
  }
  return $tags;
}, 10, 2);
