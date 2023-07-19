<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/swiper@9.4.1/swiper-bundle.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/atropos@1.0.2/atropos.min.css" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <header class="">
        <div class="container">
            <div class="header__left">
                <a href="/"><img src="<?php bloginfo('template_directory'); ?>/assets/images/logo.png" alt="Lineage Entertainment Company logo" class="logo"></a>
            </div>
            <div class="header__right">
              <!-- <ul class="nav">
                  <li class="selected"><a href="/">Home</a></li>
                  <li><a href="/creators">Creators</a></li>
                  <li><a href="#" id="reelButton"><svg style="vertical-align: middle;position: relative;top: -1.5px;" width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6 4l15 8-15 8z" /></svg> Reel</a></li>
                  <li><a href="/contact">Contact</a></li>
                  <a href="#" id="navClose">Close</a>
              </ul> -->
              <?php
                wp_nav_menu(
                  array(
                    'theme_location' => 'primary',
                    'menu_class' => 'nav',
                    'container_id'    => 'primary-menu',
                  )
                );
              ?>
              <a href="#" id="navOpen">
                  <svg class="header-menu" width="41" height="41" viewBox="0 0 41 41" xmlns="http://www.w3.org/2000/svg"><rect class="b" x="8" y="10" width="25" height="2"/><rect class="b" x="8" y="19" width="25" height="2"/><rect class="b" x="8" y="28" width="25" height="2"/></svg>
              </a>
            </div>
        </div>
    </header>
