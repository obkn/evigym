<?php

/**
 * Template Name: News Single Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">

  <div class="mainvisual mv00"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="/news">お知らせ</a></li>
      <li><a href="" class="current"><?php echo esc_html(get_the_title()); ?></a></li>
    </ul>
  </div>

  <section id="News">
    <div class="container">
      <div class="row">
        <div class="col-12 tit" align="center">
          <img src="<?php echo esc_url($static . '/news.webp'); ?>" alt="News">
          <hr>
          <h2><?php echo esc_html(get_the_title()); ?></h2>
        </div>
      </div>

      <div class="row mt20">
        <div class="col-11">
          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
              the_content();
            endwhile;
          endif;
          ?>
        </div>
      </div>
    </div>

    <?php
    // 前後記事（同一ポストタイプ内）の取得
    $prev_post = get_adjacent_post(false, '', true);
    $next_post = get_adjacent_post(false, '', false);

    // 直書きリンク用に slug を取り出す
    $prev_slug = ($prev_post instanceof WP_Post) ? $prev_post->post_name : null;
    $next_slug = ($next_post instanceof WP_Post) ? $next_post->post_name : null;
    ?>
    <div class="container">
      <div class="row mt60">
        <div class="col-4 col-sm-4 col-md-4">
          <?php if ($prev_slug) : ?>
            <a href="<?php echo esc_attr('/news/' . $prev_slug . '/'); ?>" class="btn">&lt; back</a>
          <?php endif; ?>
        </div>

        <div class="col-4 col-sm-4 col-md-4" align="center">
          <a href="/" class="btn">HOME</a>
        </div>

        <div class="col-4 col-sm-4 col-md-4" align="right">
          <?php if ($next_slug) : ?>
            <a href="<?php echo esc_attr('/news/' . $next_slug . '/'); ?>" class="btn">next &gt;</a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>