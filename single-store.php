<?php
/* 店舗詳細 */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv-store"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container store-single">
  <?php the_post(); ?>
  <h1><?php the_title(); ?></h1>
  <div class="store-hero">
    <?php if (has_post_thumbnail()) the_post_thumbnail('large'); ?>
  </div>
  <div class="store-content">
    <?php the_content(); ?>
  </div>
</section>

<?php get_footer(); ?>
