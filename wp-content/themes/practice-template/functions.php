<?php

function practicetheme_theme_support(){
    // Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');

}

add_action('after_setup_theme', 'practicetheme_theme_support');


function practicetheme_menus(){

    $locations = array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'practicetheme_menus');


function practicetheme_register_styles(){
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('practicetheme-style', get_template_directory_uri() . "/style.css", array('practicetheme-bootstrap'), $version, 'all');
    wp_enqueue_style('practicetheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('practicetheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action('wp_enqueue_scripts', 'practicetheme_register_styles');


function practicetheme_register_scripts(){

  wp_enqueue_script('practicetheme-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), "3.4.1", true);
  wp_enqueue_script('practicetheme-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(), "1.16.0", true);
  wp_enqueue_script('practicetheme-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(), "4.4.1", true);
  wp_enqueue_script('practicetheme-main', get_template_directory_uri() . "/assets/js/main.js", array(), "1.0", true);

}

add_action('wp_enqueue_scripts', 'practicetheme_register_scripts');
?>