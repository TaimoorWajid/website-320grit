<?php 

add_action( 'wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles() {
		
		$nectar_theme_version = nectar_get_theme_version();
		wp_enqueue_style( 'salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version );
		
    if ( is_rtl() ) {
   		wp_enqueue_style(  'salient-rtl',  get_template_directory_uri(). '/rtl.css', array(), '1', 'screen' );
		}
}


/*
|--------------------------------------------------------------------------
| Custom Assets
|--------------------------------------------------------------------------
*/

function grit_enqueue_assets() {

    wp_enqueue_style(
        'grit-global',
        get_stylesheet_directory_uri() . '/assets/css/global.css',
        array('salient-child-style'),
        '1.0'
    );

    wp_enqueue_style(
        'grit-header',
        get_stylesheet_directory_uri() . '/assets/css/header.css',
        array('grit-global'),
        '1.0'
    );

    wp_enqueue_style(
        'grit-mega-menu',
        get_stylesheet_directory_uri() . '/assets/css/mega-menu.css',
        array('grit-header'),
        '1.0'
    );

    wp_enqueue_style(
        'grit-home',
        get_stylesheet_directory_uri() . '/assets/css/home.css',
        array('grit-global'),
        '1.0'
    );

    wp_enqueue_style(
        'grit-animations',
        get_stylesheet_directory_uri() . '/assets/css/animations.css',
        array('grit-global'),
        '1.0'
    );

    wp_enqueue_script(
        'grit-header',
        get_stylesheet_directory_uri() . '/assets/js/header.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_script(
        'grit-mega-menu',
        get_stylesheet_directory_uri() . '/assets/js/mega-menu.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_script(
        'grit-animations',
        get_stylesheet_directory_uri() . '/assets/js/animations.js',
        array('jquery'),
        '1.0',
        true
    );

}

add_action('wp_enqueue_scripts', 'grit_enqueue_assets', 101);


?>