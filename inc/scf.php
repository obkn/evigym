<?php

/**
 * Smart Custom Fields 関連
 */

if (!defined('ABSPATH')) exit;

/**
 * SCFの値を安全に取得
 * @param string $field フィールド名
 * @param int|null $post_id 投稿ID（省略可）
 * @return mixed
 */
function evigym_scf($field, $post_id = null)
{
  if (!function_exists('SCF::get')) return null;
  return SCF::get($field, $post_id);
}

/**
 * 繰り返しフィールドを安全に取得
 * @param string $group グループ名
 * @param int|null $post_id 投稿ID（省略可）
 * @return array
 */
function evigym_scf_group($group, $post_id = null)
{
  if (!function_exists('SCF::get')) return [];
  return SCF::get($group, $post_id);
}
