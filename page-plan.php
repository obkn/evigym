<?php
/* Template Name: Plan */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv-plan"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container">
  <h2>料金プラン（初期雛形）</h2>
  <p>現行 /plan の料金表DOMをここに移植。将来はACF Repeaterで構造化可能。</p>
  <?php while (have_posts()): the_post(); the_content(); endwhile; ?>
</section>

<?php get_footer(); ?>
