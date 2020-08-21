<?php
    get_header();
?>

<section class="wrapper"> 
    <div class="inner">
    <header class="special">
        <h2>Blog do tema</h2>
    </header>
    <?php

        if (have_posts()) :

            while (have_posts()) : the_post(); ?>

                <h3> <?php the_title(); ?> </h3>
                <?php
                    $content = get_the_excerpt();
                    $resumo = substr($content, 0, 450);
                    echo '<p>'.$resumo.'<p>';
                ?>
                <a href="<?php the_permalink(); ?>"> Saiba mais </a>
                <hr>
                <br>

            <?php endwhile;

        else:
            echo'<p> Sem conteúdo </p>';

        endif;
    ?>
    </div>
</section>
            
<?php
    get_footer()
?>