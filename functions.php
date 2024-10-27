<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('style-name', get_stylesheet_uri());
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('swiper', "https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css");

    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], "null", true);
    wp_enqueue_script('script-name', get_template_directory_uri() . '/assets/js/script.js', [], 'null', true);
});

?>