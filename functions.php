<?php

    /* Pega os estilo do arquivo de onde ta e bota pra fazer serviço */

    function temaPratica_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'temaPratica_resources');

    /* Pega os js da pasta deles e soca no wp pra funcionar */

    wp_register_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js');
    wp_enqueue_script('breakpoints');

    wp_register_script('browser', get_template_directory_uri() . '/assets/js/browser.min');
    wp_enqueue_script('browser');

    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('jquery');

    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js');
    wp_enqueue_script('main');

    wp_register_script('util', get_template_directory_uri() . '/assets/js/util.js');
    wp_enqueue_script('util');
    
    /* Registra o menu que a gente quer */

    register_nav_menus(array(
        'primary' => __('Primary Menu')
    ));

?>