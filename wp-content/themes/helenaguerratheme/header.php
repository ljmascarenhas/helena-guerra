<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo( 'name' ); ?> </title>
    <meta name="description" content="<?php bloginfo( 'description '); ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <section class="container py-3 d-flex justify-content-between align-items-center" id="top-navbar">
            <div class="social-midia">
                    <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/facebook.png" class="img-fluid" alt="Icone do Facebook" width="30"> </a>
                    <a href="#" class="px-2"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/instagram.png" class="img-fluid" alt="Icone do Facebook" width="30"> </a>
                    <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/youtube.png" class="img-fluid" alt="Icone do Facebook" width="30"> </a>
            </div>
            <div class="Logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="http://localhost/helena-guerra/wp-content/uploads/2021/01/Destino.png" class="img-fluid" alt="Logo Helena Guerra" width="60" height="60" srcset="">
                </a>
            </div>
            <div class="user-area align-items-bottom">
                    <a href="#"> <img src="<?php echo get_stylesheet_directory_uri();?>/assets/icons/user.png" class="img-fluid align-center" alt="Icone do Facebook" width="14"> </a>
                <a href="#"> <span class="align-top">Área do usuário</span></a>
            </div>
        </section>
        <section class="navbar py-2 justify-content-center bg-light">
            <div class="row">
                <nav class="menu col-md-12 mt-3 text-center">
                    <?php 
                        wp_nav_menu ( 
                            array ( 
                                'theme_location' => 'principal_menu'
                            ) 
                        );
                    ?>
                </nav>
            </div>
        </section>
    </header>