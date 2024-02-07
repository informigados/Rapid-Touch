<?php
function rapid_touch_setup() {
    register_nav_menus(array('header-menu' => __('Header Menu', 'rapid_touch'), 'footer-menu' => __('Footer Menu', 'rapid_touch')));
    add_theme_support('title-tag');
}

function rapid_touch_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('after_setup_theme', 'rapid_touch_setup');
add_action('wp_enqueue_scripts', 'rapid_touch_scripts');

function custom_excerpt_length($excerpt) {
    return substr($excerpt, 0, 155) . (strlen($excerpt) > 155 ? '...' : '');
}
add_filter('get_the_excerpt', 'custom_excerpt_length');
