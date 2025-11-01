<?php
// inc/admin-ui.php
if (!defined('ABSPATH')) exit;

/**
 * 投稿一覧に「店舗」フィルタ（post_store）
 */
add_action('restrict_manage_posts', function () {
  global $typenow;
  if ($typenow !== 'post') return;

  $tax = 'post_store';
  if (!taxonomy_exists($tax)) return;

  $selected = isset($_GET[$tax]) ? sanitize_text_field(wp_unslash($_GET[$tax])) : '';

  wp_dropdown_categories([
    'show_option_all' => 'すべての店舗',
    'taxonomy'        => $tax,
    'name'            => $tax,          // ← GET パラメータ名
    'orderby'         => 'name',
    'selected'        => $selected,
    'hierarchical'    => false,
    'show_count'      => false,
    'hide_empty'      => false,
    'value_field'     => 'slug',        // ← スラッグで受け取り
  ]);
});

/**
 * フィルタが選択されたときに実際に絞り込む
 */
add_action('pre_get_posts', function ($query) {
  if (!is_admin() || !$query->is_main_query()) return;

  // 投稿一覧画面のみ（/wp-admin/edit.php?post_type=post）
  $screen = function_exists('get_current_screen') ? get_current_screen() : null;
  if (!$screen || $screen->id !== 'edit-post') return;

  $tax = 'post_store';
  if (!taxonomy_exists($tax)) return;

  if (!empty($_GET[$tax]) && $_GET[$tax] !== '0') {
    $term = sanitize_text_field(wp_unslash($_GET[$tax]));
    $query->set('tax_query', array_merge((array)$query->get('tax_query'), [[
      'taxonomy' => $tax,
      'field'    => 'slug', // ← 上の value_field と揃える
      'terms'    => $term,
    ]]));
  }
});

/**
 * 投稿一覧に「店舗」カラムを追加
 */
add_filter('manage_post_posts_columns', function ($cols) {
  $cols['post_store'] = '店舗';
  return $cols;
});

add_action('manage_post_posts_custom_column', function ($col, $post_id) {
  if ($col !== 'post_store') return;

  $tax = 'post_store';
  if (!taxonomy_exists($tax)) {
    echo '—';
    return;
  }
  $terms = get_the_terms($post_id, $tax);
  if ($terms && !is_wp_error($terms)) {
    echo esc_html(implode(', ', wp_list_pluck($terms, 'name')));
  } else {
    echo '—';
  }
}, 10, 2);
