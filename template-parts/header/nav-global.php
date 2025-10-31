<?php if (!defined('ABSPATH')) exit; ?>
<nav class="global-nav">
  <p><img src="https://evigym.com/img/menu-main.webp" alt="MENU" width="410" height="170"></p>
  <?php
  if (has_nav_menu('global')) {
    wp_nav_menu([
      'theme_location' => 'global',
      'container'      => false,
      'menu_class'     => 'global-nav__list',
      'items_wrap'     => '<ul class="global-nav__list">%3$s</ul>',
      'fallback_cb'    => false,
    ]);
  } else {
    echo '<ul class="global-nav__list">
      <li class="global-nav__item"><a href="/reserve/beginner">ご予約方法</a></li>
      <li class="global-nav__item"><a href="/plan">料金プラン</a></li>
      <li class="global-nav__item"><a href="/trainers">トレーナーを探す</a></li>
      <li class="global-nav__item"><a href="/stores">店舗一覧</a></li>
      <li class="global-nav__item"><a href="/interview">お客様インタビュー</a></li>
      <li class="global-nav__item"><a href="/online-training">オンライントレーニング</a></li>
      <li class="global-nav__item"><a href="/howto-training">運動動画</a></li>
      <li class="global-nav__item"><a href="/contact#Questions">よくあるご質問</a></li>
      <li class="global-nav__item"><a href="/news">お知らせ</a></li>
      <li class="global-nav__item"><a href="/contact">お問い合わせ</a></li>
    </ul>';
  }
  ?>
</nav>
