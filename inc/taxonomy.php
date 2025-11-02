<?php

/**
 * カスタムタクソノミー登録
 * （CPT UI から取得したコードを完全移植）
 */

if (!defined('ABSPATH')) exit;

function cptui_register_my_taxes()
{

  /**
   * Taxonomy: 得意ジャンル（トレーナー）
   */
  $labels = [
    "name" => esc_html__("得意ジャンル", "custom-post-type-ui"),
    "singular_name" => esc_html__("得意ジャンル", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("得意ジャンル", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ["slug" => "trainer_genre", "with_front" => true],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => true,
    "rest_base" => "trainer_genre",
    "rest_controller_class" => "WP_REST_Terms_Controller",
  ];
  register_taxonomy("trainer_genre", ["trainer"], $args);

  /**
   * Taxonomy: 投稿店舗（店舗ブログ）
   */
  $labels = [
    "name" => esc_html__("投稿店舗", "custom-post-type-ui"),
    "singular_name" => esc_html__("投稿店舗", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("投稿店舗", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => true,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ["slug" => "gym_blog_taxonomy", "with_front" => true],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => true,
    "rest_base" => "gym_blog_taxonomy",
    "rest_controller_class" => "WP_REST_Terms_Controller",
  ];
  register_taxonomy("gym_blog_taxonomy", ["gym_blog"], $args);

  /**
   * Taxonomy: 通ってた店舗（お客様インタビュー）
   */
  $labels = [
    "name" => esc_html__("通ってた店舗", "custom-post-type-ui"),
    "singular_name" => esc_html__("通ってた店舗", "custom-post-type-ui"),
  ];

  $args = [
    "label" => esc_html__("通ってた店舗", "custom-post-type-ui"),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => ["slug" => "interview_store", "with_front" => true],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "show_tagcloud" => true,
    "rest_base" => "interview_store",
    "rest_controller_class" => "WP_REST_Terms_Controller",
  ];
  register_taxonomy("interview_store", ["interview"], $args);
}

add_action('init', 'cptui_register_my_taxes');
