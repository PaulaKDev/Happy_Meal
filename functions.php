<?php

function happymeal_styles() {
    wp_enqueue_style(
        'main-style', // nombre interno
        get_stylesheet_uri() // ruta al style.css
    );
}

add_action('wp_enqueue_scripts', 'happymeal_styles');

function happymeal_scripts() {

    wp_enqueue_script(
        'happymeal-js', // nombre interno
        get_template_directory_uri() . '/js/main.js', // ruta al JS
        array(), // dependencias
        wp_get_theme()->get('Version'), // versión (evita cache)
        true // se carga antes de </body>
    );

}

add_action('wp_enqueue_scripts', 'happymeal_scripts');

