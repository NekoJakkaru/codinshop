<?php
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

function CodiNShop_Style() {
wp_enqueue_style( 'style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'CodiNShop_Style' );


function CodiNShop_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'CodiNShop_add_woocommerce_support' );





















?>
