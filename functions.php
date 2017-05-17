<?php

function child_enqueue_styles() {

	wp_enqueue_style( 'ast-child-style', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), AST_THEME_VERSION, 'all' );

}

add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );

