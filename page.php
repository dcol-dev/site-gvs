<?php get_header(); ?>

    <main>
        <div class="container d-flex">
            <div class="col-xs-12 col-sm-12 col-md-9  m-auto">
                <?php
                    // Verifica se está em uma página e exibe o título e conteúdo
                    if (have_posts()) :
                        while (have_posts()) : the_post();
                            // Exibe o título da página dentro da tag <h1>
                            //echo '<h1>' . get_the_title() . '</h1>';

                            // Exibe o conteúdo da página
                            the_content();
                        endwhile;
                    endif;
                ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>
