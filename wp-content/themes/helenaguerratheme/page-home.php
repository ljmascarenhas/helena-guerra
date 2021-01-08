<?php get_header(); ?>

    <main class="container">
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
    </main>


<?php get_footer(); ?>