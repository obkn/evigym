<?php
if (!defined('ABSPATH')) exit;
function ev_breadcrumbs($items = null) {
  echo '<div class="container"><ul id="breadcrumbs-one">';
  if ($items) {
    foreach ($items as $it) {
      $label = esc_html($it['label']);
      if (!empty($it['url'])) echo '<li><a href="'.esc_url($it['url']).'">'.$label.'</a></li>';
      else echo '<li><a href="" class="current">'.$label.'</a></li>';
    }
  } else {
    echo '<li><a href="'.esc_url(home_url('/')).'">パーソナルジムeviGym</a></li>';
    if (is_singular()) {
      echo '<li><a href="" class="current">'.esc_html(get_the_title()).'</a></li>';
    } elseif (is_post_type_archive()) {
      echo '<li><a href="" class="current">'.post_type_archive_title('', false).'</a></li>';
    } elseif (is_category() || is_tag() || is_tax()) {
      echo '<li><a href="" class="current">'.single_term_title('', false).'</a></li>';
    } else {
      echo '<li><a href="" class="current">'.esc_html(get_bloginfo('name')).'</a></li>';
    }
  }
  echo '</ul></div>';
}
