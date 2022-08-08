<?php

function theme_config()
{
    register_nav_menus(array(
        'header-menu' => 'Header Menu',
    ));

    $args = array(
        'width' => 340,
        'height' => 70
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('video', 'image'));
}
add_action('after_setup_theme', 'theme_config', 0);


function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

// Register a new sidebar simply named 'sidebar'
function add_widget_Support()
{
    // register_sidebar(array(
    //     'name'          => 'Sidebar',
    //     'id'            => 'sidebar',
    //     'before_widget' => '<div>',
    //     'after_widget'  => '</div>',
    //     'before_title'  => '<h2>',
    //     'after_title'   => '</h2>',
    // ));
    register_sidebar(array(
        'name' => 'Footer left',
        'id' => 'footer-left',
        'description' => 'Widget for footer in position left',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
    register_sidebar(array(
        'name' => 'Footer right',
        'id' => 'footer-right',
        'description' => 'Widget for footer in position right',
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
// Hook the widget initiation and run our function
add_action('widgets_init', 'add_Widget_Support');


function scripts_load()
{
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.14.7', true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '4.3.1', true);
    wp_enqueue_script('contrast', get_template_directory_uri() . '/assets/js/contrast.js', array(), '4.3.1', true);
    wp_enqueue_script('fonts-size', get_template_directory_uri() . '/assets/js/fonts-size.js', array(), '4.3.1', true);

    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.3.1', 'all');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
    wp_enqueue_style('template', get_template_directory_uri() . '/style.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'scripts_load');

// ------LEMBRETE------
// A NAVEGAÇÃO DA HOMEPAGE SERÁ FEITA ATRAVÊS DE CATEGORIAS, ONDE SERÃO (CADASTRADAS AS CATEGORIAS RELACIONADAS AO TIPO DE SERVIÇO)
// E POSTERIOMENTE (ADICIONADO A PÁGINA OU POST) A DETERMINADA CATEGORIA
