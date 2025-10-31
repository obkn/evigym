<?php if (!defined('ABSPATH')) exit; ?>
<footer>
  <div class="container">
    <div class="row" id="sns">
      <div class="col-12 col-sm-12 col-md-4 col-lg-4"><h5>FOLLOW US</h5></div>
      <div class="col-12 col-sm-12 col-md-8 col-lg-8">
        <a href="https://www.facebook.com/personalgym.eviGym/" target="_blank"><img src="https://evigym.com/img/f-fb.webp" alt="facebook"></a>
        <a href="https://twitter.com/evigym" target="_blank"><img src="https://evigym.com/img/f-tw.webp" alt="twitter"></a>
        <a href="https://www.instagram.com/evigym_personaltraininggym/?hl=ja" target="_blank"><img src="https://evigym.com/img/f-insta.webp" alt="instagram"></a>
      </div>
    </div>
    <div class="row" id="Fnavi">
      <?php
      if (has_nav_menu('footer')) {
        wp_nav_menu([
          'theme_location' => 'footer',
          'container'      => false,
          'items_wrap'     => '<ul>%3$s</ul>',
          'fallback_cb'    => false
        ]);
      } else {
        echo '<ul>
          <li><a href="https://qururu.jp/" target="_blank">会社概要</a></li>
          <li><a href="/privacy" >プライバシーポリシー</a></li>
          <li><a href="/legal">特定商取引法</a></li>
          <li><a href="/terms">利用規約</a></li>
          <li><a href="/contact#Questions">Ｑ＆Ａ</a></li>
          <li><a href="https://qururu.jp/recruit/">トレーナー募集</a></li>
          <li><a href="https://vells.jp/" target="_blank">フィットネスメディアVells</a></li>
          <li><a href="/howto-training">トレーニング動画</a></li>
          <li><a href="/fc">FC加盟店募集</a></li>
          <li><a href="/blog">トレーナーブログ</a></li>
        </ul>';
      }
      ?>
    </div>
  </div>
  <div id="store-link">
    <ul>
      <li><a href="/stores/asahikawa/">パーソナルジムeviGym 旭川店</a></li>
      <li><a href="/stores/shinjuku/">パーソナルジムeviGym 新宿店</a></li>
      <li><a href="/stores/musashikosugi/">パーソナルジムeviGym 武蔵小杉店</a></li>
      <li><a href="/stores/shibuya-east/">パーソナルジムeviGym 渋谷東口店</a></li>
      <li><a href="/stores/shibuya-park">パーソナルジムeviGym 渋谷公園通り店</a></li>
      <li><a href="/stores/ebis-east">パーソナルジムeviGym 恵比寿EAST（東口）店</a></li>
      <li><a href="/stores/ebis">パーソナルジムeviGym 恵比寿店</a></li>
      <li><a href="/stores/roppongi">パーソナルジムeviGym 六本木</a></li>
      <li><a href="/stores/ginza">パーソナルジムeviGym 銀座</a></li>
      <li><a href="/stores/ginza-3rd">パーソナルジムeviGym 銀座3rd店</a></li>
      <li><a href="/stores/omotesandou">パーソナルジムeviGym 表参道</a></li>
      <li><a href="/stores/kishiwada">パーソナルジムeviGym 岸和田店</a></li>
      <li><a href="/stores/sapporo-maruyama">パーソナルジムeviGym 札幌-円山店</a></li>
    </ul>
  </div>
  <address><p>COPYRIGHT eviGym. ALL RIGHTS RESERVED.</p></address>
</footer>
