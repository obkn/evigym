<?php if (!defined('ABSPATH')) { exit; }
/**
 * Main template file (fallback)
 */
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <header class="entry-header">
      <?php if (!is_page()) : ?>
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php endif; ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; else: ?>
  <p><?php esc_html_e('No content found.', 'evigym'); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
