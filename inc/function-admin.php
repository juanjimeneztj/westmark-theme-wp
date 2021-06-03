<?php

/*
@package gsweb-theme
    ================================
        ADMIN PAGE
    ================================
*/

function gsweb_add_admin_page(){
    // Main option for gsweb theme
    add_menu_page( 'GSWEB Theme Options' , 'Theme Options' , 'manage_options' , 'gsweb' , 'gsweb_theme_welcome_page' , get_template_directory_uri() . '/img/favicons.png', 110 ); //dashicons-google

    // Sub menu for gsweb theme
    add_submenu_page( 'gsweb' , 'GSWEB welcome' , 'Welcome' , 'manage_options' , 'gsweb' , 'gsweb_theme_welcome_page' );
    add_submenu_page( 'gsweb' , 'Theme Settings' , 'Settings' , 'manage_options' , 'gsweb_custom_css' , 'gsweb_theme_custom_css_page' );

    // Activate custom settings
    add_action( 'admin_init' , 'gsweb_custom_settings' );
}

add_action('after_setup_theme','theme_setup');
add_action( 'admin_menu' , 'gsweb_add_admin_page' );
add_action( 'init', 'gsweb_custom_post_types_contributors', 0 );
add_action( 'init', 'gsweb_custom_post_types_events', 0 );

// function to custom welcome for gsweb theme
function gsweb_custom_settings(){
    register_setting( 'gsweb-settings-group' , 'gsweb_primary_color' );
    register_setting( 'gsweb-settings-group' , 'gsweb_secondary_color' );
    register_setting( 'gsweb-settings-group' , 'gsweb_theme' );
    register_setting( 'gsweb-settings-group-topbar' , 'gsweb_settings_bgtopnavbar' );
    register_setting( 'gsweb-settings-group-topbar' , 'gsweb_settings_bgtopnavbar_text' );
    register_setting( 'gsweb-settings-group-topbar' , 'gsweb_settings_bgtopnavbar_link_text' );
    register_setting( 'gsweb-settings-group-topbar' , 'gsweb_settings_bgtopnavbar_link_url' );

    add_settings_section( 'gsweb-settings-options' , '' , 'gsweb_general_options' , 'gsweb' );
    add_settings_section( 'gsweb-settings-options-topbar' , '' , 'gsweb_general_options' , 'gswebtopbar' );

    add_settings_field( 'gsweb-sidebar-primary-color' , 'Primary:' , 'gsweb_settings_color' , 'gsweb' , 'gsweb-settings-options' );
    add_settings_field( 'gsweb-sidebar-secondary-color' , 'Secondary:' , 'gsweb_settings_color_secondary' , 'gsweb' , 'gsweb-settings-options' );
    add_settings_field( 'gsweb-sidebar-theme' , 'Default Theme:' , 'gsweb_settings_theme' , 'gsweb' , 'gsweb-settings-options' );

    add_settings_field( 'gsweb-sidebar-topnavbar_text' , 'Text of top-navbar:' , 'gsweb_settings_bgtopnavbar_text_value' , 'gswebtopbar' , 'gsweb-settings-options-topbar' );
    add_settings_field( 'gsweb-sidebar-topnavbar_link_text' , 'Text of the link:' , 'gsweb_settings_bgtopnavbar_link_text_value' , 'gswebtopbar' , 'gsweb-settings-options-topbar' );
    add_settings_field( 'gsweb-sidebar-topnavbar_link_url' , 'Url of the link:' , 'gsweb_settings_bgtopnavbar_link_url_value' , 'gswebtopbar' , 'gsweb-settings-options-topbar' );
    add_settings_field( 'gsweb-sidebar-topnavbar_background' , 'Background of top-navbar:' , 'gsweb_settings_bgtopnavbar_image' , 'gswebtopbar' , 'gsweb-settings-options-topbar' );
}

// main funciton to get field options for gsweb theme
function gsweb_settings_bgtopnavbar_image(){
	$picture = esc_attr( get_option( 'gsweb_settings_bgtopnavbar' ) );
	echo '<input type="button" class="btn btn-dark" value="Upload background Image" id="upload-bg-image-topnavbar" /><input type="hidden" name="gsweb_settings_bgtopnavbar" id="background-image-topnavbar" value="' . $picture . '" />';
	echo '<figure><img src="' . $picture . '" id="background-image-topnavbar-preview" class="img-fluid mt-3" /></figure>';
}
function gsweb_settings_bgtopnavbar_text_value(){
	$text = esc_attr( get_option( 'gsweb_settings_bgtopnavbar_text' ) );
	echo '<input type="text" name="gsweb_settings_bgtopnavbar_text" class="form-control" style="border: 3px solid #07A6BB!important;"  value="' . $text .'" />';
}
function gsweb_settings_bgtopnavbar_link_text_value(){
	$text = esc_attr( get_option( 'gsweb_settings_bgtopnavbar_link_text' ) );
	echo '<input type="text" name="gsweb_settings_bgtopnavbar_link_text" class="form-control" style="border: 3px solid #07A6BB!important;"  value="' . $text .'" />';
}
function gsweb_settings_bgtopnavbar_link_url_value(){
	$text = esc_attr( get_option( 'gsweb_settings_bgtopnavbar_link_url' ) );
	echo '<input type="text" name="gsweb_settings_bgtopnavbar_link_url" class="form-control" style="border: 3px solid #07A6BB!important;"  value="' . $text .'" />';
}
// Option to save the primary Color
function gsweb_settings_color(){
    $promaryColor = esc_attr( get_option( 'gsweb_primary_color' ) );
    echo '<input type="color" name="gsweb_primary_color" class="form-control w-25 p-0" style="width:30px!important;height:30px!important;cursor:pointer;border: 3px solid #07A6BB!important;" '.(is_null($promaryColor)?'':' value="' . $promaryColor .'" ').' />';
}
// Option to save the secondary Color
function gsweb_settings_color_secondary(){
    $secondaryColor = esc_attr( get_option( 'gsweb_secondary_color' ) );
    echo '<input type="color" name="gsweb_secondary_color" class="form-control w-25 p-0" style="width:30px!important;height:30px!important;cursor:pointer;border: 3px solid #07A6BB!important;" '.(is_null($secondaryColor)?'':' value="' . $secondaryColor .'" ').' />';
}
// Option to save the themes
function gsweb_settings_theme(){
    $def_theme = esc_attr( get_option( 'gsweb_theme' ) );
    echo '<select class="form-select" aria-label="Default select example" name="gsweb_theme">
    <option '.(($def_theme == 'Default')?' selected value="0" ':'').'>Default</option>
    <option '.(($def_theme == 'Chart Experts')?' selected value="1" ':'').'>Chart Experts</option>
    <option '.(($def_theme == 'Westmark Trading')?' selected value="2" ':'').'>Westmark Trading</option>
  </select>';
}

// sidebar page options for gsweb theme
function gsweb_general_options(){
    echo '';
}

// Main page for gsweb theme
function gsweb_theme_welcome_page(){
    require_once( get_template_directory() . '/inc/templates/gsweb-admin.php' );
}

// Sub page for custom css page
function gsweb_theme_custom_css_page(){
    require_once( get_template_directory() . '/inc/templates/custom-css.php' );
}



// Register Custom Post Type
function gsweb_custom_post_types_contributors() {

    // Contributors
	$labels = array(
		'name'                  => _x( 'Contributors', 'Contributors', 'gsweb' ),
		'singular_name'         => _x( 'Contributor', 'Contributor', 'gsweb' ),
		'menu_name'             => __( 'Contributors', 'gsweb' ),
		'name_admin_bar'        => __( 'Contributors', 'gsweb' ),
		'archives'              => __( 'Item Archives', 'gsweb' ),
		'attributes'            => __( 'Item Attributes', 'gsweb' ),
		'parent_item_colon'     => __( 'Parent Item:', 'gsweb' ),
		'all_items'             => __( 'All Items', 'gsweb' ),
		'add_new_item'          => __( 'New Contributor', 'gsweb' ),
		'add_new'               => __( 'New Contributor', 'gsweb' ),
		'new_item'              => __( 'New Contributor', 'gsweb' ),
		'edit_item'             => __( 'Edit Contributor', 'gsweb' ),
		'update_item'           => __( 'Update Contributor', 'gsweb' ),
		'view_item'             => __( 'View Contributor', 'gsweb' ),
		'view_items'            => __( 'View Contributor', 'gsweb' ),
		'search_items'          => __( 'Search Contributor', 'gsweb' ),
		'not_found'             => __( 'Not found', 'gsweb' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'gsweb' ),
		'featured_image'        => __( 'Featured Image', 'gsweb' ),
		'set_featured_image'    => __( 'Set featured image', 'gsweb' ),
		'remove_featured_image' => __( 'Remove featured image', 'gsweb' ),
		'use_featured_image'    => __( 'Use as featured image', 'gsweb' ),
		'insert_into_item'      => __( 'Insert into item', 'gsweb' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'gsweb' ),
		'items_list'            => __( 'Items list', 'gsweb' ),
		'items_list_navigation' => __( 'Items list navigation', 'gsweb' ),
		'filter_items_list'     => __( 'Filter items list', 'gsweb' ),
	);
	$args = array(
		'label'                 => __( 'Contributors PT', 'gsweb' ),
		'description'           => __( 'Here you can found all contributors of the westmark', 'gsweb' ),
		'labels'                => $labels,
		'supports'              => [ 'title' , 'editor' , 'thumbnail' , 'post-formats'],
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 1,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'post_type', $args );
}
// Register Custom Post Type
function gsweb_custom_post_types_events() {

    // Events
    $labels = array(
		'name'                  => _x( 'Events', 'Events', 'gsweb' ),
		'singular_name'         => _x( 'Event', 'event', 'gsweb' ),
		'menu_name'             => __( 'Events', 'gsweb' ),
		'name_admin_bar'        => __( 'Events', 'gsweb' ),
		'archives'              => __( 'Item Archives', 'gsweb' ),
		'attributes'            => __( 'Item Attributes', 'gsweb' ),
		'parent_item_colon'     => __( 'Parent Item:', 'gsweb' ),
		'all_items'             => __( 'All Items', 'gsweb' ),
		'add_new_item'          => __( 'New event', 'gsweb' ),
		'add_new'               => __( 'New event', 'gsweb' ),
		'new_item'              => __( 'New event', 'gsweb' ),
		'edit_item'             => __( 'Edit event', 'gsweb' ),
		'update_item'           => __( 'Update event', 'gsweb' ),
		'view_item'             => __( 'View event', 'gsweb' ),
		'view_items'            => __( 'View event', 'gsweb' ),
		'search_items'          => __( 'Search event', 'gsweb' ),
		'not_found'             => __( 'Not found', 'gsweb' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'gsweb' ),
		'featured_image'        => __( 'Featured Image', 'gsweb' ),
		'set_featured_image'    => __( 'Set featured image', 'gsweb' ),
		'remove_featured_image' => __( 'Remove featured image', 'gsweb' ),
		'use_featured_image'    => __( 'Use as featured image', 'gsweb' ),
		'insert_into_item'      => __( 'Insert into item', 'gsweb' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'gsweb' ),
		'items_list'            => __( 'Items list', 'gsweb' ),
		'items_list_navigation' => __( 'Items list navigation', 'gsweb' ),
		'filter_items_list'     => __( 'Filter items list', 'gsweb' ),
	);
	$args = array(
		'label'                 => __( 'Events PT', 'gsweb' ),
		'description'           => __( 'Here you can found all Events of the westmark', 'gsweb' ),
		'labels'                => $labels,
		'supports'              => [ 'title' , 'editor' , 'thumbnail' , 'post-formats'],
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 0,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'post_type_events', $args );
}


/**
 * Essential theme supports
 * */
function theme_setup(){
    /** automatic feed link*/
    add_theme_support( 'automatic-feed-links' );
 
    /** tag-title **/
    add_theme_support( 'title-tag' );
 
    /** post formats */
    $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
    add_theme_support( 'post-formats', $post_formats);
 
    /** post thumbnail **/
    add_theme_support( 'post-thumbnails' );
 
    /** HTML5 support **/
    add_theme_support( 'widgets', 'menus', 'responsive-embeds', 'core-block-patterns', 'wp-block-styles', 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	register_nav_menus(array(
        'footer-menu' => 'Footer Menu',
    ));
 
    /** refresh widgest **/
    add_theme_support( 'customize-selective-refresh-widgets' );
 
    /** custom log **/
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );
 
 
 
}