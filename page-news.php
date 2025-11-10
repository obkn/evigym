<?php

/**
 * Template Name: News Page
 */
get_header();
$static = get_template_directory_uri() . '/assets/static/img';
?>

<main id="main">

  <div class="mainvisual mv00"></div>

  <div class="container">
    <ul id="breadcrumbs-one">
      <li><a href="/">パーソナルジムeviGym</a></li>
      <li><a href="" class="current">お知らせ</a></li>
    </ul>
  </div>

  <section id="News">
    <div class="container">

      <div class="row">
        <div class="col-12 tit" align="center">
          <img src="<?php echo $static; ?>/news.webp" alt="News">
          <h2 class="m0">お知らせ一覧</h2>
          <hr>
        </div>
      </div>

      <?php
      $page  = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
      $ppp   = 20;

      $args = array(
        'post_type'      => 'news',
        'posts_per_page' => $ppp,
        'paged'          => $page,
      );
      $news_query = new WP_Query($args);
      $total_pages = (int) $news_query->max_num_pages;
      ?>

      <div class="row mt20">
        <div class="col-11">
          <ul>
            <?php if ($news_query->have_posts()) : ?>
              <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                <?php
                $date_text = date_i18n('Y/m/d', get_post_time('U', true));
                ?>
                <li>
                  <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  <p class="date"><?php echo esc_html($date_text); ?></p>
                </li>
              <?php endwhile;
              wp_reset_postdata(); ?>
            <?php else : ?>
              <li>
                <p>記事が見つかりませんでした。</p>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>

      <div class="row mt20">
        <div class="st-pagelink">
          <?php if ($total_pages > 1): ?>
            <?php if ($page !== 1): ?>
              <a class="prev page-numbers" href="/news?page=<?php echo $page - 1; ?>">&laquo; 前へ</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
              <?php if ($page === $i): ?>
                <a aria-current="page" disabled class="page-numbers current"><?php echo $i; ?></a>
              <?php else: ?>
                <a class="page-numbers" href="/news?page=<?php echo $i; ?>"><?php echo $i; ?></a>
              <?php endif; ?>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
              <a class="next page-numbers" href="/news?page=<?php echo $page + 1; ?>">次へ &raquo;</a>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>

    </div>
  </section>

</main>

<?php get_footer(); ?>