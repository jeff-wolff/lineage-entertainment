<?php

namespace  PressWind;

use function PressWind\Inc\Core\load_assets;

if (! defined('WP_ENV')) {
    define('WP_ENV', 'development');
}

// include core files (don't touch this files !)
require_once dirname(__FILE__) . '/inc/core/core.php';

// inc, you can modify this files like you want
require_once dirname(__FILE__) . '/inc/disable.php';
require_once dirname(__FILE__) . '/inc/gutenberg.php';

// pwa icons injected in head
if (file_exists(dirname(__FILE__) . '/inc/pwa_head.php')) {
    include dirname(__FILE__) . '/inc/pwa_head.php';
}

/**
 * Theme setup.
 */
function setup()
{
    add_theme_support('automatic-feed-links');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    // add_theme_support('html5', [
    //   'comment-form',
    //   'comment-list',
    //   'gallery',
    //   'caption',
    // ]);

    // add_theme_support('post-formats', [
    //   'aside',
    //   'image',
    //   'video',
    //   'quote',
    //   'link',
    //   'gallery',
    //   'audio',
    // ]);

    register_nav_menus([
        'primary' => __('Primary Menu', 'lineage-entertainment'),
        'footer' => __('Footer Menu', 'lineage-entertainment')
    ]);

    load_theme_textdomain('lineage-entertainment', get_template_directory() . '/languages');
}

add_action('after_setup_theme', __NAMESPACE__ . '\setup');

/**
 * init assets front
 */
load_assets('lineage-entertainment', dirname(__FILE__) . '', '3000');
/**
 * init assets admin
 */
load_assets('lineage-entertainment-admin', dirname(__FILE__) . '/admin', '4444', true);

function add_nav_close_link($items, $args) {
  // Check if the menu location is 'primary'
  if ($args->theme_location === 'primary') {
    // Append the custom link to the menu items
    $items .= '<a href="#" id="navClose">Close</a>';
  }
  return $items;
}
add_filter('wp_nav_menu_items', __NAMESPACE__ . '\add_nav_close_link', 10, 2);

define('DISALLOW_FILE_EDIT', true);
