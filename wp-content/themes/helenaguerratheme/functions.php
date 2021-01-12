<?php

include_once ( 'css/custom-php.php' );
require_once ( get_template_directory() . '/includes/class-wp-bootstrap-nav-walker.php');

function loaded_scripts () {

    // Add CSS do Bootstrap
    wp_enqueue_style ( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' );
    // Add Scripts do Bootstrap
    wp_enqueue_script ( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js' );

    // Add CSS costumizado
    // wp_enqueue_style ( 'custom-css', get_template_directory_uri() . '/css/custom-css.css' );
}
add_action ( 'wp_enqueue_scripts', 'loaded_scripts' );

/* 
    Função de configuração 
*/

function helenaguerra_config () {
    register_nav_menus (
        array (
            'principal_menu' => 'Main Menu',
            'top_menu' => 'Top Menu'
        )
    );
    
    add_theme_support ( 'custom-header', array(
        'height'    => 500,
        'width'     => 1920
    ));

    // add_theme_support ( 'custom-logo', array(
    //     'height'      => 100,
    //     'width'       => 400,
    //     'flex-height' => true,
    //     'flex-width'  => true,
    //     'header-text' => array( 'site-title', 'site-description' ),
    // ));

}
add_action ( 'after_setup_theme', 'helenaguerra_config', 0);

// Modificando tela de login 
function personlazandoLogin () {?>
    <style>
        body.login {background: url('<?php echo get_stylesheet_directory_uri() ?>/assets/cover-home.jpg'); background-size: cover;}
        body.login div#login {}
        body.login div#login .message {margin-bottom: 0 !important;}
        body.login div#login #login_error {margin-bottom: 0 !important;}
        body.login div#login h1 {background: #fff; padding: 10px; border-radius: 10px 10px 0 0;}
        body.login div#login form#loginform {margin-top: 0; border-radius: 0 0 10px 10px; border:none;}
        body.login div#login p#nav {display:none;}
        body.login div#login p#backtoblog {display:none;}
        #login h1 a, .login h1 a { background-image: url('http://localhost/helena-guerra/wp-content/uploads/2021/01/Destino.png'); height: 90px; width: 296px; background-repeat: no-repeat; background-size: content;}
    </style>
<?php
}
add_action ( 'login_enqueue_scripts', 'personlazandoLogin');

// function logo_custom () {
//     add_theme_support ( 'custom-logo', array(
//         'height'    => 400,
//         'width'     => 500
//     ));
// }
// add_action ( 'after_setup_theme', 'logo_custom' );
