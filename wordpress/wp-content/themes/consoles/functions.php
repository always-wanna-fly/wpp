<?php
add_action('after_setup_theme', 'myMenu');
add_action('widgets_init', 'register_my_widgets');

function register_my_widgets(){
    register_sidebar(array(
        'name'=>'Left Sidebar',
        'id'=>"left_sidebar",
        'description'=>'desc',
    ));
}

function myMenu(){
    register_nav_menu('top', 'header menu');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails', array('post'));
    add_image_size('post_thumb', 200, 200, true);

}


function load_bootstrap(){
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.js');
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.css');
wp_enqueue_style('default-css', get_template_directory_uri().'/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'load_bootstrap');
