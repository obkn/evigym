<?php

/**
 * Template Name: Stores Single Page
 */
get_header();
$static  = get_template_directory_uri() . '/assets/static/img';
$post_id = get_queried_object_id();

/* -------------------------------------------------
 * 共同利用の許可タグ（functions.php のフィルタで iframe も含まれる）
 * -------------------------------------------------*/
$ALLOWED = wp_kses_allowed_html('post');

/* -------------------------------------------------
 * 小ヘルパー
 * -------------------------------------------------*/
// SCF配列を安全に取得（単一値も配列化）
$scf_arr = function (string $key) use ($post_id) {
  if (class_exists('SCF')) {
    $v = SCF::get($key, $post_id);
  } else {
    $v = get_post_meta($post_id, $key, false);
    if (empty($v)) $v = get_post_meta($post_id, $key, true);
  }
  if (is_array($v)) return array_values($v);
  return ($v !== '' && $v !== null) ? [$v] : [];
};

// 添付ID or 直URL → URLに正規化
$att_url = function ($raw, string $size = 'large') {
  if (is_numeric($raw)) {
    return wp_get_attachment_image_url((int)$raw, $size) ?: wp_get_attachment_url((int)$raw);
  }
  return is_string($raw) ? $raw : '';
};

/* -------------------------------------------------
 * SCFの主データ取得
 * -------------------------------------------------*/
$salon_title  = class_exists('SCF') ? SCF::get('salon_title', $post_id) : get_post_meta($post_id, 'salon_title', true);
$salon_slider = $scf_arr('salon_slider');          // group: salon_image, salon_image_caption
$store_appeal = $scf_arr('store_appeal');          // group: appeal_title, appeal_body

// 店長コメント（画像は単一、タイトル/本文/リンクは配列同インデックス）
$mgr_image_raw = class_exists('SCF') ? SCF::get('mgr_image', $post_id) : get_post_meta($post_id, 'mgr_image', true);
$mgr_image_url = $att_url($mgr_image_raw, 'medium') ?: ($static . '/no-img.webp');
$mgr_titles    = $scf_arr('mgr_comment_title');
$mgr_bodies    = $scf_arr('mgr_comment_body');
$mgr_links     = $scf_arr('mgr_link');

// 店舗情報
$thumb        = get_the_post_thumbnail_url($post_id, 'large') ?: ($static . '/no-img.webp');
$info_address = class_exists('SCF') ? SCF::get('info_address', $post_id) : get_post_meta($post_id, 'info_address', true);
$info_tels    = $scf_arr('info_tels');             // group: info_tel, info_tel_label
$info_opening = class_exists('SCF') ? SCF::get('info_opening_hours', $post_id) : get_post_meta($post_id, 'info_opening_hours', true);
$info_holiday = class_exists('SCF') ? SCF::get('info_regular_holiday', $post_id) : get_post_meta($post_id, 'info_regular_holiday', true);
$info_access  = $scf_arr('info_access');           // group: access_label, access_url

// Map
$googlemap       = $scf_arr('googlemap');
$google_map_link = $scf_arr('google_map_link');

// カスタムコンテンツ（本文に iframe など想定）
$cc01_titles = $scf_arr('custom_content01_title');
$cc01_bodies = $scf_arr('custom_content01_body');
$cc02_titles = $scf_arr('custom_content02_title');
$cc02_bodies = $scf_arr('custom_content02_body');

// FAQ
$store_faq = $scf_arr('store_faq');                // group: faq_question, faq_answer
?>

<main id="main">

  <div class="header-space"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="/stores">店舗について</a></li>
      <li><a href="" class="current"><?php the_title(); ?></a></li>
    </ul>
  </div>

  <section id="Stores" class="mb0">
    <div class="container">

      <div class="row">
        <div class="col-12 tit" align="center">
          <h2><?php the_title(); ?></h2>
          <hr>
        </div>
      </div>

      <!-- メインスライダー -->
      <div class="row">
        <div class="col-12">
          <?php if (!empty($salon_title)) : ?>
            <h3><?php echo esc_html($salon_title); ?></h3>
          <?php endif; ?>

          <div class="slider">
            <?php foreach ($salon_slider as $slide) :
              $img = $att_url($slide['salon_image'] ?? '');
              if (!$img) continue;
              $cap = (string)($slide['salon_image_caption'] ?? '');
            ?>
              <div class="swiper-slide">
                <img src="<?php echo esc_url($img); ?>" alt="">
                <?php if ($cap !== '') : ?>
                  <p><?php echo esc_html($cap); ?></p>
                <?php endif; ?>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <!-- アピールポイント -->
      <?php foreach ($store_appeal as $ap) :
        $t = (string)($ap['appeal_title'] ?? '');
        $b = (string)($ap['appeal_body']  ?? '');
        if ($t === '' && trim($b) === '') continue; ?>
        <div class="row name">
          <div class="col-11">
            <?php if ($t !== '') : ?><h4 class="line-none"><?php echo esc_html($t); ?></h4><?php endif; ?>
            <?php if ($b !== '') : ?><p><?php echo wp_kses($b, $ALLOWED); ?></p><?php endif; ?>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- 店長コメント -->
      <?php
      $mgr_max = max(count($mgr_titles), count($mgr_bodies), count($mgr_links));
      for ($i = 0; $i < $mgr_max; $i++) :
        $t = (string)($mgr_titles[$i] ?? '');
        $b = (string)($mgr_bodies[$i] ?? '');
        $l = (string)($mgr_links[$i]  ?? '');
        if ($t === '' && trim($b) === '' && $l === '') continue;
      ?>
        <div class="row name">
          <div class="col-7 col-sm-4 col-md-3 col-lg-3">
            <?php if ($l) : ?><a href="<?php echo esc_url($l); ?>"><?php endif; ?>
              <img src="<?php echo esc_url($mgr_image_url); ?>" class="staff-photo" alt="">
              <?php if ($l) : ?></a><?php endif; ?>
          </div>
          <div class="col-11 col-sm-7 col-md-8 col-lg-8">
            <br class="sp-none">
            <?php if ($t !== '') : ?><h2 class="line-none"><?php echo esc_html($t); ?></h2><?php endif; ?>
            <?php if ($b !== '') : ?><p><?php echo wp_kses($b, $ALLOWED); ?></p><?php endif; ?>
            <?php if ($l) : ?><a href="<?php echo esc_url($l); ?>" class="btn">MORE</a><?php endif; ?>
          </div>
        </div>
      <?php endfor; ?>

      <!-- 店舗情報 -->
      <div class="row name">
        <div class="col-7 col-sm-4 col-md-3 col-lg-3">
          <img src="<?php echo esc_url($thumb); ?>" class="staff-photo" alt="">
        </div>
        <div class="col-11 col-sm-7 col-md-8 col-lg-8">
          <h2><?php the_title(); ?></h2>
          <p class="mb20">
            <?php if ($info_address) : ?>
              住所：<?php echo esc_html($info_address); ?><br>
            <?php endif; ?>

            <?php foreach ($info_tels as $row) :
              $tel = trim((string)($row['info_tel'] ?? ''));
              if ($tel === '') continue; ?>
              電話番号：<a href="tel:<?php echo esc_attr($tel); ?>"><?php echo esc_html($tel); ?></a><br>
            <?php endforeach; ?>

            <?php if ($info_opening) : ?>
              営業時間：<?php echo esc_html($info_opening); ?><br>
            <?php endif; ?>

            <?php if ($info_holiday) : ?>
              定休日：<?php echo esc_html($info_holiday); ?><br>
            <?php endif; ?>

            <?php foreach ($info_access as $acc) :
              $label = (string)($acc['access_label'] ?? '');
              $url   = (string)($acc['access_url']  ?? '');
              if ($label === '' || $url === '') continue; ?>
              <a href="<?php echo esc_url($url); ?>" target="_blank" class="google-icon">
                <i class="google-icon"></i><?php echo esc_html($label); ?>
              </a>
            <?php endforeach; ?>
          </p>
        </div>
      </div>

      <!-- Google Map -->
      <?php foreach ($googlemap as $map) :
        $src = trim((string)$map);
        if ($src === '') continue; ?>
        <iframe src="<?php echo esc_url($src); ?>" width="100%" height="450" frameborder="0" style="border:0;" class="mb20" allowfullscreen></iframe>
      <?php endforeach; ?>

      <?php foreach ($google_map_link as $link) :
        $href = trim((string)$link);
        if ($href === '') continue; ?>
        <div class="txtc mb60"><a href="<?php echo esc_url($href); ?>" target="_blank"><u>Google Mapでみる ＞</u></a></div>
      <?php endforeach; ?>

    </div>
  </section>

  <!-- WP管理エリア①（料金プラン上エリア） -->
  <?php
  $show_cc01 = (count($cc01_titles) > 0 && strlen((string)($cc01_titles[0] ?? '')) > 0);
  if ($show_cc01) :
  ?>
    <section class="CustomContents01">
      <div class="container">
        <?php foreach ($cc01_titles as $i => $title) :
          $title = (string)($title ?? '');
          $body  = (string)($cc01_bodies[$i] ?? '');
          if ($title === '' && trim($body) === '') continue; ?>
          <div class="row name">
            <div class="col-11">
              <?php if ($title !== '') : ?><h2 class="line-none"><?php echo esc_html($title); ?></h2><?php endif; ?>
              <?php if ($body  !== '') : ?><?php echo wp_kses($body, $ALLOWED); ?><?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>

  <!-- ===================== -->
  <!-- Plan セクション -->
  <!-- ===================== -->
  <section id="Plan">
    <div class="container">
      <div class="row">
        <div class="col-12 tit" align="center">
          <img src="<?php echo esc_url($static . '/plan.webp'); ?>" alt="Plan">
          <h2>料金プラン紹介</h2>
          <hr>
          <p align="center" class="mt20 mb30">
            1回あたり6,050円～のプランから、<br class="pc-none">自身に合わせたプランをお選びいただけます。
          </p>
        </div>
        <div class="col-12 col-sm-6 mb40" align="center">
          <img src="https://media-evigym.heteml.net/wp-content/uploads/2025/01/25パーソナルジムeviGym-入会＆退会金0円.png"
            alt="入会金＆退会金無料 エビジムは入会金も退会金もすべて無料です。">
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <img src="https://media-evigym.heteml.net/wp-content/uploads/2025/01/25パーソナルジムeviGym料金プラン.png" alt="">
          <p class="font-110 mt10 d-none d-sm-none d-lg-block">
            ※１）セッション時間は着替え10分を含む60分間です。<br>
            ※２）割引率の％は、スポット利用料金￥11,000×回数との差<br>額での割引額を記載しています。
          </p>
          <p class="font-110 mt10 d-block d-lg-none">
            ※１）セッション時間は着替え10分を含む60分間です。<br>
            ※２）割引率の％は、スポット利用料金￥11,000×回数との差額での割引額を記載しています。
          </p>
        </div>
      </div>

      <div class="row">
        <div class="col-12" align="center">
          <section class="plan-slider-wrapper mt40" id="interview">
            <div class="title">
              <h3>お客様の通い方例</h3>
            </div>
            <div class="planSlider">
              <div class="plan-slider swiper-wrapper">
                <?php
                $plan_items = [
                  ['w' => 'training_schedule_A-2'],
                  ['w' => 'training_schedule_B-2'],
                  ['w' => 'training_schedule_C-2'],
                  ['w' => 'training_schedule_D-2'],
                  ['w' => 'training_schedule_E-2'],
                  ['w' => 'training_schedule_F-2'],
                  ['w' => 'training_schedule_G-2'],
                  ['w' => 'training_schedule_H-2'],
                  ['w' => 'training_schedule_I-2'],
                  ['w' => 'training_schedule_J-2'],
                  ['w' => 'training_schedule_K-2'],
                ];
                $links = ['/interview/012', '/interview/028', '/interview/036', '/interview/019', '/interview/007', '/interview/035', '/interview/018', '/interview/032', '/interview/013', '/interview/034', '/interview/025'];
                foreach ($plan_items as $i => $it) :
                  $base = $static . '/plan/' . $it['w'];
                  $href = $links[$i] ?? '#';
                ?>
                  <div class="plan-slider_item swiper-slide">
                    <a href="<?php echo esc_url($href); ?>">
                      <picture>
                        <source type="image/webp" srcset="<?php echo esc_url($base . '.webp'); ?>">
                        <img src="<?php echo esc_url($base . '.jpg'); ?>" alt="" width="1000" height="1165">
                      </picture>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
              <div class="controll"><a class="prev"></a><a class="next"></a></div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== -->
  <!-- Service セクション -->
  <!-- ===================== -->
  <section id="Service">
    <div class="container">
      <div class="row">
        <div class="col-11 mb40" align="center">
          <h2>サービス・特典</h2>
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
          <img src="<?php echo esc_url($static . '/plan/point1.webp'); ?>" class="トレーニング費用のみ・入会金無料" alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
          <img src="<?php echo esc_url($static . '/plan/point2.webp'); ?>" class="毎回もらえて嬉しい！お水1本無料" alt="">
        </div>
        <div class="col-6 col-sm-6 col-md-4 col-lg-4">
          <img src="<?php echo esc_url($static . '/plan/point3.webp'); ?>" class="荷物が減って快適！靴置き場無料" alt="">
        </div>

        <div class="col-11 pt30 pb30">
          <p>
            エビジムは入会金が無料です。<br>
            トレーニング費用しかかからないので、続けられるかどうか心配という方も安心して通い始めることができます。<br>
            またトレーニングごとにお水１本無料、トレーニング用の靴置き場も無料となっています。（破損、盗難等の管理はいたしかねます。）<br>
            必要なものはウエアのみ、最低限の荷物で気軽に通っていただけるように考えました。<br><br>
            アメニティーもご準備しております。<br>
            ・ボディシート・デオドラントスプレー・ティッシュ・綿棒・ヘアゴム
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- ===================== -->
  <!-- Interviews セクション -->
  <!-- ===================== -->
  <section id="Interviews" class="bg-color">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation is-show" align="center">
          <img src="<?php echo esc_url($static . '/interview.webp'); ?>" alt="Interview">
          <h2>お客様インタビュー</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-11 mb20" align="center">
          <p class="h3">eviGymをご利用頂くお客様の声</p>
        </div>
      </div>

      <div class="row">
        <div class="col-11 col-md-6">
          <a href="/interview/003"><img src="<?php echo esc_url($static . '/interview/003/image_08.webp'); ?>" class="mb10" alt=""></a>
        </div>
        <div class="col-11 col-md-6">
          <h3>今では妹も通っています</h3>
          <p class="mb20">腰も首も痛くて体力もなかった私が、パーソナルで<span class="bold"><u>姿勢改善して、体力ついたからヨガができる</u></span>ようになって、今ではヨガインストラクターを目指しているんです。今はもう辞められないです。笑</p>
          <p class="txtc"><a href="/interview/003" class="btn">智美さんのインタビューはコチラ >></a></p>
        </div>
      </div>

      <div class="row mt40">
        <div class="col-11 col-md-6">
          <a href="/interview/004"><img src="<?php echo esc_url($static . '/interview/004/image_02.webp'); ?>" class="mb10" alt=""></a>
        </div>
        <div class="col-11 col-md-6">
          <h3>週1回行かないと落ち着かない</h3>
          <p class="mb20">エビジムを続けてからは、<span class="bold"><u>20代のころよりもメンタルもフィジカルも良く</u></span>なっていて、年々良くなっている気がします。こんな良いサイクル、ずっと続けたいじゃないですか。</p>
          <p class="txtc"><a href="/interview/004" class="btn">健太郎さんのインタビューはコチラ >></a></p>
        </div>
      </div>

      <div class="row mt40">
        <div class="col-11 col-md-6">
          <a href="/interview/001"><img src="<?php echo esc_url($static . '/interview/umedasama_02.webp'); ?>" class="mb10" alt=""></a>
        </div>
        <div class="col-11 col-md-6">
          <h3>納得できる身体がキープできてる</h3>
          <p class="mb20">通いやすいとは言え、決して安価ではないパーソナルトレーニングの<span class="bold"><u>１回１回を大切にしてくれるトレーナー</u></span>さんが、エビジムにはいるところですかね。</p>
          <p class="txtc"><a href="/interview/001" class="btn">侑里さんのインタビューはコチラ >></a></p>
        </div>
      </div>

      <div class="row mt40">
        <div class="col-11 col-md-6">
          <a href="/interview/012"><img src="https://media-evigym.heteml.net/wp-content/uploads/2021/09/IMG_8730%E5%8A%A0%E5%B7%A5-scaled.jpg" class="mb10" alt=""></a>
        </div>
        <div class="col-11 col-md-6">
          <h3>運動で身体も気持ちも前向きに</h3>
          <p class="mb20">夫が肩いい感じだねとか、脚が引き締まったねとか、お尻が上がったねとか、ちょっとした変化を気付いてくれるんです。やっぱり一緒にいる主人にそういって褒めてもらえると嬉しいですね。<span class="bold"><u>身近な人が自分の変化に気付いてくれる</u></span>から、もっと頑張りたいなっていうモチベーションになっています。</p>
          <p class="txtc"><a href="/interview/012" class="btn">鎌田さんのインタビューはコチラ >></a></p>
        </div>
      </div>

      <div class="row mt40">
        <div class="col-11 col-md-6">
          <a href="/interview/011"><img src="https://media-evigym.heteml.net/wp-content/uploads/2021/08/IMG_5271-2048x1365.jpg" class="mb10" alt=""></a>
        </div>
        <div class="col-11 col-md-6">
          <h3>シックスパックもいけると思ってます</h3>
          <p class="mb20">周りからも「痩せたね」と言われて自信もついてきたし、スーツも好きなんで、<span class="bold"><u>これまで合わせられなかったものが着れる</u></span>ようになったり、<span class="bold"><u>着られなくなっていたものが着れる</u></span>ようになったりと目に見えてプラスな部分がでてきました。</p>
          <p class="txtc"><a href="/interview/011" class="btn">岡崎さんのインタビューはコチラ >></a></p>
        </div>
      </div>

      <div class="row mt40 mb40">
        <div class="col-12" align="center">
          <hr class="mb40">
          <a href="/interview/" class="btn">
            <h4>お客様の声の一覧はコチラ >></h4>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- WP管理エリア②（お客様インタビュー下エリア） -->
  <?php
  $show_cc02 = (count($cc02_titles) > 0 && strlen((string)($cc02_titles[0] ?? '')) > 0);
  if ($show_cc02) :
  ?>
    <section class="CustomContents02">
      <div class="container">
        <?php foreach ($cc02_titles as $i => $title) :
          $title = (string)($title ?? '');
          $body  = (string)($cc02_bodies[$i] ?? '');
          if ($title === '' && trim($body) === '') continue; ?>
          <div class="row name">
            <div class="col-11">
              <?php if ($title !== '') : ?><h2 class="line-none"><?php echo esc_html($title); ?></h2><?php endif; ?>
              <?php if ($body  !== '') : ?><?php echo wp_kses($body, $ALLOWED); ?><?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </section>
  <?php endif; ?>

  <!-- トレーナーブログ -->
  <?php
  $store_slug = get_post_field('post_name', $post_id);

  $store_term = get_term_by('slug', $store_slug, 'gym_blog_taxonomy');
  $tax_query  = [];

  if ($store_term && !is_wp_error($store_term)) {
    $tax_query[] = [
      'taxonomy' => 'gym_blog_taxonomy',
      'field'    => 'slug',
      'terms'    => [$store_slug],
    ];
  }

  $query_args = [
    'post_type'           => 'gym_blog',
    'posts_per_page'      => 8,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
    'tax_query'           => $tax_query ?: [],
  ];

  $storesBlogs = new WP_Query($query_args);
  ?>

  <?php if ($storesBlogs->have_posts()) : ?>
    <div id="storeBlogs-top" class="storeBlogs-top">
      <section id="StoreBlogs">
        <div class="container">
          <div class="StoreBolg_slide_content storesBolg_slider">
            <?php while ($storesBlogs->have_posts()) : $storesBlogs->the_post(); ?>
              <?php
              $pid       = get_the_ID();
              $thumb_url = get_the_post_thumbnail_url($pid, 'thumbnail');
              if (!$thumb_url) $thumb_url = $static . '/no-img.webp';

              $terms = get_the_terms($pid, 'gym_blog_taxonomy');
              $term  = (!empty($terms) && !is_wp_error($terms)) ? array_values($terms)[0] : null;
              $term_name = $term ? $term->name : '';
              $term_slug = $term ? $term->slug : $store_slug;

              $rel_link = '/blog/' . trim($term_slug, '/') . '/' . $pid;

              $date_str = get_the_date('Y.m.d', $pid);
              $title    = get_the_title($pid);

              if (has_excerpt($pid)) {
                $raw_excerpt = get_the_excerpt($pid);
              } else {
                $raw_excerpt = wp_trim_words(wp_strip_all_tags(get_the_content(null, false, $pid), true), 55, '…');
              }
              $excerpt_html = wpautop($raw_excerpt);
              ?>
              <div class="swiper-slide">
                <a href="<?php echo esc_url($rel_link); ?>">
                  <div class="row name blog-article_body">
                    <div class="col-1"></div>
                    <div class="col-10">
                      <h2>トレーナーブログ</h2>
                    </div>
                    <div class="col-1"></div>
                  </div>

                  <div class="row name">
                    <div class="col-1"></div>
                    <div class="col-10 blog-list_item-img">
                      <img src="<?php echo esc_url($thumb_url); ?>" alt="" width="300" height="200" />
                    </div>
                    <div class="col-1"></div>
                  </div>

                  <div class="row name mt-2">
                    <div class="col-11 blog-list_item">
                      <div class="blog-list_item-text">
                        <div class="blog-list_item-info">
                          <span class="blog-list_item-date"><?php echo esc_html($date_str); ?></span>
                          <?php if ($term_name !== '') : ?>
                            <span class="blog-list_item-store"><?php echo esc_html($term_name); ?></span>
                          <?php endif; ?>
                        </div>
                        <div class="blog-list_item-title"><?php echo esc_html($title); ?></div>
                        <div class="blog-list_item-excerpt"><?php echo wp_kses($excerpt_html, $ALLOWED); ?></div>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
          </div>
        </div>
      </section>
    </div>
  <?php endif; ?>

  <!-- オンライントレーニング -->
  <section id="Online-training">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation is-show" align="center">
          <img src="<?php echo esc_url($static . '/online.webp'); ?>" alt="online">
          <h2>オンライントレーニングについて</h2>
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-11 col-md-8">
          <a href="/online-training/">
            <img src="<?php echo esc_url($static . '/online-training/img-001.webp'); ?>" class="mb10" alt="">
          </a>
        </div>
        <div class="col-11 col-md-4">
          <p class="mb20">エビジムはお家から出ないでも運動を楽しめるようにオンライントレーニングサービスも充実しています。</p>
          <p class="txtc"><a href="/online-training/" class="btn">オンライントレーニング詳細 ＞</a></p>
        </div>
      </div>
    </div>
  </section>

  <!-- 店舗別よくある質問 -->
  <?php if (!empty($store_faq)) : ?>
    <section id="Store-faq">
      <div class="container">
        <div class="row">
          <div class="col-12 tit" align="center">
            <h2><?php the_title(); ?>によくある質問</h2>
            <hr>
          </div>
        </div>
        <div id="Questions" class="row">
          <div class="col-11 col-sm-9">
            <?php foreach ($store_faq as $faq) :
              $q = (string)($faq['faq_question'] ?? '');
              $a = (string)($faq['faq_answer']  ?? '');
              if ($q === '' && trim($a) === '') continue; ?>
              <dl class="mb-0 ml-0 panel">
                <dt class="title">
                  <h3><?php echo esc_html($q); ?></h3>
                </dt>
                <dd><?php echo wp_kses($a, $ALLOWED); ?></dd>
              </dl>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
  <?php endif; ?>

  <!-- ほかの店舗を見る -->
  <div class="bg-color" id="all-stores">
    <div class="container">
      <div class="row">
        <div class="col-10" align="center">
          <h2>ほかの店舗を見る</h2>
        </div>
      </div>

      <div class="row name">
        <?php
        $ptype = get_post_type($post_id);

        $stores_query = new WP_Query([
          'post_type'      => $ptype,
          'posts_per_page' => 6,
          'post__not_in'   => [$post_id],
          'no_found_rows'  => true,
        ]);

        if ($stores_query->have_posts()) :
          while ($stores_query->have_posts()) : $stores_query->the_post();

            $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'medium');
            if (!$thumb_url) $thumb_url = $static . '/no-img.webp';

            $slug       = get_post_field('post_name', get_the_ID());
            $ptype_obj  = get_post_type_object($ptype);
            $base_slug  = isset($ptype_obj->rewrite['slug']) ? '/' . trim($ptype_obj->rewrite['slug'], '/') : '';
            $rel_link   = $base_slug ? trailingslashit($base_slug . '/' . $slug) : wp_make_link_relative(get_permalink());
        ?>
            <div class="col-4 col-sm-2">
              <a href="<?php echo esc_url($rel_link); ?>">
                <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title_attribute(); ?>">
                <h3><?php the_title(); ?></h3>
              </a>
            </div>
        <?php
          endwhile;
          wp_reset_postdata();
        endif;
        ?>
      </div>

      <div class="mb20 mt10" align="center">
        <a href="/stores" class="btn">
          <h4>＜＜ 店舗一覧</h4>
        </a>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>