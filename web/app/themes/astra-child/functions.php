<?php
function astra_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri()); 
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Montserrat:wght@400;600&display=swap');
}
add_action('wp_enqueue_scripts', 'astra_child_enqueue_styles');

add_theme_support('post-thumbnails'); 
require_once get_stylesheet_directory() . '/cpt-portfolio.php'; 