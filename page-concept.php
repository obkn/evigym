<?php
/*
Template Name: Concept
*/
get_header();

/**
 * Concept専用：CSSの /img/ 依存をこのページ内で置き換え（mv03 背景など）
 * 例）現行CSS: background: url("/img/page-main3.webp") no-repeat center 62% #515151;
 */
add_action('wp_head', function () {
  $img_base = get_template_directory_uri() . '/assets/img';
?>
  <style>
    /* mainvisual (Concept) をテーマ内アセットに置換 */
    .mainvisual.mv03 {
      background: url("<?php echo esc_url($img_base); ?>/page-main3.webp") no-repeat center 62% #515151;
      background-size: cover;
      width: 100%;
      min-height: 300px;
      /* 既存とズレないよう最低高の保険（必要なら調整） */
    }

    /* 画像幅の暴れ防止の保険（必要に応じて残してください） */
    .page #Concept img {
      max-width: 100%;
      height: auto;
    }
  </style>
<?php
});

/**
 * ==== 本文 ====
 * wrapper / header は header.php 側で出力済みの想定なので、ここでは <main> 以下のみを出力
 */
?>
<main id="main">
  <div class="mainvisual mv03"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="<?php echo esc_url(home_url('/')); ?>" alt="パーソナルトレーニングジムエビジム">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">エビジムの理念</a></li>
    </ul>
  </div>

  <section id="Concept">
    <div class="container">
      <div class="row">
        <div class="col-12 tit" align="center">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/concept.webp" alt="Concept">
          <h2>お客様を笑顔に</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/concept/main01.webp" alt="">
        </div>
        <div class="col-11 col-sm-10 name"><br>
          <h4>真面目でやさしい<br class="pc-none">トレーナーがサポート</h4>
          <p>エビジムの自慢は、なんといっても真面目なトレーナー。<br>
            トレーニングによる身体の変化だけでなく、お客様の心身の調子も踏まえてメニューを組める優秀なトレーナーが揃っています。
            身体を鍛えたい方はもちろん、運動が苦手な方も、やさしいトレーナーと一緒なら楽しく前向きにトレーニングできます。</p>

          <h4>パーソナルジムなのに<br class="pc-none">低価格を実現</h4>
          <p>一般的には高額なパーソナルトレーニングですが、エビジムは業界平均の約半額の低価格。<br>
            優秀なトレーナーの空き時間を活用したシフトを組み、事務作業のIT化を進めて経費削減に取り組むことで、低価格なのに高品質なトレーニングをご提供します。</p>

          <h4>ほっとできる<br class="pc-none">トレーニング環境</h4>
          <p>エビジムのお客様が高く評価してくださるのは、トレーナーのあたたかな人柄と笑顔。<br>
            トレーニングを通してお客様とトレーナーの間に信頼感が築かれ、気持ちよく運動できると多くのお客様が継続して通ってくださっています。
            さらに、クリーンで明るいエビジムはどこも駅近。お帰りが遅くなっても安心です。</p>
        </div>
      </div>

      <br><br><br><br>

      <div class="container">
        <div class="row">
          <div class="col-12 tit" align="center">
            <h2>トレーナーを笑顔に</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/concept/main02.webp" alt="">
          </div>
          <div class="col-11 col-sm-10 name"><br>
            <h4>真面目な仕事が評価されて<br class="pc-none">モチベーションアップ</h4>
            <p>パーソナルジムがお客様に価値あるトレーニングを提供できるかは、トレーナー次第。<br>
              エビジムは、優秀なトレーナーの採用と待遇改善に本気で取り組んでいます。
              トレーナーの空き時間活用と事務作業のIT化など様々な施策を重ね、トレーナーの生活を大切にできる報酬を確保しました。</p>

            <h4>自主性が高められ<br class="pc-none">成長できる環境</h4>
            <p>エビジムのトレーナーは、とにかく頭を使います。<br>
              お客様のためにオリジナルメニューを組み立て、マネジメント経験を重ねることで、考えられるトレーナーに成長できます。
              さらに、エビジムは資格取得や独立開業への支援で成長を後押し。自立したトレーナーとしての生き方を応援します。</p>

            <h4>トレーナー同士<br class="pc-none">尊敬しあえる職場</h4>
            <p>エビジムで感じるあたたかな雰囲気は、トレーナーの仲の良さも理由のひとつ。<br>
              自立したトレーナー同士が尊敬しあい、小さな悩みも相談できる環境です。
              トレーナー同士の信頼がさらにお互いを高めあい「どのトレーナーさんが担当でも安心」とお客様からも評価されています。</p>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
/**
 * Concept専用：フッター直前にJSの保険（bxSlider / ハンバーガー）
 */
add_action('wp_footer', function () { ?>
  <script>
    (function($) {
      $(function() {
        // 既存：bxSlider が必要なセレクタがあれば自動初期化（保険）
        if ($.fn.bxSlider && $('.slider').length) {
          $('.slider').bxSlider({
            auto: true,
            pause: 5000,
            touchEnabled: false
          });
        }
        // ハンバーガー（header側JS未読でも開閉）
        var $hamburger = $('.js-hamburger');
        var blackBg = document.getElementById('js-black-bg');
        $hamburger.on('click', function() {
          document.body.classList.toggle('nav-open');
        });
        if (blackBg) blackBg.addEventListener('click', function() {
          document.body.classList.remove('nav-open');
        });
      });
    })(jQuery);
  </script>
<?php }, 100);

get_footer();
