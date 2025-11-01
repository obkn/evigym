<?php
if (!defined('ABSPATH')) exit;

/**
 * 共通のパーマリンク整形関数
 * いまは no-op（そのまま返す）。仕様確定後にここで加工する。
 */
function ev_customize_post_permalink($permalink, $post, $leavename = false, $sample = false)
{
  // TODO: 仕様決定後に、/blog/{store}/{id} や /howto-training/ の整形をここで行う
  return $permalink;
}

/**
 * 3引数版: post_link（投稿の既定フィルタ）
 */
add_filter('post_link', function ($permalink, $post, $leavename = false) {
  return ev_customize_post_permalink($permalink, $post, $leavename, false);
}, 10, 3);

/**
 * 4引数版: post_type_link（CPTやサンプル表示時など）
 */
add_filter('post_type_link', function ($permalink, $post, $leavename = false, $sample = false) {
  return ev_customize_post_permalink($permalink, $post, $leavename, $sample);
}, 10, 4);
