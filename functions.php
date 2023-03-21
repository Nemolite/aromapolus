<?php
/**
 * aromapolus - Дочерняя тема для темы envo-store
 * 
 */

defined( 'ABSPATH' ) || exit;

/**
 * Helper
 */
function show($param){
	echo "<pre>";
	print_r($param);
	echo "</per>";
}

/**
 * Подключение scipts and styles
 */ 
function aromapolus_scripts_style() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'aromapolus-style', get_stylesheet_directory_uri() .'/assets/css/aromapolus.css' );
	wp_enqueue_script( 'aromapolus-script', get_stylesheet_directory_uri() . '/assets/js/aromapolus.js', array(), $theme_version, true );
}
add_action( 'wp_enqueue_scripts', 'aromapolus_scripts_style' );