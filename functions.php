<?php 

// set up styles and enqueue resources
function site_styles() {
    wp_enqueue_style('bootstrap_styles', get_theme_file_uri('/bootstrap/css/bootstrap.min.css'));
    wp_enqueue_style('site_main_styles', get_theme_file_uri('/style.css'));
    wp_enqueue_script('bootstrap_scripts', get_theme_file_uri('bootstrap/js/bootstrap.min.js'), '1.0', true);
    wp_enqueue_script('font_awesome_icons', '//https://kit.fontawesome.com/885ee2c56d.js');
    wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );
}

add_action('wp_enqueue_scripts', 'site_styles');


// set up dynamic page titles and menu tracking
function site_features() {
    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    register_nav_menu('footerMenuLocation', 'Footer Menu Location');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'site_features');