<?php

    function temaPratica_resources() {
        wp_enqueue_style('style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'temaPratica_resources');

    /* Add Js scripts */

    wp_register_script('breakpoints', get_template_directory_uri() . '/assets/js/breakpoints.min.js');
    wp_enqueue_script('breakpoints');

    wp_register_script('browser', get_template_directory_uri() . '/assets/js/browser.min');
    wp_enqueue_script('browser');

?>