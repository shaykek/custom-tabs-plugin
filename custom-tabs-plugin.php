<?php
/*
Plugin Name: custom-tabs-plugin
Description: A simple plugin to display tabs using a shortcode from an ACF repeater field.
Version: 1.0
Author: Shay Konfino
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'CUSTOM_TABS_PLUGIN_VERSION', '1.0.0' );


require_once plugin_dir_path( __FILE__ ) . 'includes/shortcode.php';

function custom_tabs_plugin_register_shortcode() {
	add_shortcode( 'custom_tabs', 'custom_tabs_plugin_shortcode' );
}
add_action( 'init', 'custom_tabs_plugin_register_shortcode' );

// Enqueue styles and scripts
function custom_tabs_plugin_enqueue_scripts() {
	wp_enqueue_style( 'custom-tabs-plugin-fonts', 'https://use.typekit.net/wuz0gtr.css', array(), CUSTOM_TABS_PLUGIN_VERSION );
	wp_enqueue_style( 'custom-tabs-plugin-style', plugin_dir_url( __FILE__ ) . 'assets/style.css', array(), CUSTOM_TABS_PLUGIN_VERSION );
	wp_enqueue_script( 'custom-tabs-plugin-script', plugin_dir_url( __FILE__ ) . 'assets/scripts.js', array( 'jquery' ), CUSTOM_TABS_PLUGIN_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'custom_tabs_plugin_enqueue_scripts' );
