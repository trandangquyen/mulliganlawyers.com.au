<?php
function fgc_load_scripts() {
	// wp_enqueue_style( 'parent-style', get_stylesheet_directory_uri().'/style.css' );

	wp_enqueue_style( 'fgc-custom-css', get_stylesheet_directory_uri() . '/css/fgc-custom.css', array( 'fgc-custom-style' ), '20141010' );

	wp_enqueue_script( 'fgc-custom-js', get_stylesheet_directory_uri() . '/js/fgc-functions.js', array( 'jquery' ), '20150330', true );
}
add_action( 'wp_enqueue_scripts', 'fgc_load_scripts' );
?>

