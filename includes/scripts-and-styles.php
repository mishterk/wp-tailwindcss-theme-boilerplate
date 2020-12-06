<?php


use WpTailwindCssThemeBoilerplate\Mix;


add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	wp_register_style( 'app', Mix::resolve( 'css/app.css' ), [], false );
	wp_register_script( 'app', Mix::resolve( 'js/app.js' ), [], false, true );

	// enqueue global assets
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'app' );
	wp_enqueue_script( 'app' );

} );
