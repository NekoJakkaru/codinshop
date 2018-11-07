<?php
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function CodiNShop_Style() {
wp_enqueue_style( 'style', get_stylesheet_uri());

wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.css' );

wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css' );

wp_enqueue_script( 'jquery-dimitry', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.js', array(), '20151215', true );

wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.js', array(), '20151215', true );

wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/js/fontawesome.js', array(), '20151215', true );
}

add_action( 'wp_enqueue_scripts', 'CodiNShop_Style' );


function CodiNShop_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );


}
add_action( 'after_setup_theme', 'CodiNShop_add_woocommerce_support' );





















?>
