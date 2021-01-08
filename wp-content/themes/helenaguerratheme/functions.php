<?php

function loaded_scripts () {

    // Add CSS do Bootstrap
    wp_enqueue_style ( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
    // Add Scripts do Bootstrap
    wp_enqueue_script ( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' );

    // Add CSS costumizado
    wp_enqueue_style ( 'custom-css', get_template_directory_uri() . '/css/custom-css.css' );
}
add_action ( 'wp_enqueue_scripts', 'loaded_scripts' );

register_nav_menus (
    array (
        'principal_menu' => 'Main Menu',
        'top_menu' => 'Top Menu'
    )
);

add_theme_support ( 'post-thumbnails' );