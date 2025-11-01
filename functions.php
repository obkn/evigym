<?php

/**
 * Theme Functions - evigym (compact)
 * inc/ 内の必要ファイルを安全にロードし、ニュースCPTも含めて最小構成に整理
 */
if (!defined('ABSPATH')) exit;

/** 定数 */
define('EV_THEME_DIR', get_template_directory() . '/inc');

/** 存在チェック付きローダー */
function ev_require_inc($file)
{
    $path = EV_THEME_DIR . '/' . $file;
    if (file_exists($path)) {
        require_once $path;
    } else {
        error_log("Missing inc file: {$file}");
    }
}

/** ロード順（依存順） */
$includes = [
    // 基本
    'setup.php',          // サポート宣言（title-tag, thumbnails 等）
    'enqueue.php',        // CSS/JS

    // ナビ/表示補助
    'menus.php',          // メニュー登録
    'breadcrumbs.php',    // パンくず
    'template-tags.php',  // テンプレ補助

    // 分類 → CPT（順序重要）
    'taxonomies.php',     // 投稿/インタビュー共通の分類（例: *_store）
    'cpt-store.php',      // 店舗 /stores/
    'cpt-interview.php',  // お客様インタビュー /interview/
    'cpt-news.php',       // ★ 追加：ニュース /news/
    // 'cpt-gym.php',     // 必要になったら有効化

    // パーマリンク/管理UI
    'post-permalinks.php', // 投稿URLカスタム（/blog/{store}/{ID} 等）
    'admin-ui.php',       // 管理画面拡張（存在しなくてもOK）
];

/** 一括ロード */
foreach ($includes as $file) {
    ev_require_inc($file);
}

/** テーマ切替時にリライト再生成 */
add_action('after_switch_theme', function () {
    flush_rewrite_rules();
});

/** 開発中のみ Notice を見たい場合は有効化 */
// if (defined('WP_DEBUG') && WP_DEBUG) {
//   error_reporting(E_ALL);
//   ini_set('display_errors', '1');
// }