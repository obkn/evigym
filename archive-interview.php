<?php
/* インタビュー一覧 */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv-interview"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container">
  <h2>お客様インタビュー</h2>
  <div class="row">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
      <article class="col-12 col-md-6 col-lg-4 interview-card">
        <a href="<?php the_permalink(); ?>">
          <?php if (has_post_thumbnail()) the_post_thumbnail('medium'); ?>
          <h3><?php the_title(); ?></h3>
          <p><?php echo esc_html(wp_trim_words(get_the_excerpt(), 40)); ?></p>
        </a>
      </article>
    <?php endwhile; else: ?>
      <p>インタビューがありません。</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
