<?php

/**
 * Template Name: Trainers Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';

/**
 * - staff_type = trainer
 * - trainer_genre = $genre_name
 */
function evg_render_trainers_by_genre($genre_name)
{
  $term = get_term_by('name', $genre_name, 'trainer_genre');
  if (!$term || is_wp_error($term)) return;

  $meta_key   = 'staff_type';
  $meta_value = 'trainer';

  $q = new WP_Query([
    'post_type'      => 'trainer',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_query'     => [[
      'key'   => $meta_key,
      'value' => $meta_value,
    ]],
    'tax_query'      => [[
      'taxonomy' => 'trainer_genre',
      'field'    => 'term_id',
      'terms'    => [$term->term_id],
      'operator' => 'IN',
    ]],
  ]);

  if ($q->have_posts()):
    while ($q->have_posts()): $q->the_post();
      $slug  = get_post_field('post_name', get_the_ID());
      $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
      $birth = get_post_meta(get_the_ID(), 'staff_profile_birthplace', true);
?>
      <div class="swiper-slide">
        <a href="<?php echo esc_url('/trainers/' . $slug); ?>">
          <?php if ($thumb): ?>
            <img src="<?php echo esc_url($thumb); ?>" alt="">
          <?php else: ?>
            <img src="/assets/static/img/no-img.webp" alt="">
          <?php endif; ?>
          <h4><?php the_title(); ?></h4>
          <?php if ($birth): ?>
            <h5>出身:<?php echo esc_html($birth); ?></h5>
          <?php endif; ?>
        </a>
        <a href="<?php echo esc_url('/trainers/' . $slug); ?>" class="btn">MORE</a>
      </div>
    <?php
    endwhile;
    wp_reset_postdata();
  endif;
}

/**
 * staff_type = staff
 */
function evg_render_staff_list()
{
  $meta_key   = 'staff_type';
  $meta_value = 'staff';

  $q = new WP_Query([
    'post_type'      => 'trainer',
    'posts_per_page' => -1,
    'orderby'        => 'date',
    'order'          => 'DESC',
    'meta_query'     => [[
      'key'   => $meta_key,
      'value' => $meta_value,
    ]],
  ]);

  if ($q->have_posts()):
    while ($q->have_posts()): $q->the_post();
      $slug  = get_post_field('post_name', get_the_ID());
      $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
    ?>
      <div class="swiper-slide">
        <a href="<?php echo esc_url('/staff/' . $slug); ?>">
          <?php if ($thumb): ?>
            <img src="<?php echo esc_url($thumb); ?>" alt="">
          <?php else: ?>
            <img src="/assets/static/img/no-img.webp" alt="">
          <?php endif; ?>
          <h4><?php the_title(); ?></h4>
        </a>
        <a href="<?php echo esc_url('/staff/' . $slug); ?>" class="btn">MORE</a>
      </div>
<?php
    endwhile;
    wp_reset_postdata();
  endif;
}
?>

<main id="main">
  <div class="mainvisual mv02"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">トレーナー</a></li>
    </ul>
  </div>

  <section id="Trainers">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/trainers.webp'); ?>" alt="Trainers">
          <h2>トレーナー紹介</h2>
          <hr>
        </div>
      </div>

      <!-- シェイプアップ -->
      <div class="row name">
        <div class="col-12 tr-title" align="center">
          <h2 class="mb10">シェイプアップが得意なトレーナー</h2>
          <p>美しいボディラインづくりや効率よく引き締めるトレーニングが得意なトレーナー</p>
        </div>
        <div class="col-11">
          <div class="traigners-top" align="center">
            <?php evg_render_trainers_by_genre('シェイプアップが得意なトレーナー'); ?>
          </div>
        </div>
      </div>

      <!-- 筋力アップ -->
      <div class="row name">
        <div class="col-12 tr-title" align="center">
          <h2 class="mb10">筋力アップが得意なトレーナー</h2>
          <p>ベンチプレスなどの重さ使ったトレーニングが得意なトレーナー</p>
        </div>
        <div class="col-11">
          <div class="traigners-top" align="center">
            <?php evg_render_trainers_by_genre('筋力アップが得意なトレーナー'); ?>
          </div>
        </div>
      </div>

      <!-- 身体のお悩み -->
      <div class="row name">
        <div class="col-12 tr-title" align="center">
          <h2 class="mb10">身体のお悩み解決が得意なトレーナー</h2>
          <p>肩こり・腰痛などの身体改善が得意なトレーナー</p>
        </div>
        <div class="col-11">
          <div class="traigners-top" align="center">
            <?php evg_render_trainers_by_genre('身体のお悩み解決が得意なトレーナー'); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- スタッフ紹介 -->
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/staff.webp'); ?>" alt="Staff">
          <h2>スタッフ紹介</h2>
          <hr>
        </div>
      </div>
      <div class="row name">
        <div class="col-11">
          <div class="traigners-top" align="center">
            <?php evg_render_staff_list(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>