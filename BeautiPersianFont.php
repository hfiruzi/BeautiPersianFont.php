<?php
/*
Plugin Name: fontadminwp
Plugin URI: heycode.ir
Description: admin font
Author: hamidfiruzi
Author URI: https://heycode.ir
Version: 1.0.0
*/

if ( !defined('ABSPATH') ) {
    exit;
}

// WordPress Custom Font @ Admin
function admin_custom_font() {
   echo '<style>body, #wpadminbar *:not([class="ab-icon"]), .rtl h1, .rtl h2, .rtl h3, .rtl h4, .rtl h5, .rtl h6 .wp-core-ui, .media-menu, .media-frame *, .media-modal *{font-family:"Sans",sans-serif !important;}</style>' . PHP_EOL;
}
add_action( 'admin_head', 'admin_custom_font' );

// WordPress Custom Font @ Admin Frontend Toolbar
function admin_custom_font_frontend_toolbar() {
    if(current_user_can('administrator')) {
        echo '<style>#wpadminbar *:not([class="ab-icon"]){font-family:"Sans",sans-serif !important;}</style>' . PHP_EOL;
    }
}
add_action( 'wp_head', 'admin_custom_font_frontend_toolbar' );

// WordPress Custom Font @ Admin Login
function admin_custom_font_login_page() {
    if(stripos($_SERVER["SCRIPT_NAME"], strrchr(wp_login_url(), '/')) !== false) {
        echo '<style>body{font-family:"Sans",sans-serif !important;}</style>' . PHP_EOL;
    }
}
add_action( 'login_head', 'admin_custom_font_login_page' );
