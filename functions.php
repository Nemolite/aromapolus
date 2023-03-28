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

/**
 * Регистрация полей для виджетов в футере
 */
/**
 * Левое поле
 */
register_sidebar(
	array(
		'name'          => esc_html__( 'Left Footer Area', 'aromapolus' ),
		'id'            => 'aromapolus_left_footer_area',
		'description'   => esc_html__( 'Левое поле в футере', 'aromapolus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s clearfix">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	)
);
/**
 * Среднее поле
 */
register_sidebar(
	array(
		'name'          => esc_html__( 'Middle Footer Area', 'aromapolus' ),
		'id'            => 'aromapolus_middle_footer_area',
		'description'   => esc_html__( 'Среднее поле в футере', 'aromapolus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s clearfix">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	)
);
/**
 * Правое поле
 */
register_sidebar(
	array(
		'name'          => esc_html__( 'Right Footer Area', 'aromapolus' ),
		'id'            => 'aromapolus_right_footer_area',
		'description'   => esc_html__( 'Правое поле в футере', 'aromapolus' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s clearfix">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title"><span>',
		'after_title'   => '</span></h3>',
	)
);