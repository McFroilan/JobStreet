<?php
function jobstreet_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'jobstreet-theme'),
    ));
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'jobstreet_theme_setup');

function jobstreet_enqueue_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'jobstreet_enqueue_assets');
?>
