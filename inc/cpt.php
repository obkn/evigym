<?php

/**
 * カスタム投稿タイプ登録
 * （CPT UI から取得したコードを完全移植）
 */

if (!defined('ABSPATH')) exit;

function cptui_register_my_cpts()
{

  /**
   * Post Type: ニュース
   */
  $labels = [
    "name" => esc_html__("ニュース", "custom-post-type-ui"),
    "singular_name" => esc_html__("ニュース", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("ニュース", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "news", "with_front" => true],
    "supports" => ["title", "editor", "thumbnail", "revisions", "author"],
  ];
  register_post_type("news", $args);

  /**
   * Post Type: 店舗情報
   */
  $labels = [
    "name" => esc_html__("店舗情報", "custom-post-type-ui"),
    "singular_name" => esc_html__("店舗情報", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("店舗情報", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "gym", "with_front" => true],
    "supports" => ["title", "editor", "thumbnail"],
  ];
  register_post_type("gym", $args);

  /**
   * Post Type: お客様インタビュー
   */
  $labels = [
    "name" => esc_html__("お客様インタビュー", "custom-post-type-ui"),
    "singular_name" => esc_html__("お客様インタビュー", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("お客様インタビュー", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "interview", "with_front" => true],
    "supports" => ["title", "editor", "thumbnail"],
  ];
  register_post_type("interview", $args);

  /**
   * Post Type: バナー
   */
  $labels = [
    "name" => esc_html__("バナー", "custom-post-type-ui"),
    "singular_name" => esc_html__("バナー", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("バナー", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "banner", "with_front" => true],
    "supports" => ["title", "editor", "thumbnail"],
  ];
  register_post_type("banner", $args);

  /**
   * Post Type: 店舗ブログ
   */
  $labels = [
    "name" => esc_html__("店舗ブログ", "custom-post-type-ui"),
    "singular_name" => esc_html__("店舗ブログ", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("店舗ブログ", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "gym_blog", "with_front" => true],
    "supports" => ["title", "editor", "thumbnail", "excerpt"],
  ];
  register_post_type("gym_blog", $args);

  /**
   * Post Type: トレーナー
   */
  $labels = [
    "name" => esc_html__("トレーナー", "custom-post-type-ui"),
    "singular_name" => esc_html__("トレーナー", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("トレーナー", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "has_archive" => false,
    "show_in_menu" => true,
    "exclude_from_search" => false,
    "rewrite" => ["slug" => "trainer", "with_front" => true],
    "supports" => ["title", "editor", "thumbnail"],
  ];
  register_post_type("trainer", $args);
}

add_action('init', 'cptui_register_my_cpts');
