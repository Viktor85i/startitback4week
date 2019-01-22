<?php

add_action('wp_enqueue_scripts','start_it_add_scripts');

function start_it_add_scripts ()
{
    wp_enqueue_style('style.css',get_template_directory_uri() . '/style.css');
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', get_template_directory_uri().'/assets/js/jquery-3.2.1.min.js', false, null, true );
    wp_enqueue_script( 'jquery' );

    wp_enqueue_script('bootstrap.min.js',get_template_directory_uri() . '/assets/js/bootstrap.min.js','jquery',null,true);
    wp_enqueue_script('jquery.mixitup.min.js',get_template_directory_uri() . '/assets/js/jquery.mixitup.min.js','jquery',null,true);
    wp_enqueue_script('jquery.fancybox.min.js',get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js','jquery',null,true);
    wp_enqueue_script('owl.carousel.js',get_template_directory_uri() . '/assets/js/owl.carousel.js','jquery',null,true);
    wp_enqueue_script('typed.min.js',get_template_directory_uri() . '/assets/js/typed.min.js','jquery',null,true);
    wp_enqueue_script('menu.js',get_template_directory_uri() . '/assets/js/menu.js','jquery',null,true);
    wp_enqueue_script('custom.js',get_template_directory_uri() . '/assets/js/custom.js','jquery',null,true);

}