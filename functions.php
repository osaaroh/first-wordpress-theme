<?php
//1. register menu after style.css theme
function register_my_menu() {
    // The wp_nav_menu() function in WordPress is a powerful template tag used to display a navigation menu. It works by taking the menu you create in the WordPress admin dashboard (under Appearance > Menus) and outputting it as HTML in your theme's template files.

    // Here's a brief summary of how it works:
    // Menu Registration: Before you can display a menu, you must register a "menu location" in your theme's functions.php file. This is done with the register_nav_menu() function. This tells WordPress that your theme has a specific place for a menu (e.g., a "primary" menu in the header). This is the step you already completed.

    // Dashboard Creation: After registering the location, the "Menus" option becomes available in the WordPress admin dashboard. The user can then create a menu by adding pages, posts, custom links, etc., and assign it to the registered location.

    register_nav_menu('primary-menu', 'Primary Menu');
}
add_action('init', 'register_my_menu');

function theme_styles_scripts(){
    //load css
    wp_enqueue_style(
        'main-css',
        get_template_directory_uri(). '/css/style.css', array(),
        '1.0'
    );

    //load js
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri(). '/js/scripts.js', array('jquery'),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'theme_styles_scripts');




