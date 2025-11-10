<?php

/**
 * Template Name: Trainer Blog Single
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';

// 現在の投稿情報
$post_id = get_the_ID();
$post_obj = get_post($post_id);

// 店舗ターム
$terms = get_the_terms($post_id, 'gym_blog_taxonomy');
$store_term = (!empty($terms) && !is_wp_error($terms)) ? array_values($terms)[0] : null;
$store_slug = $store_term ? $store_term->slug : '';
$store_name = $store_term ? $store_term->name : '';

// 表示用スラッグ
$display_slug = $post_obj ? urldecode($post_obj->post_name) : '';
?>

<main id="main">

  <div class="mainvisual mv04" style="height: 20px;background: none;"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <?php if ($store_slug): ?>
        <li>
          <a href="/blog/<?php echo esc_attr($store_slug); ?>/" alt="店舗ブログ">
            <?php echo esc_html($store_name); ?> トレーナーブログ
          </a>
        </li>
      <?php else: ?>
        <li><a href="/blog/" alt="店舗ブログ">トレーナーブログ</a></li>
      <?php endif; ?>
      <li><a href="" class="current"><?php echo esc_html($display_slug); ?></a></li>
    </ul>
  </div>

  <section id="StoresBlogArticle">
    <div class="blog-article">
      <div class="container">
        <div class="row">
          <div class="col-11 blog-article_header">
            <div class="blog-article_info">
              <span class="blog-article_date"><?php echo esc_html(get_the_date('Y.m.d', $post_id)); ?></span>
              <?php if ($store_name): ?>
                <span class="blog-article_store"><?php echo esc_html($store_name); ?></span>
              <?php endif; ?>
            </div>
            <h1 class="blog-article_title"><?php the_title(); ?></h1>
          </div>

          <div class="col-11 blog-article_body">
            <?php
            if (have_posts()):
              while (have_posts()): the_post();
                the_content();
              endwhile;
            endif;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>