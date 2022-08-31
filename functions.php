<?php
 
//  editor styles
add_theme_support('editor-styles');

add_action( 'enqueue_block_editor_assets', function() {

	wp_enqueue_style('editor-styles', get_theme_file_uri(). '/editor-styles.css', array(), wp_get_theme()->get( 'Version' ));

	
} );


//styles + scripts
function fse_styles_and_scripts() {

	wp_enqueue_style('fse-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ));
	wp_enqueue_style('vite-build-style', get_theme_file_uri(). '/front/dist/index.css', array(), wp_get_theme()->get( 'Version' ));

	wp_enqueue_script('vite-build-js', get_theme_file_uri(). '/front/dist/index.js', array('jquery'), wp_get_theme()->get( 'Version' ), false);
	
}
add_action( 'wp_enqueue_scripts', 'fse_styles_and_scripts' );


// acf disable update notification on front
add_filter('site_transient_update_plugins', 'my_remove_update_nag');

function my_remove_update_nag($value) {

 unset($value->response[ 'advanced-custom-fields-pro/acf.php' ]);
 return $value;
 
}

// blocks 

include 'inc/blocks/slider/slider.php';