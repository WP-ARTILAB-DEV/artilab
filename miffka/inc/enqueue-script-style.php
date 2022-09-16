<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function miffka_styles() {

	global $post;
	wp_enqueue_style( 'fancybox-style', get_stylesheet_directory_uri() . '/assets/css/jquery.fancybox.min.css', array() , null, 'all');
	wp_enqueue_style( 'style-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array() , null, 'all');
	
	wp_enqueue_style( 'miffka-style', get_stylesheet_uri() );
	wp_enqueue_style( 'custom-miffka-style', get_stylesheet_directory_uri() . '/assets/css/custom.css', array() , null, 'all');
	if( get_post_type( $post === 'portfolio_type' ) ){
		wp_enqueue_style( 'portfolio-miffka-style', get_stylesheet_directory_uri() . '/assets/css/portfolio.css', array() , null, 'all');
	}
}
add_action( 'wp_enqueue_scripts', 'miffka_styles' );

function miffka_scripts() {
	
	wp_enqueue_script( 'miffka-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', 'jquery', '20151215', true );

	wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script( 'script-js-miffka', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), null, true );

}
add_action( 'wp_enqueue_scripts', 'miffka_scripts' );



/**
 * Enqueue admin scripts.
 */
function my_admin_enqueue_scripts() {
	wp_enqueue_style(
		 'admin',
		 get_stylesheet_directory_uri() . '/assets/css/admin.css',
		 [],
		 '1.0'
	);
}

add_action( 'admin_enqueue_scripts', 'my_admin_enqueue_scripts' );




// function dequeue_jquery_migrate( $scripts ) {
// 	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
// 		 $scripts->registered['jquery']->deps = array_diff(
// 			  $scripts->registered['jquery']->deps,
// 			  [ 'jquery-migrate' ]
// 		 );
// 	}
// }
// add_action( 'wp_default_scripts', 'dequeue_jquery_migrate' );