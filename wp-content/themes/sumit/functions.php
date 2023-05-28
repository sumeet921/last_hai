<?php

function sumit_theme_support(){
    // Add dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme','sumit_theme_support');


function sumit_menus(){

 $locations = array(
    'primary' => "Desktop Primary Left Sidebar",
    'footer' => "Food Menu Items"

 );

register_nav_menus($locations);

}

add_action('init','sumit_menus');


function sumit_register_styles(){
    
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('sumit-style', get_template_directory_uri() . "/style.css", array('sumit-bootstrap'), $version, 'all');
    wp_enqueue_style('sumit-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('sumit-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

} 

add_action( 'wp_enqueue_scripts' , 'sumit_register_styles' );

function sumit_register_scripts(){
    
    wp_enqueue_script('sumit-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1',true);
    wp_enqueue_script('sumit-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0',true);
    wp_enqueue_script('sumit-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1',true);
    wp_enqueue_script('sumit-main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0',true);

   
} 

add_action( 'wp_enqueue_scripts' , 'sumit_register_scripts' );

function sumit_widget_areas(){

    register_sidebar(
        array(
            'before_title' => '',
            'after_title' => '',
            'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
            'after_widget' => '</ul>',
       
            'name' => 'Sidebar Area',
            'id' => 'sidebar-1',
            'description' => 'Sidebar Widget Area'
        )

        );

        register_sidebar(
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
                'after_widget' => '</ul>',
            
                'name' => 'Footer Area',
                'id' => 'footer-1',
                'description' => 'Footer Widget Area'
            )
    
            );

}

add_action( 'widgets_init', 'sumit_widget_areas' );

?>