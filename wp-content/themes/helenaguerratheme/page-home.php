<?php get_header(); ?>

    <main>
        <section class="card-home position-relative">
            <div class="overlay position-absolute d-flex justify-content-end">
                <div class="p-5 mt-5 align-middle">
                    <h1 class="text-uppercase">
                        A viagem dos <br>
                        <span style="font-size: 8.0rem;">
                            seus sonhos
                        </span> <br>
                        começa aqui
                    </h1>
                    <button type="button" class="btn btn-outline-secondary text-uppercase p-3 mt-3">Conheça nossos pacotes</button>
                </div>
            </div>
        </section>

        <section class="container">
            <?php if ( have_posts() ): 
                while ( have_posts() ): the_post();
            ?>
            <article>
                <?php the_content();?>
            </article>
            <?php
                endwhile;
            else:
            ?>
            <p>Não foi encontrado nenhum post ... </p>
            <?php endif; ?>
        </section>
    </main>


<?php get_footer(); ?>