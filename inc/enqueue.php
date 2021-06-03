<?php

function gsweb_load_scripts( $hook ){

    if( 'theme-options_page_gsweb_custom_css' != $hook){return;}

    wp_register_script('gsweb-westmark-script-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' , array() , '1.0.0' , false);
	wp_enqueue_script('gsweb-westmark-script-jquery');

    wp_enqueue_media();
    
    wp_register_script('gsweb-westmark-script', get_template_directory_uri() . '/js/media.js' , array('jquery') , '1.0.0' , true);
	wp_enqueue_script('gsweb-westmark-script');
}

add_action( 'admin_enqueue_scripts', 'gsweb_load_scripts' );