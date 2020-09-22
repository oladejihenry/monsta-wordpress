<?php
// adding css files
function monsta_styles(){
    wp_enqueue_style('ma-style', get_template_directory_uri()."/css/he.css", array(), '1.0', 'all');
    wp_enqueue_style('main-style', get_template_directory_uri()."/css/main.css", array(), '1.0', 'all');
    wp_enqueue_style('po-style', get_template_directory_uri()."/css/po.css", array(), '1.0', 'all');
    wp_enqueue_style('responsive-style', get_template_directory_uri()."/css/responsive.css", array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', "https://fonts.googleapis.com/css?family=Oswald%3A400%2C300%2C700", array(), '5.1.3', 'all');  
}
add_action('wp_enqueue_scripts', 'monsta_styles');

// adding js files
function monsta_scripts(){
    wp_enqueue_script('fontawesome-script', 'https://use.fontawesome.com/cee7d76a0d.js', array(), '1.0', 'all', true);
    wp_enqueue_script('fontawesome-script-2', 'https://kit.fontawesome.com/6a4d0096b9.js', array(), '1.0', 'all', true);
}
add_action('wp_enqueue_scripts', 'monsta_scripts');

//thumbnail and title
function monsta_init(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'monsta_init');

function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}
add_theme_support( 'post-thumbnails' );
add_image_size( 'homepage-thumb', 625, 351);
add_image_size( 'singlepost-thumb', 150, 150, true);
add_image_size( 'sidebar-thumb', 75, 75, true);
add_image_size( 'sidemore-thumb', 90, 90, true);

?>