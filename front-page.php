<?php
/* Front Page */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv01"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container">
  <h2>トップ（初期雛形）</h2>
  <p>現行トップのセクション（ヒーロー、店舗紹介、料金への導線など）を順に移植します。</p>
  <?php while (have_posts()): the_post(); the_content(); endwhile; ?>
</section>

<?php get_footer(); ?>
