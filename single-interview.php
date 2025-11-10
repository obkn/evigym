<?php

/**
 * Template Name: Interview Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';

global $post;
$post_id = get_the_ID();

$name_first   = get_post_meta($post_id, 'interview_name_first', true);   // 例: 「智美」
$lead_text    = get_post_meta($post_id, 'interview_lead_text', true);    // リードHTML
$profile_html = get_post_meta($post_id, 'interview_profile', true);      // プロフィールHTML

$thumb_url = get_the_post_thumbnail_url($post_id, 'full');
if (!$thumb_url) {
  $thumb_url = $static . '/no-img.webp';
}

$slug = $post ? $post->post_name : '';
?>
<main id="main">

  <div class="mainvisual mv08"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルトレーニングジムeviGym</a></li>
      <li><a href="" class="current"><?php echo esc_html('vol.' . $slug); ?></a></li>
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

    <div class="container interview">
      <div class="row mb0">
        <div class="col-12">
          <h3><?php the_title(); ?></h3>
          <img src="<?php echo esc_url($thumb_url); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
          <?php if (! empty($name_first)) : ?>
            <h2 class="m10"><?php echo esc_html($name_first . 'さん'); ?></h2>
          <?php endif; ?>

          <?php if (! empty($lead_text)) : ?>
            <p><?php echo wp_kses_post($lead_text); ?></p>
          <?php endif; ?>
        </div>
      </div>

      <?php if (! empty($profile_html)) : ?>
        <?php echo wp_kses_post($profile_html); ?>
      <?php endif; ?>
    </div>

    <?php
    while (have_posts()) :
      the_post();
      the_content();
    endwhile;
    ?>
  </section>

  <section id="link">
    <div class="container">
      <div class="row">

        <div class="col-12 col-sm-6 tit js-animation is-show" align="center">
          <img src="<?php echo esc_url($static . '/trainers.webp'); ?>" alt="Trainers">
          <h2>トレーナー紹介</h2>
          <hr>
          <a href="/trainers" alt="トレーナー一覧">
            <img src="<?php echo esc_url($static . '/interview/img-trainers.webp'); ?>" alt="トレーナー一覧">
          </a>
          <br>
          <a href="/trainers" alt="トレーナー一覧" class="btn mt20 mb40">トレーナー一覧はこちら ＞</a>
        </div>

        <div class="col-12 col-sm-6 tit js-animation is-show" align="center">
          <img src="<?php echo esc_url($static . '/stores.webp'); ?>" alt="Stores">
          <h2>店舗一覧</h2>
          <hr>
          <a href="/stores" alt="店舗一覧">
            <img src="<?php echo esc_url($static . '/interview/img-stores.webp'); ?>" alt="店舗一覧">
          </a>
          <br>
          <a href="/stores" alt="店舗一覧" class="btn mt20">店舗一覧はこちら ＞</a>
        </div>

        <div class="col-12 js-animation is-show">
          <div class="mt40" align="center">
            <a href="/interview" class="btn">
              <h4>＜＜ お客様インタビュー一覧</h4>
            </a>
          </div>
        </div>

      </div>
    </div>
  </section>

</main>
<?php get_footer(); ?>