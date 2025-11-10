<?php

/**
 * Single: trainer
 * ※ single-trainer.php で自動適用
 */
get_header();
$static  = get_template_directory_uri() . '/assets/static/img';
$post_id = get_queried_object_id();

/*
 * スタッフ種別（SCF）: staff_type = 'trainer' or 'staff'
*/
$role_raw = null;
if (class_exists('SCF')) {
  $role_raw = SCF::get('staff_type', $post_id);
  if (is_array($role_raw)) $role_raw = reset($role_raw);
} else {
  $role_raw = get_post_meta($post_id, 'staff_type', true);
}
$role_raw = is_string($role_raw) ? strtolower(trim($role_raw)) : '';

$role       = (in_array($role_raw, ['trainer', 'staff'], true)) ? $role_raw : null;
$is_trainer = ($role === 'trainer');
$is_staff   = ($role === 'staff');
if ($role === null) {
  $is_trainer = true;
  $is_staff   = false;
}

/*
 * ページ種別（SCF）: staff_page_type = short / long（既定: short）
*/
$page_type = 'short';
if (class_exists('SCF')) {
  $v = SCF::get('staff_page_type', $post_id);
  if (is_array($v)) $v = reset($v);
} else {
  $v = get_post_meta($post_id, 'staff_page_type', true);
}
$v = is_string($v) ? strtolower(trim($v)) : '';
if ($v === 'long' || $v === 'short') $page_type = $v;
?>

<main id="main">

  <div class="mainvisual mv02"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <?php if ($is_staff): ?>
        <!-- <li><a href="/staff">スタッフ</a></li> -->
      <?php else: ?>
        <li><a href="/trainers">トレーナー</a></li>
      <?php endif; ?>
      <li><a href="" class="current"><?php the_title(); ?></a></li>
    </ul>
  </div>

  <section id="Trainers">
    <div class="container">
      <div class="row">
        <?php
        if ($is_staff) {
          $img_src = $static . '/staff.webp';
          $img_alt = 'Staff';
          $title   = 'スタッフ紹介';
        } else {
          $img_src = $static . '/trainers.webp';
          $img_alt = 'Trainers';
          $title   = 'トレーナー紹介';
        }
        ?>
        <div class="col-12 tit" align="center">
          <img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr($img_alt); ?>">
          <h2><?php echo esc_html($title); ?></h2>
          <hr>
        </div>
      </div>
    </div>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php
        $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
        if (!$thumb) $thumb = $static . '/no-img.webp';

        $birthplace  = get_post_meta(get_the_ID(), 'staff_profile_birthplace', true);
        $personality = get_post_meta(get_the_ID(), 'staff_profile_personality', true);
        $hobby       = get_post_meta(get_the_ID(), 'staff_profile_hobby', true);
        $like        = get_post_meta(get_the_ID(), 'staff_profile_like', true);
        ?>

        <?php if ($page_type === 'short'): ?>
          <!-- 簡易ver -->
          <div class="container interview">
            <div class="row">
              <div class="col-11 col-sm-10">
                <div class="container profile">
                  <div class="row">
                    <div class="col-10 col-sm-5 col-lg-4 mb20">
                      <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>">
                    </div>
                    <div class="col-11 col-sm-7 col-lg-8">
                      <h2><?php the_title(); ?></h2>
                      <ul>
                        <?php if ($birthplace !== ''): ?>
                          <li><span class="question">出 身</span>：<span><?php echo esc_html($birthplace); ?></span></li>
                        <?php endif; ?>
                        <?php if ($personality !== ''): ?>
                          <li><span class="question">性 格</span>：<span><?php echo esc_html($personality); ?></span></li>
                        <?php endif; ?>
                        <?php if ($hobby !== ''): ?>
                          <li><span class="question">趣 味</span>：<span><?php echo esc_html($hobby); ?></span></li>
                        <?php endif; ?>
                        <?php if ($like !== ''): ?>
                          <li><span class="question">好きなトレーニング</span>：<span><?php echo esc_html($like); ?></span></li>
                        <?php endif; ?>
                      </ul>
                    </div>
                    <div class="col-11 col-sm-12">
                      <?php the_content(); ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        <?php else: // 詳細ver 
        ?>
          <?php
          $content = apply_filters('the_content', get_the_content());
          $has_interview_container = (strpos($content, 'container interview') !== false);
          ?>
          <?php if ($has_interview_container): ?>
            <?php echo $content; ?>
          <?php else: ?>
            <div class="container interview">
              <div class="row">
                <div class="col-11 col-sm-10">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endif; ?>

    <?php endwhile;
    endif; ?>

    <div class="container">
      <div class="col-12 col-sm-12" align="center">
        <hr class="mb30">
        <?php if ($is_staff): ?>
          <!-- <a href="/staff" class="btn">＜ スタッフ一覧に戻る</a> -->
        <?php else: ?>
          <a href="/trainers" class="btn">＜ トレーナー一覧に戻る</a>
        <?php endif; ?>
      </div>
    </div>

  </section>

</main>

<?php get_footer(); ?>