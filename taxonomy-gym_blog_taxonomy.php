<?php

/**
 * Template Name: 店舗別トレーナーブログ
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';

$term = get_queried_object();
$store_slug = $term->slug;
$store_name = $term->name;
?>

<main id="main">

  <div class="mainvisual mv04" style="height: 20px; background: none;"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="/stores/<?php echo esc_attr($store_slug); ?>"><?php echo esc_html($store_name); ?></a></li>
      <li><a class="current"><?php echo esc_html($store_name); ?> トレーナーブログ</a></li>
    </ul>
  </div>

  <section id="StoresBlog">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/blog.webp'); ?>" alt="Blog" />
          <h2>トレーナーブログ</h2>
          <hr>
        </div>
      </div>

      <div class="row blog-list">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-11 blog-list_item">
              <a href="/blog/<?php echo esc_attr($store_slug); ?>/<?php echo esc_attr(get_the_ID()); ?>">
                <div class="blog-list_item-img">
                  <?php
                  if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail', [
                      'alt' => esc_attr(get_the_title()),
                      'title' => esc_attr(get_the_title()),
                      'width' => 300,
                      'height' => 200,
                    ]);
                  } else {
                    echo '<img src="' . esc_url($static . '/no-img.webp') . '" alt="no image" title="no image" width="300" height="200" />';
                  }
                  ?>
                </div>

                <div class="blog-list_item-text">
                  <div class="blog-list_item-info">
                    <span class="blog-list_item-date"><?php echo get_the_date('Y.m.d'); ?></span>
                    <span class="blog-list_item-store"><?php echo esc_html($store_name); ?></span>
                  </div>
                  <div class="blog-list_item-title"><?php the_title(); ?></div>
                  <div class="blog-list_item-excerpt"><?php the_excerpt(); ?></div>
                </div>
              </a>
            </div>
          <?php endwhile;
        else : ?>
          <p>該当する記事はありません。</p>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-11">
          <div class="st-pagelink">
            <?php
            the_posts_pagination([
              'mid_size'  => 1,
              'prev_text' => '« 前へ',
              'next_text' => '次へ »',
            ]);
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php get_footer(); ?>