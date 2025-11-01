<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="wrapper">
    <header>
      <h1>
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="https://evigym.com/img/logo2020.webp" alt="パーソナルトレーニングジム エビジム">
        </a>
      </h1>

      <div id="icons">
        <a href="/contact#Questions" class="txt-link my-auto">よくある質問</a>
        <a href="/reserve/beginner" class="hajimete my-auto">初めての方へ</a>
        <a href="https://enjoy.evigym.com/home" target="_blank" class="yoyaku my-auto">会員ログイン</a>
      </div>

      <nav class="global-nav">
        <p><img src="https://evigym.com/img/menu-main.webp" alt="MENU" width="410" height="170"></p>
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


    <main id="main">