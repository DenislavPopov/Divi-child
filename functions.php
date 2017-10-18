<?php
function my_theme_enqueue_styles() {

    $parent_style = 'divi-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_scripts_enqueue() {
	// register scripts
    wp_register_script( 'bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), NULL, true );
    wp_register_script( 'tween-max-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js', array('jquery'), NULL, true );
	
	//Hosted JS Resources uncomment if CDN is down and comment the CDN!
	/****************************************************************************/
	//wp_register_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap/bootstrap.min.js', array('jquery'), NULL, true );
    //wp_register_script( 'tween-max-js', get_stylesheet_directory_uri() . '/assets/js/tweenMax/TweenMax.min.js', array('jquery'), NULL, true );
	/****************************************************************************/
	
    wp_register_script( 'custom-js', get_stylesheet_directory_uri() . '/assets/js/custom/custom.js', array('jquery'), NULL, true );
    
	// register styles
    wp_register_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', false, NULL, 'all' );
    wp_register_style( 'font-awesome-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, NULL, 'all' );
	
	//Hosted CSS Resources uncomment if CDN is down and comment the CDN!
	/****************************************************************************/
	//wp_register_style( 'bootstrap-css', get_stylesheet_directory_uri() . '/assets/css/bootstrap/bootstrap.min.css' );
	//wp_register_style( 'font-awesome-css', get_stylesheet_directory_uri() . '/assets/css/fontAwesome/font-awesome.min.css' );
	/****************************************************************************/
	
	//include scripts
    wp_enqueue_script( 'bootstrap-js' );
    wp_enqueue_script( 'tween-max-js' );
    wp_enqueue_script( 'custom-js' );
	
	//include styles
    wp_enqueue_style( 'bootstrap-css' );
    wp_enqueue_style( 'font-awesome-css' );
}
add_action( 'wp_enqueue_scripts', 'my_scripts_enqueue' );

//Enable plugin autoupdates
add_filter( 'auto_update_plugin', '__return_true' );
?>