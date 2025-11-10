<?php

/**
 * index.php
 */
if (!defined('ABSPATH')) exit;

get_header(); ?>
<main id="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
    <?php the_posts_pagination(); ?>
  <?php else : ?>
    <?php if (current_user_can('manage_options')) : ?>
      <section style="padding:64px 0;">
        <h1 style="font-size:1.25rem;margin:0 0 0.5rem;">index.php fallback</h1>
        <p style="color:#666;">他のテンプレートにマッチしていないため <code>index.php</code> が表示されています。</p>
      </section>
    <?php else : ?>
      <?php status_header(404); ?>
      <section id="not-found" style="padding:64px 0;">
        <h1>ページが見つかりませんでした</h1>
      </section>
    <?php endif; ?>
  <?php endif; ?>
</main>
<?php get_footer();
