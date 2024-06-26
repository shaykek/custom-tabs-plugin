<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function custom_tabs_plugin_shortcode( $atts ) {

	ob_start();

	$template_path = plugin_dir_path( __FILE__ ) . 'tabs-template.php';

	if ( file_exists( $template_path ) ) {
		include $template_path;
	}

	return ob_get_clean();
}

