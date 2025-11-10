<?php
if (!defined('ABSPATH')) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>フランチャイズ加盟募集｜パーソナルトレーニングならエビジム</title>
  <meta name="description" content="エビジムではフランチャイズ加盟店を募集しております。">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400&family=Noto+Serif+JP:wght@400;600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class('fc'); ?>>
  <?php wp_body_open(); ?>

  <header class="Header">
    <div class="Header_inner">
      <p class="Header_logo">
        <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/static/img/fc/logo.png" alt="eviGym パーソナルジムのエビジム" width="157" height="58"></a>
      </p>
      <div class="Header_contact"><a href="/contact">お問い合わせはこちら</a></div>
    </div>
  </header>