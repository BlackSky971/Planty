<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'astra-theme-css' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// Hook to add a custom menu item
add_action('wp_nav_menu_items', 'add_admin_menu_link', 10, 2);

function add_admin_menu_link($items, $args) {
    // Check if the user is logged in
    if (is_user_logged_in() && $args->menu === 'menu') {
        // Add the admin link
        $admin_link = '<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item current_page_item parent hfe-creative-menu"><a class="hfe-menu-item" href="' . admin_url() . '">Admin</a></li>';
        $items .= $admin_link;
    }
    return $items;
}
// Optional: Add a custom menu location
add_action('init', 'register_custom_menu_location');
function register_custom_menu_location() {
    register_nav_menu('primary', __('Primary Menu'));
}
// responsive menu
function set_container_class($args)
{
	$args['container_class'] = str_replace(' ', '-', $args['theme_location']) . '-nav';
	return $args;
}
add_filter('wp_nav_menu_args', 'set_container_class');