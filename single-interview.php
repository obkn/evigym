<?php
/* インタビュー詳細 */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv-interview"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container interview-single">
  <?php the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <div class="interview-hero">
    <?php if (has_post_thumbnail()) the_post_thumbnail('large'); ?>
  </div>
  <div class="interview-content">
    <?php the_content(); ?>
  </div>
</section>

<?php get_footer(); ?>
