<?php

/**
 * index.php
 * evigym テーマの仮トップページ
 */

get_header(); ?>

<main id="primary" class="site-main" style="font-family:sans-serif; text-align:center; padding:80px 0;">
  <h1 style="font-size:2.5rem; margin-bottom:1rem;">🎯 eviGym Theme Placeholder</h1>
  <p style="font-size:1.1rem; color:#666;">
    テーマが正常に読み込まれています。<br>
    これから <code>functions.php</code> や <code>inc/</code> にコードを追加していきます。
  </p>
  <p style="margin-top:2rem;">
    <a href="<?php echo admin_url(); ?>" style="background:#0073aa; color:#fff; padding:0.5em 1.2em; border-radius:4px; text-decoration:none;">
      管理画面へ戻る
    </a>
  </p>
</main>

<?php get_footer();
