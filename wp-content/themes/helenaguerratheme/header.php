<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php bloginfo('name'); ?> </title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <section class="container py-3" id="top-navbar" style="display:flex; justify-content: space-between;">
            <div class="social-midia">
                <div>
                    
                </div>
            </div>
            <div class="Logo">
                <a href="http://localhost/helena-guerra/">LOGO</a>
            </div>
            <div class="user-area">
                <a href="#"> Área do usuário</a>
            </div>
        </section>
        <section class="navbar py-2 justify-content-center bg-warning">
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