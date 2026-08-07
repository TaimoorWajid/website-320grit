<?php

add_action('wp_enqueue_scripts', 'salient_child_enqueue_styles', 100);

function salient_child_enqueue_styles()
{

    $nectar_theme_version = nectar_get_theme_version();
    wp_enqueue_style('salient-child-style', get_stylesheet_directory_uri() . '/style.css', '', $nectar_theme_version);

    if (is_rtl()) {
        wp_enqueue_style('salient-rtl',  get_template_directory_uri() . '/rtl.css', array(), '1', 'screen');
    }
}

function grit_asset_version($relative_path)
{
    $path = get_stylesheet_directory() . $relative_path;
    return file_exists($path) ? filemtime($path) : '1.0';
}

function grit_enqueue_assets()
{

    // CSS
    wp_enqueue_style(
        'grit-global',
        get_stylesheet_directory_uri() . '/assets/css/global.css',
        array(),
        grit_asset_version('/assets/css/global.css')
    );

    wp_enqueue_style(
        'grit-header',
        get_stylesheet_directory_uri() . '/assets/css/header.css',
        array('grit-global'),
        grit_asset_version('/assets/css/header.css')
    );

    wp_enqueue_style(
        'grit-mega-menu',
        get_stylesheet_directory_uri() . '/assets/css/mega-menu.css',
        array('grit-header'),
        grit_asset_version('/assets/css/mega-menu.css')
    );

    wp_enqueue_style(
        'grit-home',
        get_stylesheet_directory_uri() . '/assets/css/home.css',
        array('grit-global'),
        grit_asset_version('/assets/css/home.css')
    );

    wp_enqueue_style(
        'grit-animations',
        get_stylesheet_directory_uri() . '/assets/css/animations.css',
        array('grit-global'),
        grit_asset_version('/assets/css/animations.css')
    );

    wp_enqueue_style(
        'grit-buttons',
        get_stylesheet_directory_uri() . '/assets/css/buttons.css',
        array('grit-global'),
        grit_asset_version('/assets/css/buttons.css')
    );


    wp_enqueue_style(
        'grit-hero-section',
        get_stylesheet_directory_uri() . '/assets/css/hero-section.css',
        array('grit-global'),
        grit_asset_version('/assets/css/hero-section.css')
    );

    wp_enqueue_style(
        'grit-feature-list-icon',
        get_stylesheet_directory_uri() . '/assets/css/feature-list-icon.css',
        array('grit-global'),
        grit_asset_version('/assets/css/feature-list-icon.css')
    );

    wp_enqueue_style(
        'grit-project-inquiry-form',
        get_stylesheet_directory_uri() . '/assets/css/project-inquiry-form.css',
        array('grit-global'),
        grit_asset_version('/assets/css/project-inquiry-form.css')
    );

    // JS

    wp_enqueue_script(
        'grit-header',
        get_stylesheet_directory_uri() . '/assets/js/header.js',
        array('jquery'),
        grit_asset_version('/assets/js/header.js'),
        true
    );

    wp_enqueue_script(
        'grit-mega-menu',
        get_stylesheet_directory_uri() . '/assets/js/mega-menu.js',
        array('jquery'),
        grit_asset_version('/assets/js/mega-menu.js'),
        true
    );

    wp_enqueue_script(
        'grit-animations',
        get_stylesheet_directory_uri() . '/assets/js/animations.js',
        array('jquery'),
        grit_asset_version('/assets/js/animations.js'),
        true
    );

    wp_enqueue_script(
        'grit-project-inquiry-form',
        get_stylesheet_directory_uri() . '/assets/js/project-inquiry-form.js',
        array('jquery'),
        grit_asset_version('/assets/js/project-inquiry-form.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'grit_enqueue_assets');


add_shortcode('grit_commercial', 'grit_commercial_render');

function grit_commercial_render($atts) {
    static $loaded = false;
    if (!$loaded) {
        $theme_url = get_stylesheet_directory_uri();
        wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', array(), '3.12.5', true);
        wp_enqueue_script('gsap-st', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', array('gsap'), '3.12.5', true);
        wp_enqueue_script('three-js', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', array(), 'r128', true);
        wp_enqueue_script('lenis', 'https://unpkg.com/lenis@1.1.13/dist/lenis.min.js', array(), '1.1.13', true);
        wp_enqueue_style('grit-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap', array(), null);
        wp_enqueue_style('grit-commercial-css', $theme_url . '/assets/css/commercial.css', array('grit-fonts'), '1.0.0');
        wp_enqueue_script('grit-commercial-js', $theme_url . '/assets/js/commercial.js', array('gsap', 'gsap-st', 'three-js', 'lenis'), '1.0.0', true);
        $loaded = true;
    }
    $atts = shortcode_atts(array('hero_image' => '', 'case_image' => ''), $atts, 'grit_commercial');
    ob_start();
    $grit_atts = $atts;
    include(get_stylesheet_directory() . '/template-parts/components/commercial.php');
    return ob_get_clean();
}