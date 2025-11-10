<?php

/**
 * Template Name: HowTo Training (Single Post)
 * Description: 通常投稿を /howto-training/{slug}/ で表示するテンプレート
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">
  <!-- <div class="mainvisual mv08"></div> -->

  <?php
  if (have_posts()) :
    while (have_posts()) : the_post();

      // カテゴリ・タグ
      $cats = get_the_category();
      $primary_cat = (!empty($cats) && !is_wp_error($cats)) ? $cats[0] : null;
      $tags = get_the_tags();
  ?>

      <div id="st-ami">
        <div id="wrapper">
          <div id="wrapper-in">
            <div id="content-w">
              <div id="content" class="clearfix">
                <div id="contentInner">

                  <div class="st-main st-one-column">

                    <!-- ぱんくず（Blade準拠の schema.org 構造） -->
                    <section id="breadcrumb" class="mt-5">
                      <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                          <a href="/" itemprop="item"><span itemprop="name">パーソナルジムeviGym</span></a> >
                          <meta itemprop="position" content="1" />
                        </li>
                        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                          <a href="/howto-training" itemprop="item"><span itemprop="name">How To Training</span></a> >
                          <meta itemprop="position" content="2" />
                        </li>
                        <?php if ($primary_cat): ?>
                          <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                            <a href="<?php echo esc_attr('/howto-training/category/' . $primary_cat->slug . '/'); ?>" itemprop="item">
                              <span itemprop="name"><?php echo esc_html($primary_cat->name); ?></span>
                            </a> &gt;
                            <meta itemprop="position" content="3" />
                          </li>
                        <?php endif; ?>
                      </ol>
                    </section>
                    <!--/ ぱんくず -->

                    <div id="post-<?php the_ID(); ?>" <?php post_class('st-post'); ?>>
                      <article>
                        <!-- カテゴリラベル -->
                        <?php if ($primary_cat): ?>
                          <p class="st-catgroup">
                            <a href="<?php echo esc_attr('/howto-training/category/' . $primary_cat->slug . '/'); ?>" title="<?php echo esc_attr($primary_cat->name); ?>" rel="category tag">
                              <span class="catname"><?php echo esc_html($primary_cat->name); ?></span>
                            </a>
                          </p>
                        <?php endif; ?>

                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <p><i class="far fa-clock fa-fw ml-1"></i> <?php echo esc_html(get_the_date('Y年m月d日')); ?></p>

                        <div class="mainbox">
                          <div class="entry-content">
                            <?php the_content(); ?>
                          </div>
                          <div class="adbox"></div>
                        </div>

                        <!-- カテゴリ・タグ表記 -->
                        <p class="tagst">
                          <?php if (!empty($cats)): ?>
                            <i class="fa fa-folder-open-o" aria-hidden="true"></i> -
                            <?php
                            $out = [];
                            foreach ($cats as $c) {
                              $out[] = sprintf(
                                '<a href="%s" rel="category tag">%s</a>',
                                esc_attr('/howto-training/category/' . $c->slug . '/'),
                                esc_html($c->name)
                              );
                            }
                            echo implode(', ', $out);
                            ?>
                            <br />
                          <?php endif; ?>

                          <?php if ($tags): ?>
                            <i class="fa fa-tags"></i> -
                            <?php
                            $tout = [];
                            foreach ($tags as $t) {
                              $tout[] = sprintf(
                                '<a href="%s" rel="tag">%s</a>',
                                esc_attr('/howto-training/tag/' . $t->slug . '/'),
                                esc_html($t->name)
                              );
                            }
                            echo implode(', ', $tout);
                            ?>
                          <?php endif; ?>
                        </p>
                      </article>

                      <!-- 関連記事 -->
                      <div class="st-aside">
                        <p class="point"><span class="point-in">関連記事</span></p>
                        <div class="kanren">
                          <?php
                          if (!empty($cats)) {
                            $cat_ids = wp_list_pluck($cats, 'term_id');
                            $rel_q = new WP_Query([
                              'post_type'           => 'post',
                              'posts_per_page'      => 5,
                              'post__not_in'        => [get_the_ID()],
                              'ignore_sticky_posts' => true,
                              'category__in'        => $cat_ids,
                              'orderby'             => 'rand',
                            ]);

                            if ($rel_q->have_posts()) {
                              while ($rel_q->have_posts()) {
                                $rel_q->the_post();
                                $thumb_id = get_post_thumbnail_id();
                                $src = $thumb_id ? wp_get_attachment_image_src($thumb_id, 'thumbnail') : null;
                                $img_src = $src ? $src[0] : ($static . '/no-img.webp'); // フォールバック
                                $img_w   = $src ? intval($src[1]) : 150;
                                $img_h   = $src ? intval($src[2]) : 150;

                                // パーマリンクのスラッグ部を抽出して直書きURLに
                                $rel_slug = $post->post_name;
                                $rel_url  = '/howto-training/' . $rel_slug . '/';
                          ?>
                                <dl class="clearfix">
                                  <dt>
                                    <a href="<?php echo esc_attr($rel_url); ?>">
                                      <img
                                        width="<?php echo esc_attr($img_w); ?>"
                                        height="<?php echo esc_attr($img_h); ?>"
                                        src="<?php echo esc_url($img_src); ?>"
                                        class="attachment-thumbnail size-thumbnail wp-post-image"
                                        alt="<?php echo esc_attr(get_the_title()); ?>" />
                                    </a>
                                  </dt>
                                  <dd>
                                    <p class="kanren-t">
                                      <a href="<?php echo esc_attr($rel_url); ?>">
                                        <?php the_title(); ?>
                                      </a>
                                    </p>
                                    <div class="smanone2">
                                      <p><?php echo esc_html(wp_strip_all_tags(get_the_excerpt(), true)); ?></p>
                                    </div>
                                  </dd>
                                </dl>
                          <?php
                              }
                              wp_reset_postdata();
                            }
                          }
                          ?>
                        </div>

                        <!-- 前後ナビ -->
                        <div class="p-navi clearfix">
                          <dl>
                            <?php
                            $prev = get_adjacent_post(false, '', true);
                            $next = get_adjacent_post(false, '', false);
                            if ($prev instanceof WP_Post):
                              $prev_url = '/howto-training/' . $prev->post_name . '/';
                            ?>
                              <dt>PREV</dt>
                              <dd><a href="<?php echo esc_attr($prev_url); ?>"><?php echo esc_html(get_the_title($prev)); ?></a></dd>
                            <?php endif; ?>

                            <?php if ($next instanceof WP_Post):
                              $next_url = '/howto-training/' . $next->post_name . '/';
                            ?>
                              <dt>NEXT</dt>
                              <dd><a href="<?php echo esc_attr($next_url); ?>"><?php echo esc_html(get_the_title($next)); ?></a></dd>
                            <?php endif; ?>
                          </dl>
                        </div>
                      </div>

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

  <?php
    endwhile;
  endif;
  ?>
</main>

<?php get_footer(); ?>