<?php
if (!defined('ABSPATH')) exit;
function ev_tel_link($tel) {
  $digits = preg_replace('/[^0-9]/', '', $tel);
  return sprintf('<a href="tel:%s">%s</a>', esc_attr($digits), esc_html($tel));
}
