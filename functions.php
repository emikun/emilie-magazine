<?php

add_theme_support(	'menus'	);
add_theme_support(	'post-thumbnails'	);

function wpt_excerpt_length( $length ) {
	return 40;
}
add_filter(	'excerpt_length', 'wpt_excerpt_length', 999	);

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
	wp_enqueue_style(	'fonts_css', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,600,300italic|Righteous');
}

add_action( 'wp_enqueue_scripts', 'wpm_theme_styles' );

function wpm_theme_js() {
	wp_enqueue_script(	'modernizr_js', get_template_directory_uri() . '/js/modernizr.min.js', '','', false);
	wp_enqueue_script(	'wow_js', get_template_directory_uri() . '/js/wow.min.js', array(	'jquery'	),'', false);
	wp_enqueue_script(	'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array(	'jquery'	), '', false);
	wp_enqueue_script(	'matchheight_js', get_template_directory_uri() . '/js/match-height.min.js', array(	'jquery'	),'', false);
}

add_action( 'wp_enqueue_scripts', 'wpm_theme_js' );

if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Filter Reviews',
		'id' => 'filter_reviews',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
	register_sidebar(array(
		'name'=> 'Site Controls',
		'id' => 'site_controls',
		'before_widget' => '<div class="site-control">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	));
}

add_filter(	'mce_buttons_2', 'my_mce_buttons_2');

function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect');
	return $buttons;
}

add_filter( 'tiny_mce_before_init', 'my_mce_before_init' );

function my_mce_before_init( $settings ) {

    $style_formats = array(
    	array(
    		'title' => 'Citation',
    		'selector' => 'a',
    		'classes' => 'citation'
    	),
        array(
        	'title' => 'Pullquote',
        	'block' => 'blockquote',
        	'classes' => 'pull-quote'
        ),
        array(
        	'title' => 'Pullimage',
        	'block' => 'selector',
        	'class'=> 'img-full'
        ),
        array(
        	'title' => 'Post Image',
        	'block' => 'div',
        	'class'=> 'pull-image'
        )
    );
    $settings['style_formats'] = json_encode( $style_formats );
    return $settings;
}

add_action( 'admin_init', 'add_my_editor_style' );

function add_my_editor_style() {
	add_editor_style();
}

?>