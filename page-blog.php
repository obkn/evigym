<?php

/**
 * Template Name: Trainer Blog Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';

$storesBlogs = new WP_Query([
  'post_type'           => 'gym_blog',
  'posts_per_page'      => 20,
  'ignore_sticky_posts' => true,
  'no_found_rows'       => true,
]);

$store_terms = get_terms([
  'taxonomy'   => 'gym_blog_taxonomy',
  'hide_empty' => true,
]);
?>

<main id="main">
  <div class="mainvisual mv04" style="height: 20px;background: none;"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">トレーナーブログ</a></li>
    </ul>
  </div>

  <section id="StoresBlog">
    <div class="container">
      <div class="row">
        <div class="col-12 tit js-animation" align="center">
          <img src="<?php echo esc_url($static . '/blog.webp'); ?>" alt="Blog">
          <h2>トレーナーブログ</h2>
          <hr>
        </div>
      </div>

      <div class="row blog-list">
        <?php if ($storesBlogs->have_posts()) : ?>
          <?php while ($storesBlogs->have_posts()) : $storesBlogs->the_post(); ?>
            <?php
            $pid       = get_the_ID();
            $thumb_url = get_the_post_thumbnail_url($pid, 'thumbnail');
            if (!$thumb_url) $thumb_url = $static . '/no-img.webp';

            $terms = get_the_terms($pid, 'gym_blog_taxonomy');
            $term  = (!empty($terms) && !is_wp_error($terms)) ? array_values($terms)[0] : null;
            $term_slug = $term ? $term->slug : '';
            $term_name = $term ? $term->name : '';

            $rel_link = $term_slug ? '/blog/' . $term_slug . '/' . $pid : wp_make_link_relative(get_permalink($pid));
            ?>
            <div class="col-11 blog-list_item">
              <a href="<?php echo esc_url($rel_link); ?>">
                <div class="blog-list_item-img">
                  <img src="<?php echo esc_url($thumb_url); ?>" alt="" width="300" height="200" />
                </div>
                <div class="blog-list_item-text">
                  <div class="blog-list_item-info">
                    <span class="blog-list_item-date"><?php echo esc_html(get_the_date('Y.m.d', $pid)); ?></span>
                    <?php if ($term_name !== '') : ?>
                      <span class="blog-list_item-store"><?php echo esc_html($term_name); ?></span>
                    <?php endif; ?>
                  </div>
                  <div class="blog-list_item-title"><?php the_title(); ?></div>
                  <div class="blog-list_item-excerpt">
                    <?php
                    if (has_excerpt($pid)) {
                      echo wp_kses_post(get_the_excerpt($pid));
                    } else {
                      echo wp_kses_post(wpautop(wp_trim_words(wp_strip_all_tags(get_the_content(null, false, $pid), true), 55, '…')));
                    }
                    ?>
                  </div>
                </div>
              </a>
            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>
        <?php else : ?>
          <div class="col-11">
            <p>ブログ記事が見つかりませんでした。</p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12 tit" align="center">
          <h2 class="m0">店舗一覧</h2>
          <hr>
        </div>
      </div>

      <div class="row mt20">
        <div class="col-11">
          <ul>
            <?php if (!is_wp_error($store_terms) && !empty($store_terms)) : ?>
              <?php foreach ($store_terms as $t) : ?>
                <li>
                  <p>
                    <a href="<?php echo esc_attr('/blog/' . $t->slug . '/'); ?>">
                      <?php echo esc_html($t->name); ?>トレーナーブログ
                    </a>
                  </p>
                </li>
              <?php endforeach; ?>
            <?php else : ?>
              <li>
                <p>店舗タグが見つかりませんでした。</p>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>