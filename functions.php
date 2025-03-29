<?php
/**
 * Styles
 */
function oskarsterner_theme_styles() {
    wp_enqueue_style('oskarsterner-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'oskarsterner_theme_styles');


/**
 * Nav Menus
 */
function oskarsterner_theme_setup() {

  register_nav_menus(array(
      'primary' => 'Primary menu',
      'footer' => 'Footer menu'
  ));

}

add_action('after_setup_theme', 'oskarsterner_theme_setup');