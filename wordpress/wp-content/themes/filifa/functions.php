<?php
/**
*dutchweek.com functions and definitions
*
*@package filifa.nl 
*@since filifa.nl
*/

/* add styles*/
function add_theme_styles () {
	wp_enqueue_style ( 'main', get_template_directory_uri () . '/css/main.css') ;
	wp_enqueue_style ( 'icons', 'font-awesome.min', get_template_directory_uri () . '/css/font-awesome.min.css') ;
	wp_enqueue_style ( 'fonts', 'https://fonts.googleapis.com/css?family=Neuton:400,700,300|Mr+De+Haviland') ;
}
add_action( 'wp_enqueue_scripts', 'add_theme_styles' );

/* add js*/
function add_theme_scripts () {
	/* laad in de header voor SVG*/
	wp_enqueue_script ( 'snap.svg-min-js', get_template_directory_uri() . '/js/snap.svg-min.js', array ('jquery'), false, false ) ;
	wp_enqueue_script ( 'modernizr.custom-js', get_template_directory_uri() . '/js/modernizr.custom.js', array ('jquery'), false, false ) ;
	/* laad in de footer*/
	wp_enqueue_script ( 'bootstrap.min-js', get_template_directory_uri() . '/js/bootstrap.min.js', array ('jquery'), false, true ) ;

	wp_enqueue_script ( 'map-js', get_template_directory_uri() . '/js/map.js', array ('jquery'), false, true ) ;
	wp_enqueue_script ( 'maps.googleapis-js', 'https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false', array ('jquery'), false, true ) ;

	wp_enqueue_script ( 'nav-scroll-js', get_template_directory_uri() . '/js/nav-scroll.js', array ('jquery'), false, true ) ;

	wp_enqueue_script ( 'smooth-scroll-js', get_template_directory_uri() . '/js/smooth-scroll.js', array ('jquery'), false, true ) ;	

	wp_enqueue_script ( 'scrollspy-js', get_template_directory_uri() . '/js/scrollspy.js', array ('jquery'), false, true ) ;	

	wp_enqueue_script ( 'scrollspy-js', get_template_directory_uri() . '/js/scrollspy.js', array ('jquery'), false, true ) ;	

	wp_enqueue_script ( 'jquery-migrate-1.2.1.min-js', 'http://code.jquery.com/jquery-migrate-1.2.1.min.js', array ('jquery'), false, true ) ;
	wp_enqueue_script ( 'slick.min-js', get_template_directory_uri() . '/js/slick.min.js', array ('jquery'), false, true ) ;
	wp_enqueue_script ( 'slick-slider-syncing-js', get_template_directory_uri() . '/js/slick-slider-syncing.js', array ('jquery'), false, true ) ;

	wp_enqueue_script ( 'svgicons-config-js', get_template_directory_uri() . '/js/svgicons-config.js', array ('jquery'), false, true ) ;
	wp_enqueue_script ( 'svgicons-js', get_template_directory_uri() . '/js/svgicons.js', array ('jquery'), false, true ) ;
	wp_enqueue_script ( 'functioncall-svg-js', get_template_directory_uri() . '/js/functioncall-svg.js', array ('jquery'), false, true ) ;

	wp_enqueue_script ( 'slideout-js', get_template_directory_uri() . '/js/slideout.js', array ('jquery'), false, true ) ;
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

/* add bootstrap navwalker*/
// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'THEMENAME' ),
	) );

function create_post_type() {
  register_post_type( 'recepten',
    array(
      'labels' => array(
        'name' => __( 'Recepten' ),
        'singular_name' => __( 'Recepten' )
    ),
  'public' => true,
  'has_archive' => true,
  'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes')
    )
  );
}
add_action( 'init', 'create_post_type' );

add_theme_support( 'post-thumbnails' ); 

?>