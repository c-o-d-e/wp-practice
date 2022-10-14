<?php

function practicetheme_register_styles(){
    wp_enqueue_style('practicetheme-bootstrap', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

}

add_action('wp_enqueue_scripts', 'practicetheme_register_styles');

?>