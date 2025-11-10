<?php

/**
 * Template Name: How To Training Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">

  <div class="container">
    <ul id="breadcrumbs-one" class="bc-top">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">How To Training</a></li>
    </ul>
  </div>

  <section class="howto-training">
    <div class="container">

      <div id="contentInner" class="container">
        <div class="st-main">

          <div class="row">
            <div class="col-12 tit js-animation is-show text-center">
              <img src="<?php echo $static; ?>/howto-training/videos-2.webp" alt="Videos">
              <h2>正しいトレーニング方法を動画でご紹介。</h2>
              <hr>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-center top">
              <h2>鍛えたい場所から探す</h2>
              <?php
              $categories = get_terms([
                'taxonomy'   => 'category',
                'hide_empty' => false,
                'orderby'    => 'id',
                'order'      => 'ASC',
              ]);

              if (!empty($categories) && !is_wp_error($categories)) :
                foreach ($categories as $category) :
                  $link = get_term_link($category);
                  echo '<a class="category-badge" href="' . esc_url($link) . '">' . esc_html($category->name) . '</a>';
                endforeach;
              endif;
              ?>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-center top">
              <h2>目的から探す</h2>
              <?php
              $tags = get_terms([
                'taxonomy'   => 'post_tag',
                'hide_empty' => false,
                'orderby'    => 'name',
                'order'      => 'ASC',
              ]);

              if (!empty($tags) && !is_wp_error($tags)) :
                foreach ($tags as $tag) :
                  $link = get_term_link($tag);
                  echo '<a class="category-badge" href="' . esc_url($link) . '">' . esc_html($tag->name) . '</a>';
                endforeach;
              endif;
              ?>
            </div>
          </div>

          <article>
            <div class="st-aside">
              <div class="kanren">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

                $args = array(
                  'post_type'      => 'post',        // ← 通常の投稿
                  'posts_per_page' => 10,            // 1ページあたり10件
                  'paged'          => $paged,
                  'orderby'        => 'date',        // 投稿日時順
                  'order'          => 'DESC',        // 新しい順
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                  while ($query->have_posts()) : $query->the_post();

                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                    if (!$thumb) {
                      $thumb = get_template_directory_uri() . '/assets/static/img/no-img.webp';
                    }
                ?>
                    <dl class="clearfix">
                      <dt>
                        <a href="<?php the_permalink(); ?>">
                          <img src="<?php echo esc_url($thumb); ?>"
                            alt="<?php the_title_attribute(); ?>"
                            width="100"
                            height="100">
                        </a>
                      </dt>
                      <dd>
                        <p class="kanren-t">
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        <div class="smanone2">
                          <?php the_excerpt(); ?>
                        </div>
                      </dd>
                    </dl>
                <?php
                  endwhile;
                  wp_reset_postdata();
                else :
                  echo '<p>記事が見つかりませんでした。</p>';
                endif;
                ?>
              </div>

              <div class="st-pagelink">
                <?php
                $current = isset($_GET['page']) ? max(1, (int) $_GET['page']) : max(1, get_query_var('paged'));

                if (isset($query) && $query instanceof WP_Query) {
                  $total = (int) $query->max_num_pages;
                } else {
                  global $wp_query;
                  $total = (int) $wp_query->max_num_pages;
                }

                if ($total > 1) {
                  if (isset($category) && $category instanceof WP_Term) {
                    $base_url = get_term_link($category);
                  } elseif (is_category()) {
                    $base_url = get_term_link(get_queried_object());
                  } else {
                    $base_url = home_url('/howto-training');
                  }

                  if ($current > 1) {
                    $prev = $current - 1;
                    echo '<a class="prev page-numbers" href="' . esc_url(add_query_arg('page', $prev, $base_url)) . '">&laquo; 前へ</a>';
                  }

                  for ($i = 1; $i <= $total; $i++) {
                    $is_current = ($current === $i);
                    $class = 'page-numbers' . ($is_current ? ' current' : '');
                    $attrs = $is_current ? ' aria-current="page" disabled' : '';
                    $href  = $is_current ? '' : ' href="' . esc_url(add_query_arg('page', $i, $base_url)) . '"';
                    echo '<a class="' . esc_attr($class) . '"' . $attrs . $href . '>' . esc_html($i) . '</a>';
                  }

                  if ($current < $total) {
                    $next = $current + 1;
                    echo '<a class="next page-numbers" href="' . esc_url(add_query_arg('page', $next, $base_url)) . '">次へ &raquo;</a>';
                  }
                }
                ?>
              </div>
            </div>
          </article>

        </div><!-- /.st-main -->
      </div><!-- /#contentInner -->

    </div><!-- /.container -->
  </section>

</main>

<?php get_footer(); ?>