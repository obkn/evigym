<?php
/* Template Name: Contact */
if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="mainvisual mv-contact"></div>
<?php get_template_part('template-parts/common/breadcrumbs'); ?>

<section class="container">
  <h2>お問い合わせ（初期雛形）</h2>
  <p>現行 /contact のフォームDOMをここに移植。運用は CF7 or 独自処理に対応可能。</p>
  <?php while (have_posts()): the_post(); the_content(); endwhile; ?>
</section>

<?php get_footer(); ?>
