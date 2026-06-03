<?php

function happymeal_styles() {
    wp_enqueue_style(
        'main-style', // nombre interno
        get_stylesheet_uri() // ruta al style.css
    );
}

add_action('wp_enqueue_scripts', 'happymeal_styles');
