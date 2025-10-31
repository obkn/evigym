<?php
/* 汎用固定ページ */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv-page"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container">
  <?php while (have_posts()): the_post(); ?>
    <h1 class="page-title"><?php the_title(); ?></h1>
    <div class="page-content"><?php the_content(); ?></div>
  <?php endwhile; ?>
</section>

<?php get_footer(); ?>
