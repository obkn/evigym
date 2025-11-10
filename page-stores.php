<?php

/**
 * Template Name: Stores Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">
  <div class="mainvisual mv04"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">店舗について</a></li>
    </ul>
  </div>

  <section id="Stores">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/stores.webp'); ?>" alt="Stores">
        </div>
      </div>

      <?php
      $stores = new WP_Query([
        'post_type'      => 'gym',
        'posts_per_page' => -1,
        'orderby'        => 'date',
        'order'          => 'DESC',
      ]);
      ?>

      <div class="slider-disabled">
        <?php if ($stores->have_posts()) : ?>
          <?php while ($stores->have_posts()) : $stores->the_post(); ?>
            <?php
            $post_id = get_the_ID();
            $slug    = get_post_field('post_name', $post_id);

            $thumb = get_the_post_thumbnail_url($post_id, 'medium');

            $pr_text            = get_post_meta($post_id, 'salon_pr_text', false);
            $info_address       = get_post_meta($post_id, 'info_address', false);
            $info_tel           = get_post_meta($post_id, 'info_tel', false);
            $info_opening_hours = get_post_meta($post_id, 'info_opening_hours', false);
            $info_regular_holiday = get_post_meta($post_id, 'info_regular_holiday', false);
            $access_url         = get_post_meta($post_id, 'access_url', false);
            $access_label       = get_post_meta($post_id, 'access_label', false);

            $to_array = function ($v) {
              if (is_array($v)) return $v;
              if ($v === '' || $v === null) return [];
              return [$v];
            };
            $pr_text            = $to_array($pr_text);
            $info_address       = $to_array($info_address);
            $info_tel           = $to_array($info_tel);
            $info_opening_hours = $to_array($info_opening_hours);
            $info_regular_holiday = $to_array($info_regular_holiday);
            $access_url         = $to_array($access_url);
            $access_label       = $to_array($access_label);
            ?>
            <div class="swiper-slide-disabled">
              <div class="row name">
                <div class="col-9 col-sm-5 imgWrap">
                  <a href="<?php echo esc_url('/stores/' . $slug); ?>">
                    <?php if ($thumb) : ?>
                      <img src="<?php echo esc_url($thumb); ?>" alt="">
                    <?php else : ?>
                      <img src="/img/no-img.webp" alt="">
                    <?php endif; ?>
                  </a>
                </div>
                <div class="col-11 col-sm-7">
                  <h3 class="mt10">
                    <a href="<?php echo esc_url('/stores/' . $slug); ?>">
                      <?php echo esc_html(get_the_title()); ?>
                    </a>
                  </h3>

                  <?php if (!empty($pr_text)) : ?>
                    <?php foreach ($pr_text as $text) : ?>
                      <p class="mb10"><?php echo esc_html($text); ?></p>
                    <?php endforeach; ?>
                  <?php endif; ?>

                  <p class="mb20">
                    <?php foreach ($info_address as $text) : ?>
                      住所：<?php echo esc_html($text); ?><br>
                    <?php endforeach; ?>

                    <?php foreach ($info_tel as $text) :
                      $tel_raw = (string)$text;
                      $tel_href = preg_replace('/\D+/', '', $tel_raw);
                    ?>
                      電話番号：<a href="tel:<?php echo esc_attr($tel_href); ?>"><?php echo esc_html($tel_raw); ?></a><br>
                    <?php endforeach; ?>

                    <?php foreach ($info_opening_hours as $text) : ?>
                      営業時間：<?php echo esc_html($text); ?><br>
                    <?php endforeach; ?>

                    <?php foreach ($info_regular_holiday as $text) : ?>
                      定休日：<?php echo esc_html($text); ?><br>
                    <?php endforeach; ?>

                    <?php
                    $count = max(count($access_url), count($access_label));
                    for ($i = 0; $i < $count; $i++) :
                      $url   = isset($access_url[$i]) ? $access_url[$i] : '';
                      $label = isset($access_label[$i]) ? $access_label[$i] : '';
                      if ($url === '' && $label === '') continue;
                    ?>
                      <a href="<?php echo esc_url($url); ?>" target="_blank" class="google-icon" rel="noopener">
                        <i class="google-icon"></i><?php echo esc_html($label ?: $url); ?>
                      </a>
                    <?php endfor; ?>
                  </p>

                  <a href="<?php echo esc_url('/stores/' . $slug); ?>" class="btn">MORE</a>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

</main>

<style>
  .swiper-slide .row {
    position: relative;
    z-index: 99;
  }
</style>

<?php get_footer(); ?>