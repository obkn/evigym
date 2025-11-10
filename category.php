<?php

/**
 * Template Name: HowToTraining Category
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
$cat    = get_queried_object();

global $wp_query;
$current = max(1, get_query_var('paged'));
$total   = (int) $wp_query->max_num_pages;

$cat_slug = isset($cat->slug) ? $cat->slug : '';
$base_url = '/howto-training/category/' . $cat_slug;
?>

<main id="main">
  <section class="howto-training">
    <div class="container">

      <div id="contentInner" class="container px-0">
        <div class="st-main px-0">

          <section id="breadcrumb" class="bc-top-cat">
            <ol itemscope itemtype="http://schema.org/BreadcrumbList">
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/" itemprop="item"><span itemprop="name">ホーム</span></a> >
                <meta itemprop="position" content="1" />
              </li>
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="/howto-training" itemprop="item"><span itemprop="name">How To Training</span></a> >
                <meta itemprop="position" content="2" />
              </li>
              <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php echo esc_attr($base_url); ?>" itemprop="item">
                  <span itemprop="name"><?php echo esc_html($cat->name ?? ''); ?></span>
                </a> &gt;
                <meta itemprop="position" content="3" />
              </li>
            </ol>
          </section>

          <article>
            <h1 class="entry-title">「 <?php echo esc_html($cat->name ?? ''); ?> 」 一覧 </h1>
            <div class="kanren">
              <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                  <?php
                  $pid   = get_the_ID();
                  $slug  = get_post_field('post_name', $pid);
                  $plink = '/howto-training/' . $slug . '/'; // 直書きリンク
                  ?>
                  <dl class="clearfix">
                    <dt>
                      <a href="<?php echo esc_attr($plink); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                          <?php echo get_the_post_thumbnail($pid, 'thumbnail', [
                            'alt'   => get_the_title($pid),
                            'title' => get_the_title($pid),
                            'width' => 100,
                            'height' => 100,
                          ]); ?>
                        <?php else : ?>
                          <img src="<?php echo esc_url($static . '/no-img.webp'); ?>" alt="no image" title="no image" width="100" height="100" />
                        <?php endif; ?>
                      </a>
                    </dt>
                    <dd>
                      <p class="kanren-t">
                        <a href="<?php echo esc_attr($plink); ?>"><?php the_title(); ?></a>
                      </p>
                      <div class="smanone2">
                        <?php the_excerpt(); ?>
                      </div>
                    </dd>
                  </dl>
                <?php endwhile; ?>
              <?php else : ?>
                <p>記事が見つかりませんでした。</p>
              <?php endif; ?>
            </div>

            <div class="st-pagelink">
              <?php if ($total > 1) : ?>
                <?php if ($current > 1) : ?>
                  <a class="prev page-numbers" href="<?php echo esc_attr($base_url . '?paged=' . ($current - 1)); ?>">&laquo; 前へ</a>
                <?php endif; ?>

                <?php for ($i = 1; $i <= $total; $i++) : ?>
                  <?php
                  $is_current = ($i === $current);
                  $href = $is_current ? '' : $base_url . '?paged=' . $i;
                  $cls  = 'page-numbers' . ($is_current ? ' current' : '');
                  ?>
                  <a class="<?php echo esc_attr($cls); ?>" <?php echo $is_current ? 'aria-current="page" disabled' : 'href="' . esc_attr($href) . '"'; ?>>
                    <?php echo $i; ?>
                  </a>
                <?php endfor; ?>

                <?php if ($current < $total) : ?>
                  <a class="next page-numbers" href="<?php echo esc_attr($base_url . '?paged=' . ($current + 1)); ?>">次へ &raquo;</a>
                <?php endif; ?>
              <?php endif; ?>
            </div>
          </article>

        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>