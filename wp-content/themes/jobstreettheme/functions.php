<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function custom_theme_assets() {
    // Main Theme Styles
    wp_enqueue_style('custom-theme-style', get_template_directory_uri() . '/style.css');

    // Job Search Page Styles
    wp_enqueue_style('jobsearch-style', get_template_directory_uri() . '/assets/jobsearch.css');

    // Footer Styles
    wp_enqueue_style('footer-style', get_template_directory_uri() . '/assets/footer.css');

}

add_action('wp_enqueue_scripts', 'custom_theme_assets');

?>