<?php

/**
 * Template Name: Plan Page
 * Description: 料金プランページ用テンプレート
 */

get_header();

// 画像などのアセットURLを簡単に書けるようにヘルパー
$asset = function ($path) {
  // 例: /assets/img/... を想定（リポジトリに assets ディレクトリあり）
  return esc_url(get_template_directory_uri() . '/assets/static/' . ltrim($path, '/'));
};
?>
<main id="main">
  <div class="mainvisual mv05"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/" alt="パーソナルトレーニングジムエビジム"><?php echo esc_html__('ホーム', 'evigym'); ?></a></li>
      <li><a href="" class="current"><?php echo esc_html__('料金プラン', 'evigym'); ?></a></li>
    </ul>
  </div>

  <section id="Plan">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo $asset('img/plan.webp'); ?>" alt="Plan">
          <h2>料金プラン紹介</h2>
          <hr>
        </div>
      </div>
    </div>

    <div class="tab_container">
      <input id="tab1" type="radio" name="tab_item" checked>
      <label class="tab_item" for="tab1">
        <div class="tab-icon"></div>パーソナル<br class="pc-none">トレーニング
      </label>
      <input id="tab2" type="radio" name="tab_item">
      <label class="tab_item" for="tab2">
        <div class="tab-icon"></div>グループ<br class="pc-none">トレーニング
      </label>

      <!-- パーソナルトレーニング -->
      <div class="tab_content" id="tab1_content">
        <div class="tab_content_description">
          <div class="container">
            <div class="row">
              <div class="col-12 mb30">
                <p>
                  お財布にやさしいエビジムは1回あたリ 6,050円<small>（税込）</small>～の月額料金設定です。
                  入会金・休会金・退会金不要であなただけのオーダーメイドのトレーニングをご体感いただけます。
                  当月利用しなかった分は<a href="#carry-over" class="blue">無期限繰り越し可能</a>です。
                </p>
              </div>
              <div class="col-12 col-sm-6 mb10" align="center">
                <img src="/wp-content/uploads/2025/01/25パーソナルジムeviGym-入会＆退会金0円.png" alt="入会金＆退会金無料 エビジムは入会金も退会金もすべて無料です。">
                <h2>料金プラン紹介</h2>
                <hr>
              </div>
            </div>

            <div class="row">
              <div class="col-12 col-sm-8">
                <img src="/wp-content/uploads/2025/01/25パーソナルジムeviGym料金プラン.png" alt="利用料金">
                <p class="font-120 mt10">
                  ※１）セッション時間は着替え10分を含む60分間です。<br />
                  ※２）スポット利用の場合は1回11,000円となります。
                </p>
              </div>
            </div>
          </div>

          <!-- お客様の通い方例（スライダー） -->
          <section class="plan-slider-wrapper mt40" id="interview">
            <div class="title">
              <h3>お客様の通い方例</h3>
            </div>
            <div class="planSlider">
              <div class="plan-slider swiper-wrapper">
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/012">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_A-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_A-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/028">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_B-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_B-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/036">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_C-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_C-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/019">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_D-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_D-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/007">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_E-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_E-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/035">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_F-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_F-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/018">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_G-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_G-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/032">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_H-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_H-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/013">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_I-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_I-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/034">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_J-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_J-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
                <div class="plan-slider_item swiper-slide">
                  <a href="/interview/025">
                    <picture>
                      <source type="image/webp" srcset="<?php echo $asset('img/plan/training_schedule_K-2.webp'); ?>">
                      <img src="<?php echo $asset('img/plan/training_schedule_K-2.jpg'); ?>" alt="" width="1000" height="1165">
                    </picture>
                  </a>
                </div>
              </div>
              <div class="controll">
                <a class="prev"></a><a class="next"></a>
              </div>
            </div>
          </section>

          <!-- 会員プランの特典 -->
          <section id="privilege" class="re-plan mt60">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>会員プランの特典</h2>
                  <hr>
                </div>
              </div>

              <div class="row boxgray">
                <div class="col-4 col-sm-2 col-md-2">
                  <img src="<?php echo $asset('img/plan/plan-icon01.webp'); ?>" alt="入会金無料！1カ月のみのお試しもOK">
                </div>
                <div class="col-8 col-sm-10 col-md-10">
                  <h4>入会金無料！1カ月のみもＯＫ</h4>
                  <p>エビジムは人会金が無料です。トレーニング費用だけなので、 続けられるかどうか心配という方も安心して 通い始めることができます。</p>
                </div>
              </div>

              <div class="row boxgray">
                <div class="col-4 col-sm-2 col-md-2">
                  <img src="<?php echo $asset('img/plan/plan-icon02.webp'); ?>" alt="ウォーターサーバーの冷水＆温水無料！">
                </div>
                <div class="col-8 col-sm-10 col-md-10">
                  <h4>ウォーターサーバーの冷温水無料！</h4>
                  <p>ボトルをお持ちいただければ、冷水と温水のウォーターサーバーをご自由にご利用いただけます。</p>
                </div>
              </div>

              <div class="row boxgray">
                <div class="col-4 col-sm-2 col-md-2">
                  <img src="<?php echo $asset('img/plan/plan-icon03.webp'); ?>" alt="靴置き場無料">
                </div>
                <div class="col-8 col-sm-10 col-md-10">
                  <h4>靴置き場無料</h4>
                  <p>トレーニング用の靴證き場も無料です。必要なものはウェアのみ。<small>※破損、盗難等の管理はいたしかねます。</small></p>
                </div>
              </div>

              <div class="row">
                <div class="col-10 col-sm-6">
                  <div align="center">
                    <a href="/reserve/beginner"><img src="<?php echo $asset('img/btn-yoyakuflow-off.svg'); ?>" alt="ご予約の流れはこちら"></a>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 繰り越しサービス -->
          <section id="carry-over" class="re-plan">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>余ったトレーニングの繰り越しサービス</h2>
                  <hr>
                </div>
              </div>
              <div class="row mt20">
                <div class="col-12 col-sm-8 mt20">
                  <img src="<?php echo $asset('img/plan/plan-21img01.webp'); ?>" alt="余ったトレーニングの繰り越しサービス">
                  <h6 class="mt20 lh-160 font-120">セッションの繰り越し回数に上限なく、<br class="sp-none">余ったセッションは無期限で繰リ越しすることができます。</h6>
                  <div class="box">
                    <div class="row">
                      <div class="col-3 col-sm-2 pt20 pr0" align="center"><img src="<?php echo $asset('img/plan/face.webp'); ?>" alt=""></div>
                      <div class="col-9 col-md-10">
                        <p class="mt10 font-90">
                          ※退会する際は余っているセッション含め、権利を消失します。<br>
                          ※休会する際に、余っているセッション含め、権利は保持していただけます。<br>
                          （※ただし休会中はトレーニングを行うことはできませんのでご注意ください。）<br>
                          ※休会は初月0円、翌月以降は月1,100円(税込)です。<br>
                          ※一旦決済した利用料は、返還できません。<br><br>
                          <a href="/contact/#faq07" class="blue">＞＞ 休会についてはこちら</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- 価格比較 -->
          <section id="good-prace" class="re-plan">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>お財布にやさしい安心できる価格設定</h2>
                  <hr>
                </div>
              </div>
              <div class="row mt20">
                <div class="col-12 col-sm-8 mb20">
                  <img src="<?php echo $asset('img/plan/plan-22_06.webp'); ?>" alt="お財布にやさしい安心できる価格設定">
                  <p class="mt10 font-90">
                    ※当社調べ。24時間ジムは入会金2,200円、事務手数料3,300円、月額7,128円。他社パーソナルジムは入会金33,000円、月額10,7800円のところと比較をしています。<br><br>
                    <a href="/contact/#faq06" class="blue">＞＞ 退会についてはこちら</a><br>
                    <a href="/contact/#faq07" class="blue">＞＞ 休会についてはこちら</a>
                  </p>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>

      <!-- グループトレーニング -->
      <div class="tab_content" id="tab2_content">
        <div class="tab_content_description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-8 mb30">
                <h3>スポットプラン(単発参加)</h3>
                <img src="<?php echo $asset('img/plan/gr-plan01.webp'); ?>" alt="単発参加スポットプラン ￥2,000/回(税込)">
                <p class="mt5 text-left">
                  単発でエビジムのオンラインHIITにご参加いただけるプランです。まずは試しに体験してみたい、ご自身のタイミングでトレーニングをされたい方にオススメなプランになります。プロのトレーナーによる最新のトレーニングをぜひ一度体験してみてください。
                </p>
              </div>
              <!-- 通い放題プラン（現在非表示だったためコメントアウトのまま） -->
            </div>

            <div class="row">
              <div class="col-10 col-sm-6">
                <div align="center">
                  <a href="https://hiit.evigym.com/" target="_blank" rel="noopener"><img src="<?php echo $asset('img/btn-yoyakuflow-off.svg'); ?>" alt="ご予約方の流れはこちら"></a>
                </div>
              </div>
            </div>
          </div>

          <section id="gr-trainer" class="re-plan mt60">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>オリンピックアスリートも支援する<br class="pc-none">世界的トレーナーが朝から徹底指導！</h2>
                  <hr>
                </div>
              </div>
              <div class="row mt20">
                <div class="col-8 col-sm-4 mb20" align="center">
                  <a href="/trainers/koyama/"><img src="<?php echo $asset('img/plan/gr-oyama.webp'); ?>" alt="小山啓太トレーナー"></a>
                </div>
                <div class="col-12 col-sm-8 mb20">
                  <div class="tr-name"><a href="/trainers/koyama/" class="bold font-140">小山啓太トレーナー</a></div>
                  <p class="mt10 mb10">
                    全米アスレティック・トレーナーズ協会公認パーソナルトレーナー（ATC）でアテネオリンピックでは選手の指導・サポート実施。ケンブリッジ大学において世界教育会議では最優秀研究賞受賞と様々な実績を持つ世界的なトレーナーです。<br>
                    プログラムは参加者に事前にアンケートを行い、要望に合わせてパーソナライズした運動メニューを組んでいます。お腹周りを引き締めたい、脚をスリムにしたいなど。あなたの要望に向き合ったメニューを組むので、ほかのどのオンラインジムよりも高い効果が期待できます！
                  </p>
                  <div align="center"><img src="<?php echo $asset('img/plan/gr-oyamahistory.webp'); ?>" alt="履歴" id="oyamahistry"></div>
                </div>
              </div>
            </div>
          </section>

          <section id="gr-held" class="re-plan mt60">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>開催日時について</h2>
                  <hr>
                </div>
              </div>
              <div class="row mt20">
                <div class="col-8 col-sm-4 mb20" align="center">
                  <img src="<?php echo $asset('img/plan/gr-week.webp'); ?>" alt="火曜日7:30～ /金曜日7:30～">
                </div>
                <div class="col-12 col-sm-8 mb20">
                  <h4 class="mt10 mb10">火・金曜日の朝7:30で日程を調整</h4>
                  <p class="mt10 mb10">セッション時間は45分間。会社への出社前に気持ちよく汗を流すことができます。オンラインのZOOMがつながる環境さえあれば、トレーニングを受けることが可能です。</p>
                </div>
              </div>
            </div>
          </section>

          <section id="gr-information" class="re-plan mt60">
            <div class="container">
              <div class="row">
                <div class="col-12">
                  <h2>開催概要について</h2>
                  <hr>
                </div>
              </div>
              <div class="row mt20">
                <div class="col-11 col-md-8" align="center">
                  <img src="<?php echo $asset('img/plan/gr-point3.webp'); ?>" alt="参加者は限定20名 / セッションは45分間 / 必要な広さは2畳だけ">
                </div>
                <div class="col-12 mb20">
                  <h4 class="mt10 mb10">セッション時間は45分間</h4>
                  <p class="mt10 mb20">セッション時間は45分間。会社への出社前に気持ちよく汗を流すことができます。オンラインのZOOMがつながる環境さえあれば、トレーニングを受けることが可能です。</p>
                  <h4 class="mt10 mb10">2畳あれば運動できる独自のメニュー</h4>
                  <p class="mt10 mb20">エビジムのオンラインHIITは2畳あればしっかり運動できるので、ひとり暮らしのスペースでも大丈夫です。マンションでも下の階を気にすることなく動けるように考えられたプログラムなので、安心してトレーニングしていただけます。</p>
                </div>
              </div>
              <div class="row">
                <div class="col-10 col-sm-6">
                  <div align="center">
                    <a href="https://hiit.evigym.com/" target="_blank" rel="noopener"><img src="<?php echo $asset('img/btn-yoyakuflow-off.svg'); ?>" alt="ご予約方の流れはこちら"></a>
                  </div>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </section>

  <section id="Coupon">
    <div class="bg311301">
      <div class="container mt0">
        <div class="row bg311301">
          <div class="col-12 tit mt40 js-animation" align="center">
            <img src="<?php echo $asset('img/Coupon.webp'); ?>" alt="Coupon">
            <h2 class="white">初回体験クーポン</h2>
            <hr class="white">
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mb15" align="center">
        <div class="col-12 col-sm-12">
          <h2 class="mt20 mb10 font-200">2025年7月31日まで</h2>
          <img src="<?php echo $asset('img/plan/初回体験キャンペーンバナー.jpg'); ?>" alt="">
          <p class="mb10 font-140">- CLICK HERE -</p>
        </div>
      </div>

      <div class="row" align="center">
        <div class="col-6">
          <a href="/reserve/beginner"><img src="<?php echo $asset('img/btn-web-off.svg'); ?>" alt="ウェブからの予約" class="boxshadow"></a>
        </div>
        <div class="col-6">
          <a href="https://lin.ee/o8z7iZZ"><img src="<?php echo $asset('img/btn-line-off.svg'); ?>" alt="LINEからの予約" class="boxshadow"></a>
        </div>
        <div class="col-12 mt20">
          <p>※セッション時間は着替え10分を別にして50分間です。</p>
        </div>
      </div>

      <div class="row mt60">
        <div class="col-12 tit" align="center">
          <h2 class="font-L">初回体験の内容</h2>
          <hr>
        </div>
      </div>

      <div class="row">
        <div class="col-11 col-md-4">
          <h3 align="center">・カウンセリング</h3>
          <p class="mb10">
            お客様がどんな悩みを持っているかのリスニングに加えて、
            お客様自身が気付きづらい姿勢・動作を確認することで、身体の悩みに伴走してゆくことがエビジム式トレーニングです。
          </p>
          <p class="mb30 font-95">
            相談例 1：デスクワークで肩こりがひどいので改善したい。<br>
            相談例 2：ポッコリ下っ腹が落ちないのでなんとかしたい！<br>
            相談例 3：魅せられるカッコいい身体になりたい。<br>
          </p>
        </div>
        <div class="col-11 col-md-4">
          <h3 align="center">・トレーニング</h3>
          <p class="mb30">
            カウンセリング内容に合わせたメニューをオーダーメイドでプランニング。
            可動域を広げていくためのストレッチなどと合わせたトレーニングをしていきます。
            自重や簡単な器材を使った自宅や市営ジムなどで実施できるトレーニングもお教えします！
          </p>
        </div>
        <div class="col-11 col-md-4">
          <h3 align="center">・今後の方針の確認</h3>
          <p class="mb30">
            プログラムの感想（不安な点や良かった点）をお伺いし、今後の方針や日常生活でのケア方法などをアドバイスいたします。
            ご入会される場合は、今後の中長期での方針などもたてていきます。
          </p>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>