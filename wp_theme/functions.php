<?php 
function enqueue_versioned_script( $handle, $src = false, $deps = array(), $in_footer = false ) {
	wp_enqueue_script( $handle, get_stylesheet_directory_uri() . $src, $deps, filemtime( get_stylesheet_directory() . $src ), $in_footer );
}

function themename_scripts() {
	enqueue_versioned_style( 'myTheme', '/style.css' );
}
 
add_action( 'wp_enqueue_scripts', 'themename_scripts' );

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );
?>