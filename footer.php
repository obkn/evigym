<?php
if (!defined('ABSPATH')) exit;
?>
<footer>
  <div class="container">
    <div class="row" id="sns">
      <div class="col-12 col-sm-12 col-md-4 col-lg-4">
        <h5>FOLLOW US</h5>
      </div>
      <div class="col-12 col-sm-12 col-md-8 col-lg-8">
        <a href="https://www.facebook.com/personalgym.eviGym/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/f-fb.webp" alt="facebook"></a>
        <a href="https://twitter.com/evigym" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/f-tw.webp" alt="twitter"></a>
        <a href="https://www.instagram.com/evigym_personaltraininggym/?hl=ja" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/f-insta.webp" alt="instagram"></a>
      </div>
    </div>
    <div class="row" id="Fnavi">
      <ul>
        <li><a href="https://qururu.jp/" target="_blank" rel="noopener">会社概要</a></li>
        <li><a href="<?php echo esc_url(home_url('/privacy')); ?>">プライバシーポリシー</a></li>
        <li><a href="<?php echo esc_url(home_url('/legal')); ?>">特定商取引法</a></li>
        <li><a href="<?php echo esc_url(home_url('/terms')); ?>">利用規約</a></li>
        <li><a href="<?php echo esc_url(home_url('/contact#Questions')); ?>">Ｑ＆Ａ</a></li>
        <li><a href="https://qururu.jp/recruit/" target="_blank" rel="noopener">トレーナー募集</a></li>
        <!-- <li><a href="<?php echo esc_url(home_url('/sitemap')); ?>">サイトマップ</a></li> -->
        <li><a href="https://vells.jp/" target="_blank" rel="noopener">フィットネスメディアVells</a></li>
        <li><a href="<?php echo esc_url(home_url('/howto-training')); ?>">トレーニング動画</a></li>
        <li><a href="<?php echo esc_url(home_url('/fc')); ?>">FC加盟店募集</a></li>
        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">トレーナーブログ</a></li>
      </ul>
    </div>
  </div>
  <div id="store-link">
    <ul>
      <li><a href="<?php echo esc_url(home_url('/stores/asahikawa/')); ?>">パーソナルジムeviGym 旭川店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/shinjuku/')); ?>">パーソナルジムeviGym 新宿店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/musashikosugi/')); ?>">パーソナルジムeviGym 武蔵小杉店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/shibuya-east/')); ?>">パーソナルジムeviGym 渋谷東口店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/shibuya-park')); ?>">パーソナルジムeviGym 渋谷公園通り店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/ebis')); ?>">パーソナルジムeviGym 恵比寿店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/roppongi')); ?>">パーソナルジムeviGym 六本木</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/ginza')); ?>">パーソナルジムeviGym 銀座</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/ginza-3rd')); ?>">パーソナルジムeviGym 銀座3rd店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/omotesandou')); ?>">パーソナルジムeviGym 表参道</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/kishiwada')); ?>">パーソナルジムeviGym 岸和田店</a></li>
      <li><a href="<?php echo esc_url(home_url('/stores/sapporo-maruyama')); ?>">パーソナルジムeviGym 札幌-円山店</a></li>
    </ul>
  </div>
  <address>
    <p>COPYRIGHT eviGym. ALL RIGHTS RESERVED.</p>
  </address>
</footer>
</wrapper>
<div class="sticky-footer">
  <div class="backtotop">
    <a href="#wrapper" data-scroll id="gotop">
      <p>△ PAGE TOP</p>
    </a>
  </div>
  <div class="tabbar">
    <ul class="tabbar__list">
      <li class="tabbar__item">
        <span class="js-hamburger">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/icon_tabbar_menu.svg" alt="メニュー" class="open-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/icon_tabbar_menu_close.svg" alt="メニュー" class="close-icon">
        </span>
      </li>
      <li class="tabbar__item"><a href="/reserve/beginner"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/icon_tabbar_reserve.svg" alt="予約方法"></a></li>
      <li class="tabbar__item"><a href="/trainers"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/icon_tabbar_trainers.svg" alt="トレーナーを探す"></a></li>
      <li class="tabbar__item"><a href="/stores"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/icon_tabbar_stores.svg" alt="店舗一覧"></a></li>
      <li class="tabbar__item"><a href="/plan"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/icon_tabbar_plan.svg" alt="料金プラン"></a></li>
    </ul>
  </div>
</div>
<noscript>
  <style>
    .js-animation {
      opacity: 1;
      visibility: visible;
      transform: translateY(0px);
    }
  </style>
</noscript>
<?php wp_footer(); ?>
</body>

</html>