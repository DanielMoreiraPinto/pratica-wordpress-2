<!-- O single que exibe um e todos os posts -->

<?php 

    get_header();

?>

<section class="wrapper"> 
    <div class="inner">
    <header class="special">
        <h2><?php wp_title(''); ?></h2>
    </header>
    <?php

        if (have_posts()) :

            while (have_posts()) : the_post(); ?>

                <?php

                    $content = get_the_content();
                    echo $content;

                ?>

            <?php endwhile;

        else:
            echo'<p> Sem conteúdo </p>';

        endif;
    ?>
    </div>
</section>

<?php

    get_footer();
    
?>