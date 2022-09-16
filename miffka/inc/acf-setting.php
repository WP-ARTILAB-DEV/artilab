<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}




if( function_exists('acf_add_options_page') ) {

 	// добавляем родителя
	$parent = acf_add_options_page(array(
		'page_title' 	=> 'Настройки темы',
		'menu_title' 	=> 'Настройки темы',
		'redirect' 		=> true,
		'update_button'		=> __('Обновить', 'acf'),
		'position' => 8
	));

	// acf_add_options_page( array(
	// 	'title'      => 'Шапка',
	// 	'capability' => 'manage_options',
	// 	'update_button'		=> __('Обновить', 'acf'),
	// 	'parent_slug' 	=> $parent['menu_slug'],
	// ) );

	
}



