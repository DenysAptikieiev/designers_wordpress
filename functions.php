<?php


add_action( 'wp_enqueue_scripts', 'designers_style' );
add_action( 'wp_enqueue_scripts', 'designers_scripts' );

function designers_style() {
	wp_enqueue_style( 'normalize_style', get_template_directory_uri() . '/assets/css/normalize.css');
		wp_enqueue_style( 'main_style', get_stylesheet_uri() );

	wp_register_style( 'swiper-bundle', 'https://unpkg.com/swiper/swiper-bundle.css');
    	wp_enqueue_style( 'swiper-bundle' );

	wp_register_style( 'swiper-bundle-min', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    	wp_enqueue_style( 'swiper-bundle-min' );

	
};

function designers_scripts() {
	wp_enqueue_script( 'app_script', get_template_directory_uri() . '/js/app.min.js', null, null, true );

	wp_register_script( 'swiper-bundle-js', 'https://unpkg.com/swiper/swiper-bundle.js');
    	wp_enqueue_script( 'swiper-bundle-js' );

	wp_register_script( 'swiper-bundle-min-js', 'https://unpkg.com/swiper/swiper-bundle.min.js');
    	wp_enqueue_script( 'swiper-bundle-min-js' );
};

