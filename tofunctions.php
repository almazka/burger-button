<?php

// require files
require_once(get_stylesheet_directory() . '/includes/wp-bootstrap-navwalker.php');

/* Register scripts and styles */
add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_scripts() {

	/* include styles */
	wp_register_style( 'animateStyles', get_stylesheet_directory_uri() . '/css/animate.css' );
	wp_register_style( 'hmbrgrStyles', get_stylesheet_directory_uri() . '/css/hmbrgr.min.css' );

	/* include scripts */
	wp_register_script( 'hmbrgrScripts', get_stylesheet_directory_uri() . '/js/jquery.hmbrgr.min.js', array('jquery') );
	wp_register_script( 'mainScripts', get_stylesheet_directory_uri() . '/js/main.js', array('jquery') );

	wp_enqueue_style( 'animateStyles' );
	wp_enqueue_style( 'hmbrgrStyles' );

	wp_enqueue_script( 'hmbrgrScripts' );
	wp_enqueue_script( 'mainScripts' );
}