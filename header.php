<?php if (!defined('ABSPATH')) exit; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <wrapper id="wrapper">
    <?php get_template_part('template-parts/header/branding'); ?>
    <?php get_template_part('template-parts/header/nav-global'); ?>
    <main id="main">