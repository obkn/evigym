<?php
if (!defined('ABSPATH')) exit;
add_action('after_setup_theme', function () {
  register_nav_menus([
    'global' => __('Global Navigation','evigym'),
    'footer' => __('Footer Navigation','evigym'),
  ]);
});
