<?php 

function template_styles(){
    wp_register_style( 'landing', get_template_directory_uri() . '/assets/css/landing.css' );  
    wp_register_style( 'fonts', get_template_directory_uri() . '/assets/css/fonts.css' );
    wp_register_style( 'reset', get_template_directory_uri() . 'assets/css/reset.css' );
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css',false,'4.6.0','all');
    
    wp_enqueue_style('main-style', get_stylesheet_uri(), array('reset', 'bootstrap','fonts'),'1.0','all');

    wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', false,'3.5.1', true );
    wp_register_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'),'4.6.0', true);
    wp_register_script( 'landing-scripts', get_template_directory_uri() . 'assets/js/script.js' );

    wp_enqueue_script('main-scripts', get_stylesheet_uri(), array('jquery', 'bootstrap', 'landing-scripts'),'1.0','all');
}
add_action('wp_enqueue_scripts','template_styles');

require_once __DIR__ . '/vendor/cmb2/init.php';

require_once __DIR__ . '/features/home-template-fields.php';

