<?php
//INCLUDE
require get_template_directory(). '/include/style.php';
require get_template_directory(). '/include/customize.php';
require get_template_directory(). '/include/excerpt.php';
require get_template_directory(). '/include/menu-setup.php';

// Hooks
add_action('wp_enqueue_scripts', 'all4site_enqueue');
add_action('customize_register', 'all4site_customize_register');
add_action('init', 'all4site_jquery_register');
add_action('init', 'all4site_register_menu');

// Filter
add_filter('excerpt_length', 'all4site_excerpt_word_limit');
add_filter('excerpt_more', 'all4site_new_excerpt_more');



//Setup
add_theme_support('post-thumbnails');


