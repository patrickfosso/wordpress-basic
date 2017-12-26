<?php
function talk_enqueue_scripts() {
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/main.css',  array(), false, 'all' );
  wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/assets/js/main.js',  array(), false, true );
  
}

add_action( 'wp_enqueue_scripts', 'talk_enqueue_scripts' );
