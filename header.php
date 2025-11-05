<?php

/**
 * Theme Header
 */
if (! defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
  <meta name="apple-mobile-web-app-status-bar-style" content="default">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/static/img/favicon.ico">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/static/img/favicon.webp">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TM62CJJ');
  </script>
  <!-- End Google Tag Manager -->
  <?php wp_head(); ?>
</head>

<?php
if (is_front_page()) {
  $body_id = 'home';
} elseif (is_singular()) {
  global $post;
  $body_id = $post->post_name;
} else {
  $body_id = '';
}
?>
<body<?php echo $body_id ? ' id="' . esc_attr($body_id) . '"' : ''; ?> <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM62CJJ"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <wrapper id="wrapper">
    <header>
      <h1>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/logo2020.webp" alt="パーソナルトレーニングジム eviGym">
        </a>
      </h1>
      <div id="icons">
        <a href="<?php echo esc_url(home_url('/contact#Questions')); ?>" class="txt-link my-auto">よくある質問</a>
        <a href="<?php echo esc_url(home_url('/reserve/beginner')); ?>" class="hajimete my-auto">初めての方へ</a>
        <a href="https://enjoy.evigym.com/home" target="_blank" class="yoyaku my-auto">会員ログイン</a>
      </div>
      <nav class="global-nav">
        <p><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/menu-main.webp" alt="MENU" width="410" height="170"></p>
        <ul class="global-nav__list">
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
        </ul>
      </nav>
      <div class="hamburger js-hamburger">
        <span class="hamburger__line hamburger__line--1"></span>
        <span class="hamburger__line hamburger__line--2"></span>
        <span class="hamburger__line hamburger__line--3"></span>
        <span class="hamburger__line--menu">メニュー</span>
      </div>
      <div class="black-bg" id="js-black-bg"></div>
    </header>