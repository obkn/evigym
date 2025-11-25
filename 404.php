<?php

/**
 * 404.php
 * 404 Not Found ページ
 */
if (! defined('ABSPATH')) exit;

status_header(404);
nocache_headers();

get_header();
?>
<main id="main">
  <section class="page-404">
    <div class="container">

      <h1 class="page-404-title">
        ページが見つかりませんでした
      </h1>
      <p class="page-404-desc">
        お探しのページは削除されたか、URL が変更された可能性があります。<br>
        下記のメニューから目的のページをお探しください。
      </p>
      <nav class="page-404-nav">
        <ul class="page-404-nav__list">
          <li class="page-404-nav__item"><a href="/">HOME</a></li>
          <li class="page-404-nav__item"><a href="/reserve/beginner">ご予約方法</a></li>
          <li class="page-404-nav__item"><a href="/plan">料金プラン</a></li>
          <li class="page-404-nav__item"><a href="/trainers">トレーナーを探す</a></li>
          <li class="page-404-nav__item"><a href="/stores">店舗一覧</a></li>
          <li class="page-404-nav__item"><a href="/interview">お客様インタビュー</a></li>
          <li class="page-404-nav__item"><a href="/online-training">オンライントレーニング</a></li>
          <li class="page-404-nav__item"><a href="/howto-training">運動動画</a></li>
          <li class="page-404-nav__item"><a href="/contact#Questions">よくあるご質問</a></li>
          <li class="page-404-nav__item"><a href="/news">お知らせ</a></li>
          <li class="page-404-nav__item"><a href="/contact">お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
  </section>
</main>
<?php get_footer(); ?>