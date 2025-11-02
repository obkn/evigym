<?php

/**
 * リダイレクト・URL制御関連
 */

if (!defined('ABSPATH')) exit;

/**
 * 検索ページでキーワードが空ならトップへリダイレクト
 * （現行テーマでも「空検索 → トップに戻す」仕様）
 */
add_action('template_redirect', function () {
  if (is_search() && !get_query_var('s')) {
    wp_redirect(home_url('/'));
    exit;
  }
});

/**
 * 特定の固定ページスラッグを別URLへリダイレクト
 * （Laravel残存URLや旧構造のための処理）
 * 必要に応じて追加
 */
add_action('template_redirect', function () {
  $redirects = [
    '/contact-lp' => '/contact/',
    '/lp/'        => '/plan/',
  ];

  $current_path = esc_url_raw($_SERVER['REQUEST_URI']);

  foreach ($redirects as $from => $to) {
    if (stripos($current_path, $from) !== false) {
      wp_redirect(home_url($to), 301);
      exit;
    }
  }
});
