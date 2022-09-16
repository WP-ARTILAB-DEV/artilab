<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_filter( 'block_categories', 'custom_block_category', 10, 2 );

function custom_block_category( $default_categories, $post ) {

    // if ( $post->post_type !== 'post' && $post->post_type !== 'page' ) {
    //     return $default_categories;
    // }

    return array_merge(
        $default_categories,
        [
            [
                'slug'  => 'artilab-portfolio',     // Слаг категории который будем использовать при регистрации блока
                'title' => __( 'Блоки портфоліо', 'artilab-portfolio' ),      // Отображаемое название категории
                'icon'  => 'wordpress'      // Иконка для категории, можно передать null если иконка не нужна
            ],
        ]
    );
}




function artilab_register_blocks() {

    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'portfolio_about',
            'title'             => __('О проекте'),
            'description'       => __('О проекте'),
            'render_template'   => 'template-parts/blocks/portfolio-about/portfolio-about.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'artilab-portfolio',
            'icon' => 'info',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }

    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'portfolio_one',
            'title'             => __('Дизайн концепция'),
            'description'       => __('Дизайн концепция'),
            'render_template'   => 'template-parts/blocks/portfolio-one/portfolio-one.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'artilab-portfolio',
            'icon' => 'art',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }
    
    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'portfolio_goal',
            'title'             => __('Определение целей клиента'),
            'description'       => __('Определение целей клиента'),
            'render_template'   => 'template-parts/blocks/portfolio-goal/portfolio-goal.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'artilab-portfolio',
            'icon' => 'performance',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }
    
}
add_action('acf/init', 'artilab_register_blocks');