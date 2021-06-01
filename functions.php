<?php

require_once 'comments-helper.php';

remove_action( 'welcome_panel', 'wp_welcome_panel' );

// Function setup to activate supports in the theme
function juanjimeneztj_setup() {
    load_theme_textdomain( "my_theme", TEMPLATEPATH . "/languages");

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'automatic-feed-links' );

    add_theme_support( 'title-tag' );

    add_theme_support( 'custom-logo', array(
        'height' => 240,
        'width' => 240,
        'flex-height' => true,
    ) );

    register_nav_menus(array(
        'header-menu' => 'Header Menu',
        'footer-menu' => 'Footer Menu',
        'footer-menu-secondary' => 'Footer Menu Secondary',
    ));

    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
}
add_action( 'after_setup_theme', 'juanjimeneztj_setup' );

// Function to register stylesheets and javascripts
require_once 'theme_fn/scripts.fn.juanjimeneztj';

// Function to register new dashboard
require_once 'theme_fn/custom.dashboard.theme.juanjimeneztj';

// Function to register widgets spaces
require_once 'theme_fn/widgets.fn.juanjimeneztj';

// Functions to custom options in the theme
require_once 'theme_fn/custom.fn.theme.juanjimeneztj';

// Functions to custom pagination in the theme
require_once 'theme_fn/pagination.fn.theme.juanjimeneztj';

// End functions JUANJIMENEZTJ
