<?php 
function enqueue() {
	$cache_bust = '202107160185';
	
	wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
	// wp_enqueue_style('slick_css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css');
	// wp_enqueue_style('slick_css_all', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css');
	wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome/css/all.min.css');
	wp_enqueue_style('main_style', get_template_directory_uri() . '/assets/css/style.css', array(), $cache_bust);

	wp_enqueue_script( 'jquery', 'https://code.jquery.com/jquery-3.4.1.min.js', '', '', true);
	// wp_enqueue_script( 'slick_js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'main_js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );
}
add_action('wp_enqueue_scripts', 'enqueue');

function enqueue_theme_setup(){
	// LOGO
	add_theme_support( 'custom-logo' );

	// NAVIGATION
	add_theme_support( 'menus' );
	register_nav_menu( 'main-menu', 'Main Menu' );
	register_nav_menu( 'footer-menu-1', 'Footer Menu 1' );
	register_nav_menu( 'footer-menu-2', 'Footer Menu 2' );

	// IMAGE SIZES
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'small', 300, 300 );
	add_image_size( 'small-medium', 500, 500 );
	add_image_size( 'extra-large', 1536, 1536 );
	add_image_size( 'double-extra-large', 2048, 2048 );
}
add_action( 'init', 'enqueue_theme_setup' );


// ACF OPTION SUPPORT
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// ALLOW SVG UPLOAD
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');