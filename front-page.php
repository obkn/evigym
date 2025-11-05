<?php

/**
 * Template: Front Page (dynamic)
 */
get_header();

/**
 * 便利関数: 最初のターム名を取得（なければ空文字）
 */
function evigym_first_term_name($post_id, $taxonomy)
{
  $terms = get_the_terms($post_id, $taxonomy);
  if (is_array($terms) && ! empty($terms) && ! is_wp_error($terms)) {
    return $terms[0]->name;
  }
  return '';
}
?>

<main id="main">
  <div id="stk">
    <div class="main-visual">
      <div class="container">
        <p class="text-focus-in">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/toppa.png" alt="来店累計 おかげ様で8万人突破！" width="800" height="743">
        </p>
      </div>
    </div>
  </div>

  <div class="stk-up">
    <div class="access-txt text-focus-in">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/icon-densha.webp" alt="icon-densha">徒歩5分 新宿・恵比寿×２・銀座×4・六本木・表参道・渋谷×2・武蔵小杉
    </div>

    <div class="bgffffff">

      <div class="anniversary text-focus-in">
        <div class="col-12 col-md-4 pt10" align="center">
          <img decoding="async" src="/wp-content/uploads/2024/11/14万人突破初回体験0円.png" alt="キャンペーン" />
          <div class="mt20 img-btn pb10 imgWrap">
            <a href="<?php echo esc_url(home_url('/reserve/beginner/')); ?>">
              <img decoding="async" style="max-width: 380px;" src="<?php echo get_template_directory_uri(); ?>/assets/static/img/btn-kuwashiku-off.svg" alt="詳しくはこちら" />
            </a>
          </div>
        </div>
      </div>

      <section id="Whatis">
        <div class="container">
          <div class="mt40">
            <a href="<?php echo esc_url(home_url('/news/23training-safety-policy/')); ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/bnr-safety-consideration.webp" alt="コロナ対策" width="980" height="326">
            </a>
          </div>
          <div class="row mt40">
            <div class="col-12 tit js-animation" align="center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/whats.webp" alt="What's" width="410" height="120">
              <h2>エビジムってどんなジム？</h2>
              <hr>
            </div>
            <div class="col-12 col-sm-10 col-md-6">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/main.webp" class="mb20" width="600" height="600" alt="main">
            </div>
            <div class="col-12 col-sm-10 col-md-6">
              <h3 class="lh-160 mb20">丁寧なカウンセリングと身体診断で、お客様に最適なトレーニングを提案！</h3>
              <p>エビジムではお客様の目標や悩みへの丁寧なカウンセリングと、身体状態や運動頻度などの診断内容を組み合わせて、お客様にあわせたトレーニングメニューを提案しています。目標や身体状況に応じた最適なトレーニングでお客様の"なりたい自分"をサポートします。</p>
            </div>
          </div>
        </div>
      </section>

      <section class="bg-color mb0" id="Point" align="center">
        <div class="container">
          <div class="row">
            <div class="col-12 tit js-animation">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/point.webp" class="mx-auto d-block" alt="Point" width="394" height="145">
              <h2 class="text-center">エビジムが選ばれるポイント</h2>
              <hr>
            </div>
          </div>

          <div class="row point-box point-box-20">
            <div class="col-12 col-sm-10" id="no01">
              <h3>
                <span class="point_number_main">
                  <span class="point_number">1</span>&nbsp;カウンセリングと身体診断プログラム
                </span>
              </h3>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/point1.webp" class="image-photo" width="1000" height="665" alt="point">
              <p class="mt15 mb20 text-left">エビジムではお客様の目標やお悩みの丁寧なカウンセリングだけでなく、現在の身体の状態を診断し、トレーニングを組み立てることを大切にしています。無理なく目標をかなえられるように、診断をもとにお客様に最適なメニューを提案しています。</p>
              <div class="mt20 img-btn imgWrap">
                <a href="<?php echo esc_url(home_url('/trainers/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/btn-trainers-off.svg" alt="トレーナーの紹介はこちら"></a>
              </div>
            </div>
          </div>

          <div class="row point-box point-box-20">
            <div class="col-12 col-sm-10">
              <hr>
            </div>
            <div class="col-12 col-sm-10 mt-3" id="no02">
              <h3>
                <span class="point_number_main">
                  <span class="point_number">2</span>&nbsp;運動科学に基づいたトレーニングメソッド
                </span>
              </h3>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/point2.webp" class="image-photo" width="634" height="423" alt="point">
              <p class="mt15 text-left">エビジムではトレーニング研修・実技指導を常に実施しています。姿勢・骨格の歪み・運動状況・ストレスなど、お客様ひとりひとりで身体の状況は異なります。すべてのお客様に最適なトレーニングを提供できるよう、スタッフ一同サポートします。</p>
              <div class="mt20 img-btn imgWrap">
                <a href="<?php echo esc_url(home_url('/interview/014/')); ?>"><img style="max-width: 380px;" src="<?php echo get_template_directory_uri(); ?>/assets/static/img/btn-kuwashiku-off.svg" alt="詳しくはこちら"></a>
              </div>
            </div>
          </div>

          <div id="koyama" class="row point-box point-box-20">
            <div class="col-12 col-sm-10">
              <div class="row text-left">
                <div class="col-12 mb-4">
                  <hr>
                </div>
                <div class="col-md-6 col-sm-12">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/koyama.webp" alt="koyama" width="394" height="145">
                </div>
                <div class="col-md-6 col-sm-12 mt-3">
                  <h4>トレーニング統括責任者</h4>
                  <h3>小山啓太</h3>
                  <p class="mt15 text-left">パーソナルジム eviGym トレーニング統括責任者。 お客様の心身を理解することに重きおき、 世界に通用する最先端のトレーニング研修とともに、 お客様に真剣に向き合うことができるパーソナルトレーナーを育てています。</p>
                </div>
                <div class="col-12 mt-4 mb-3">
                  <hr>
                </div>
                <div class="col-3 text-center">
                  <h3>経&nbsp;&nbsp;歴</h3>
                </div>
                <div class="col-9">
                  <p>一般社団法人運動発達支援研究センター代表理事<br />群馬大学大学院医学系研究科准教授 全米公認アスレティックトレーナー（ATC）<br />エンポリア州立大学　医療従事者免許取得<br />世界教育会議（ケンブリッジ大学）最優秀研究発表賞受賞</p>
                </div>
                <div class="col-12 mt-3">
                  <hr>
                </div>
              </div>
            </div>
          </div>

          <div class="row point-box point-box-20">
            <div class="col-12 col-sm-10" id="no03">
              <h3>
                <span class="point_number_main">
                  <span class="point_number">3</span>&nbsp;通いやすい料金プラン
                </span>
              </h3>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/point3.webp" class="image-photo" width="1600" height="1067" alt="point">
              <p class="mt15 text-left">エビジムはパーソナルジムの中でも通いやすい料金プランです。お客様のライフスタイルに合わせて様々なプランを用意しているので、きっと自分にぴったりの通いやすいプランが見つかるはずです。</p>
            </div>
          </div>

          <section class="point4-slider-wrapper">
            <h3 class="text-center mb-4">お客様の通い方例</h3>
            <div class="point4Slide">
              <div class="point4-slider swiper-wrapper">
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_A-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_A-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_B-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_B-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_C-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_C-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_D-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_D-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_E-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_E-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_F-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_F-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_G-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_G-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_H-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_H-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_I-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_I-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_J-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_J-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
                <div class="swiper-slide point4-slider_item">
                  <a href="https://53l5i.hp.peraichi.com/" target="_blank">
                    <picture>
                      <source type="image/webp" srcset="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_K-1.webp">
                      <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/training_schedule_K-1.webp" alt="" width="1000" height="656">
                    </picture>
                  </a>
                </div>
              </div>
            </div>
            <div class="controll"><a class="prev"></a><a class="next"></a></div>
          </section>

          <div class="p30 bgffffff mb30">
            <div class="row pt30 pb30">
              <div class="col-12 col-sm-10">
                <h3 class="text-center">１回あたりの費用比較</h3>
                <hr>
                <img data-src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/2_06hikaku02.webp" class="mb60 lazyload" width="1000" height="785" alt="2_06hikaku02">
                <h3>嬉しいサービス・特典</h3>
                <hr>
                <img data-src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/22_06hikaku.webp" alt="余ったセッションは無期限で繰り越し！" width="1000" height="602" class="lazyload">
                <p class="mt10 mb40">eviGymの定期会員様は余ったセッションを繰越していただけます。セッションの繰り越し回数に上限なく、無期限で繰り越していただけます。一旦決済した利用料は、返還できません。</p>
                <img data-src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/tokuten.webp" class="mb40 lazyload" width="694" height="218" alt="tokuten">
                <div class="mt20 img-btn imgWrap">
                  <a href="plan"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/btn-price-off.svg" alt="料金プランについて"></a>
                </div>
              </div>
            </div>
          </div>

          <div class="p30 bgffffff">
            <div class="row">
              <div class="col-12 tit js-animation">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/more.webp" alt="more" class="mx-auto d-block" width="395" height="145">
                <h2 class="text-center">ほかにも嬉しいポイントがたくさん</h2>
                <hr>
              </div>
            </div>
            <div class="row">
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage07.png" alt="食生活" width="600" height="120"></h3>
                <p>セッション時に無料で食事アドバイスをご提供！<br>毎日管理が必要な方には有料オプション有り。<br><a href="<?php echo esc_url(home_url('/howto-training/dietary-counselling/')); ?>" rel="noopener noreferrer">＼詳しくはコチラ／</a></p>
              </div>
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage08.png" alt="レンタルウェア" width="600" height="120"></h3>
                <p>全店レンタルウェアがあるので、<br>当日予定が調整ついた時でもトレーニングがお受け頂けます<br>（初回体験時は無料）</p>
              </div>
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage01.webp" alt="駅チカ5分の好立地！" width="600" height="120"></h3>
                <p>エビジムではすべての店舗が駅から5分以内の立地に。<br>どのお店に行ってもOKなので予定に合わせて通いやすい。</p>
              </div>
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage02.webp" alt="どの店舗でも自由に通える" width="600" height="120"></h3>
                <p>トレーニングのデータはデジタルで反映されるので、<br>どの店舗に行っても前回のトレーニングの続きができる。</p>
              </div>
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage03.webp" alt="24時間ネットで予約可能" width="600" height="120"></h3>
                <p>エビジムは24時間前まではシステムで予約可能。<br>自分の都合に合わせて予約がとれるからとっても通いやすい。</p>
              </div>
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage04.webp" alt="その日の目的・体調に合わせたメニュー" width="600" height="120"></h3>
                <p>その日の体調に合わせて毎回メニューを組み立てます。<br>ベストコンディションでなくても大丈夫！</p>
              </div>
              <div class="col-11 col-md-6 mb30">
                <h3><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/top/advantage05.webp" alt="ほぼプライベートな空間だから安心" width="600" height="120"></h3>
                <p>パーソナルな空間でトレーニングを行うことができるので、<br>ほかの人にはほとんど会いません。すっぴんでもOK！</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div id="stores-top" class="stores-top">
        <section id="Stores">
          <div class="container">
            <div class="row">
              <div class="col-12 tit js-animation" align="center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/stores.webp" alt="Stores">
                <h2>店舗一覧</h2>
                <hr>
              </div>
            </div>

            <?php
            $stores_menu = new WP_Query([
              'post_type'      => 'gym',
              'posts_per_page' => -1,
              'orderby'        => 'menu_order title',
              'order'          => 'ASC',
            ]);
            ?>
            <div class="row" id="stores-menu">
              <div class="col-11 col-sm-10" align="center">
                <ul>
                  <?php if ($stores_menu->have_posts()) : ?>
                    <?php while ($stores_menu->have_posts()) : $stores_menu->the_post(); ?>
                      <?php
                      $slug = get_post_field('post_name', get_the_ID());
                      $url  = home_url('/stores/' . $slug . '/');
                      ?>
                      <li>
                        <a href="<?php echo esc_url($url); ?>">
                          <?php echo esc_html(get_the_title()); ?>
                        </a>
                      </li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                  <?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="row">
              <div class="col-8 col-sm-10">
              </div>
              <div class="col-4 col-sm-1 d-none d-md-block" align="right">
                <div class="slideBtn" style="margin-top: -90px;"></div>
              </div>
              <div class="col-4 col-sm-1 d-block d-md-none" align="right">
                <div class="slideBtn" style="margin-top: -40px;"></div>
              </div>
            </div>
            <?php
            $stores = new WP_Query([
              'post_type'      => 'gym',
              'posts_per_page' => 12,
              'orderby'        => 'date',
              'order'          => 'DESC',
            ]);
            ?>
            <div class="Store_slide_content stores_slider">
              <?php if ($stores->have_posts()) : ?>
                <?php while ($stores->have_posts()) : $stores->the_post(); ?>
                  <?php
                  // 固定スラッグURLを明示的に生成
                  $slug = get_post_field('post_name', get_the_ID());
                  $url  = home_url('/stores/' . $slug . '/');

                  // SCFフィールドの取得
                  $pr_text            = SCF::get('salon_pr_text');
                  $info_address       = SCF::get('info_address');
                  $info_tels          = SCF::get('info_tels');
                  $info_opening_hours = SCF::get('info_opening_hours');
                  $info_regular_holiday = SCF::get('info_regular_holiday');
                  $info_access        = SCF::get('info_access');
                  ?>
                  <div class="swiper-slide" style="display: none;">
                    <div class="row name">
                      <div class="col-9 col-sm-5 imgWrap">
                        <a href="<?php echo esc_url($url); ?>">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium'); ?>
                          <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/static/img/noimage-300x300.png"
                              alt="<?php echo esc_attr(get_the_title()); ?>"
                              width="300" height="300">
                          <?php endif; ?>
                        </a>
                      </div>
                      <div class="col-11 col-sm-7">
                        <h3 class="mt10"><a href="<?php echo esc_url($url); ?>"><?php the_title(); ?></a></h3>

                        <?php if (!empty($pr_text)) : ?>
                          <?php if (is_array($pr_text)) : ?>
                            <?php foreach ($pr_text as $text) : ?>
                              <p class="mb10"><?php echo esc_html($text); ?></p>
                            <?php endforeach; ?>
                          <?php else : ?>
                            <p class="mb10"><?php echo esc_html($pr_text); ?></p>
                          <?php endif; ?>
                        <?php endif; ?>

                        <p class="mb20">
                          <?php if (!empty($info_address)) : ?>
                            住所：<?php echo esc_html($info_address); ?><br>
                          <?php endif; ?>

                          <?php if (!empty($info_tels) && is_array($info_tels)) : ?>
                            <?php foreach ($info_tels as $tel) :
                              $number = $tel['info_tel'] ?? '';
                              if ($number) : ?>
                                電話番号：<a href="tel:<?php echo esc_attr($number); ?>"><?php echo esc_html($number); ?></a><br>
                            <?php endif;
                            endforeach; ?>
                          <?php endif; ?>

                          <?php if (!empty($info_opening_hours)) : ?>
                            営業時間：<?php echo esc_html($info_opening_hours); ?><br>
                          <?php endif; ?>

                          <?php if (!empty($info_regular_holiday)) : ?>
                            定休日：<?php echo esc_html($info_regular_holiday); ?><br>
                          <?php endif; ?>

                          <?php if (!empty($info_access) && is_array($info_access)) : ?>
                            <?php foreach ($info_access as $access) :
                              $label = $access['access_label'] ?? '';
                              $alink = $access['access_url'] ?? '';
                              if ($alink && $label) : ?>
                                <a href="<?php echo esc_url($alink); ?>" target="_blank" class="google-icon">
                                  <i class="google-icon"></i><?php echo esc_html($label); ?>
                                </a>
                            <?php endif;
                            endforeach; ?>
                          <?php endif; ?>
                        </p>

                        <a href="<?php echo esc_url($url); ?>" class="btn">MORE</a>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else : ?>
                <p class="text-center">店舗情報がありません</p>
              <?php endif; ?>
            </div>
          </div>
        </section>
      </div>

      <!-- <div id="storeBlogs-top" class="storeBlogs-top">
        <section id="StoreBlogs">
          <div class="container">
            <div class="row">
              <div class="col-12 tit js-animation" align="center">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/static/img/blog.webp" alt="Stores">
                <h2>トレーナーブログ</h2>
                <hr>
              </div>
            </div>

            <div class="StoreBolg_slide_content storesBolg_slider">
              <?php
              $store_blogs = new WP_Query([
                'post_type'      => 'gym_blog',
                'posts_per_page' => 6,
                'no_found_rows'  => true,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_status'    => 'publish',
              ]);

              if ($store_blogs->have_posts()) :
                while ($store_blogs->have_posts()) : $store_blogs->the_post();
                  $terms = get_the_terms(get_the_ID(), 'gym_blog_taxonomy');
                  $term_name = $terms && !is_wp_error($terms) ? $terms[0]->name : '';
                  $term_slug = $terms && !is_wp_error($terms) ? $terms[0]->slug : '';
                  $date = get_the_date('Y.m.d');
                  $excerpt = get_the_excerpt();
                  $url = get_permalink();
              ?>
                  <div class="swiper-slide">
                    <div class="row name">
                      <div class="col-11 blog-list_item">
                        <a href="<?php echo esc_url($url); ?>">
                          <div class="blog-list_item-text">
                            <div class="blog-list_item-info">
                              <span class="blog-list_item-date"><?php echo esc_html($date); ?></span>
                              <?php if ($term_name) : ?>
                                <span class="blog-list_item-store"><?php echo esc_html($term_name); ?></span>
                              <?php endif; ?>
                            </div>
                            <div class="blog-list_item-title"><?php the_title(); ?></div>
                            <?php if ($excerpt) : ?>
                              <div class="blog-list_item-excerpt"><?php echo wp_kses_post($excerpt); ?></div>
                            <?php endif; ?>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php endwhile;
                wp_reset_postdata();
              else : ?>
                <p class="text-center">ブログ記事がまだありません。</p>
              <?php endif; ?>
            </div>

            <div class="row mt20 mb-0">
              <div class="col-12" align="center">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn">
                  <h4>トレーナーブログはコチラ＞＞</h4>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div> -->

      <?php
      // ===== Media section (雑誌・WEBメディア) =====
      $theme_uri = get_stylesheet_directory_uri();
      ?>
      <section class="media-section" aria-labelledby="media-title">
        <div class="bg311301" style="text-align:center;">
          <div class="container" style="margin-top:0;">
            <div class="row pt30">
              <div class="col-12 tit js-animation">
                <img
                  src="<?php echo esc_url($theme_uri . '/assets/static/img/media.webp'); ?>"
                  alt="<?php esc_attr_e('Media', 'evigym'); ?>"
                  width="395" height="145"
                  decoding="async" loading="lazy">
                <h2 id="media-title" class="white">雑誌・WEBメディアに紹介されました！</h2>
                <hr class="white">
              </div>
            </div>
          </div>
        </div>

        <div class="container" style="text-align:center;">
          <div class="row mt30">
            <div class="col-12 mb20">
              <p>銀座Hanako / ＠BAILA / 日経トレンディにご掲載いただきました。</p>
            </div>

            <div class="col-12 col-md-12">
              <div class="row">
                <!-- Hanako -->
                <div class="col-6 col-md-4 mb30">
                  <img
                    src="<?php echo esc_url($theme_uri . '/assets/static/img/top/mag-hanako.webp'); ?>"
                    alt="Hanako"
                    class="Hanako"
                    width="380" height="520"
                    decoding="async" loading="lazy">
                </div>

                <!-- @BAILA -->
                <div class="col-6 col-md-4 mb30">
                  <img
                    src="<?php echo esc_url($theme_uri . '/assets/static/img/top/mag-baila.webp'); ?>"
                    alt="@BAILA"
                    class="baila"
                    width="380" height="520"
                    decoding="async" loading="lazy">
                </div>

                <!-- 日経トレンディ -->
                <div class="col-6 col-md-4 mb30">
                  <img
                    src="<?php echo esc_url($theme_uri . '/assets/static/img/top/nikkei-trendy.webp'); ?>"
                    alt="日経トレンディ"
                    class="nikkei-trendy"
                    width="668" height="899"
                    decoding="async" loading="lazy">
                </div>

                <!-- 体験レポート -->
                <div class="col-10 col-md-8 imgWrap" style="margin:0 auto; text-align:center;">
                  <p>- eviGymの体験レポートはこちら！ -</p>
                  <a href="https://vells.jp/taiken-evigym" target="_blank" rel="noopener">
                    <img
                      src="<?php echo esc_url($theme_uri . '/assets/static/img/top/mag-vells.webp'); ?>"
                      alt="Vells 体験レポート"
                      class="vells"
                      width="538" height="474"
                      decoding="async" loading="lazy">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="Trainers" class="mb-0">
        <div class="container">
          <div class="row">
            <div class="col-12 tit js-animation" align="center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/interview.webp" alt="Interview" width="410" height="150">
              <h2>お客様インタビュー</h2>
              <hr class="int-hr">
            </div>
          </div>
        </div>

        <?php
        $interviews = new WP_Query([
          'post_type'      => 'interview',
          'posts_per_page' => 8,
          'orderby'        => 'date',
          'order'          => 'DESC',
        ]);
        ?>
        <div class="point4-slider-wrapper container interview-list">
          <div class="point4Slide2">
            <div class="point4-slider swiper-wrapper">
              <?php
              $item_count = 0;
              if ($interviews->have_posts()) :
                while ($interviews->have_posts()) :
                  $interviews->the_post();
                  $item_count++;
                  if ($item_count > 9) break;

                  // SCF フィールドの取得
                  $interview_first_name = SCF::get('interview_name_first');
                  $display_name = !empty($interview_first_name) ? $interview_first_name . 'さん' : get_the_title();

                  // スラッグ形式のURL (Laravelと同じ構造)
                  $slug = get_post_field('post_name', get_the_ID());
                  $url  = home_url('/interview/' . $slug . '/');
              ?>
                  <div class="swiper-slide point4-slider_item">
                    <div class="col-md-12 col-12 ml0 mr0 tabCntItem all">
                      <a href="<?php echo esc_url($url); ?>">
                        <p class="img">
                          <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium_large', ['alt' => esc_attr(get_the_title())]); ?>
                          <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/static/img/noimage-768x512.png"
                              alt="<?php echo esc_attr(get_the_title()); ?>">
                          <?php endif; ?>
                        </p>
                      </a>
                      <p class="name"><?php echo esc_html($display_name); ?></p>
                      <p class="title"><?php echo esc_html(get_the_title()); ?></p>
                      <?php /*
                      <p class="txtc my-2">
                        <a href="<?php echo esc_url( $url ); ?>" class="btn">
                          <?php echo esc_html( $display_name ); ?>のインタビューはコチラ >></a>
                      </p>
                      */ ?>
                    </div>
                  </div>
                <?php
                endwhile;
              else :
                ?>
                <p class="text-center">インタビュー記事はありません。</p>
              <?php
              endif;
              wp_reset_postdata();
              ?>
            </div>
          </div>
          <div class="controll">
            <a class="prev"></a>
            <a class="next"></a>
          </div>
        </div>

        <div class="container interview-list">
          <div class="row">
            <div class="col-12 col-sm-10">
              <div class="mt20 img-btn imgWrap sp-sml">
                <a class="custom-button int-btn d-block" href="<?php echo esc_url(home_url('/interview/')); ?>" style="max-width: 440px;">
                  <span class="custom-button-inner" style="font-size: 22px;">お客様の声一覧はこちら</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div id="storeBlogs-top" class="storeBlogs-top">
        <section id="StoreBlogs">
          <div class="container">
            <div class="row">
              <div class="col-12 tit js-animation" align="center">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/blog.webp" alt="Stores">
                <h2>トレーナーブログ</h2>
                <hr>
              </div>
            </div>

            <?php
            $blogs = new WP_Query([
              'post_type'      => 'gym_blog',
              'posts_per_page' => 6,
              'orderby'        => 'date',
              'order'          => 'DESC',
            ]);
            ?>
            <div class="StoreBolg_slide_content storesBolg_slider">
              <?php if ($blogs->have_posts()) :
                while ($blogs->have_posts()) :
                  $blogs->the_post();

                  // 投稿に紐づく「投稿店舗」タクソノミー（gym_blog_taxonomy）を取得
                  $terms = get_the_terms(get_the_ID(), 'gym_blog_taxonomy');
                  $term_slug = $terms && ! is_wp_error($terms) ? $terms[0]->slug : '';
                  $term_name = $terms && ! is_wp_error($terms) ? $terms[0]->name : '';

                  // タームが設定されていない投稿はスキップ（Laravel側で @if(strlen(...))>0 に対応）
                  if (empty($term_slug)) {
                    continue;
                  }

                  // Laravel側のURL構造に合わせる（/blog/{term_slug}/{post_id}）
                  $custom_link = home_url('/blog/' . $term_slug . '/' . get_the_ID() . '/');
              ?>
                  <div class="swiper-slide">
                    <div class="row name">
                      <div class="col-11 blog-list_item">
                        <a href="<?php echo esc_url($custom_link); ?>">
                          <div class="blog-list_item-text">
                            <div class="blog-list_item-info">
                              <span class="blog-list_item-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></span>
                              <span class="blog-list_item-store"><?php echo esc_html($term_name); ?></span>
                            </div>
                            <div class="blog-list_item-title"><?php the_title(); ?></div>
                            <div class="blog-list_item-excerpt">
                              <?php
                              $excerpt = get_the_excerpt();
                              if (! empty($excerpt)) {
                                echo wp_kses_post(wp_trim_words($excerpt, 36, '…'));
                              }
                              ?>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                <?php
                endwhile;
              else :
                ?>
                <p class="text-center">ブログ記事がありません</p>
              <?php endif;
              wp_reset_postdata(); ?>
            </div>

            <div class="row mt20 mb-0">
              <div class="col-12" align="center">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn">
                  <h4>トレーナーブログはコチラ＞＞</h4>
                </a>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section id="News" class="bg-color mt0 mb0">
        <div class="container">
          <div class="row mb40">
            <div class="col-12 tit js-animation" align="center">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/news.webp" alt="news" width="410" height="140">
              <h2>エビジムに関するお知らせ</h2>
              <hr>
            </div>
            <div class="col-12 col-md-12">
              <ul>
                <?php
                $news = new WP_Query([
                  'post_type'      => 'news',
                  'posts_per_page' => 2,
                  'orderby'        => 'date',
                  'order'          => 'DESC',
                ]);

                if ($news->have_posts()) :
                  while ($news->have_posts()) : $news->the_post(); ?>
                    <li>
                      <a href="<?php echo esc_url(get_permalink()); ?>">
                        <p class="date"><?php echo esc_html(get_the_date('Y/m/d')); ?></p>
                        <h6><?php the_title(); ?></h6>
                        <p><?php echo wp_kses_post(get_the_excerpt()); ?></p>
                      </a>
                    </li>
                  <?php endwhile;
                else : ?>
                  <li>お知らせは現在ありません。</li>
                <?php endif;
                wp_reset_postdata(); ?>
              </ul>

              <div class="mt20 img-btn imgWrap" align="center">
                <a href="<?php echo esc_url(home_url('/news/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/btn-readmore-off.svg" alt="Read more"></a>
              </div>
            </div>
          </div>
        </div>
      </section>

    </div><!-- /.bgffffff -->
  </div><!-- /.stk-up -->
</main>

<?php get_footer(); ?>