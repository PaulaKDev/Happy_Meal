<?php

/* =========================
   STYLES
========================= */
function happymeal_styles() {

    wp_enqueue_style(
        'happymeal-style', // nombre único
        get_stylesheet_uri(), // style.css
        array(), // dependencias
        time() // Fuerza la recarga sin caché durante el desarrollo
    );

}

add_action('wp_enqueue_scripts', 'happymeal_styles');


/* =========================
   SCRIPTS
========================= */
function happymeal_scripts() {

    wp_enqueue_script(
        'happymeal-js',
        get_template_directory_uri() . '/js/main.js',
        array(), // añade 'jquery' si lo usas
        time(), // Fuerza la recarga sin caché durante el desarrollo
        true // footer
    );

}

add_action('wp_enqueue_scripts', 'happymeal_scripts');


// Declarar soporte para WooCommerce
function happy_meal_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'happy_meal_woocommerce_support' );