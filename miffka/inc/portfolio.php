<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


// Register Custom Post Type
function portfolio_post_type() {

	$labels = array(
		'name'                  => 'Портфолио',
		'singular_name'         => 'Портфолио',
		'menu_name'             => 'Портфолио',
		'add_new_item'          => 'Добавить',
		'add_new'               => 'Добавить',
		'new_item'              => 'Добавить',
		'edit_item'             => 'Редактировать',
		'update_item'           => 'Обновить',
		'view_item'             => 'Смотреть',
		'view_items'            => 'Смотреть все',
	);
	$rewrite = array(
		'slug'                  => 'portfolio',
		'with_front'            => false,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Портфолио',
		'description'           => 'Описание',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_ui'             	=> true,
		'show_in_menu'        	=> true,
		'show_in_nav_menus'   	=> true,
		'show_in_admin_bar'   	=> true,
		'show_in_rest' 					=> true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var'             => 'portfolio',
		'rewrite'               => $rewrite,
		'capability_type'       => 'post',
	);
	register_post_type( 'portfolio_type', $args );
}

add_action( 'init', 'portfolio_post_type', 0 );