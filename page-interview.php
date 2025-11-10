<?php

/**
 * Template Name: Interview List Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';

$interviews = new WP_Query([
  'post_type'      => 'interview',
  'posts_per_page' => -1,
  'orderby'        => 'date',
  'order'          => 'DESC',
]);
?>

<main id="main">
  <div class="mainvisual mv11"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">お客様インタビュー</a></li>
    </ul>
  </div>

  <section id="Trainers">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/interview.webp'); ?>" alt="Interview">
          <h2>お客様インタビュー</h2>
          <hr>
        </div>
      </div>
    </div>

    <div class="container tabFilter-wrap">
      <div class="tabFilter" id="tabFilter" data-target="interviewList">
        <div class="tabFilterItem current"><a href="#" data-target="all">すべてのお客様</a></div>
        <div class="tabFilterItem"><a href="#" data-target="male">男性のお客様</a></div>
        <div class="tabFilterItem"><a href="#" data-target="female">女性のお客様</a></div>
      </div>
    </div>

    <div class="container interview-list">
      <div class="row mb0" id="interviewList">
        <?php if ($interviews->have_posts()) : ?>
          <?php while ($interviews->have_posts()) : $interviews->the_post(); ?>
            <?php
            $post_id      = get_the_ID();
            $slug         = get_post_field('post_name', $post_id);
            $name_first   = get_post_meta($post_id, 'interview_name_first', true);
            $profile_html = get_post_meta($post_id, 'interview_profile', true); // HTML想定
            $profile_text = wp_strip_all_tags($profile_html);
            // 「男性」が含まれていたら male、それ以外は female とする（空は female 扱い）
            $is_male      = (mb_strpos($profile_text, '男性') !== false);
            $gender_class = $is_male ? 'male' : 'female';

            $thumb = get_the_post_thumbnail_url($post_id, 'medium_large');
            if (!$thumb) $thumb = '/img/no-img.webp';
            ?>
            <div class="col-sm-4 col-12 ml0 mr0 tabCntItem <?php echo esc_attr($gender_class); ?>">
              <a href="<?php echo esc_url('/interview/' . $slug); ?>">
                <p class="img">
                  <img src="<?php echo esc_url($thumb); ?>" alt="">
                </p>
                <?php if (!empty($name_first)) : ?>
                  <p class="name"><?php echo esc_html($name_first); ?>さん</p>
                <?php endif; ?>
                <p class="title"><?php echo esc_html(get_the_title($post_id)); ?></p>
              </a>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>