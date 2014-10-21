<?php

add_theme_support(	'menus'	);

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' => __('Primary Menu'),
			'columns-menu' => __('Columns Menu'),
			'footer-company-menu' => __('Footer Company Menu'),
			'footer-find-menu' => __('Footer Find Menu')
		)
	);
}

add_action(	'init', 'register_theme_menus');

function wpm_theme_styles() {
	wp_enqueue_style(	'normalize_css', get_template_directory_uri() . '/css/normalize.min.css');
	wp_enqueue_style(	'bootstrap_css', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css');
	wp_enqueue_style(	'animate_css', get_template_directory_uri() . '/css/animate.min.css');
	wp_enqueue_style(	'fontawesome_css', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css');
	wp_enqueue_style(	'main_css', get_template_directory_uri() . '/style.css');
}

add_action( 'wp_enqueue_scripts', 'wpm_theme_styles' );

function wpm_theme_js() {

	wp_enqueue_script(	'modernizr_js', get_template_directory_uri() . '/js/modernizr.min.js', '','', false);
	wp_enqueue_script(	'wow_js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'),'', true);

}

add_action( 'wp_enqueue_scripts', 'wpm_theme_js' );

?>