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

    wp_enqueue_style(
        'grit-hero',
        get_stylesheet_directory_uri() . '/assets/css/bid-build-service/hero.css',
        array('grit-global'),
        grit_asset_version('/assets/css/bid-build-service/hero.css')
    );

    wp_enqueue_style(
        'grit-why-bid-build',
        get_stylesheet_directory_uri() . '/assets/css/bid-build-service/why-bid-build.css',
        array('grit-global'),
        grit_asset_version('/assets/css/bid-build-service/why-bid-build.css')
    );

    wp_enqueue_style(
        'grit-what-is-bid-build',
        get_stylesheet_directory_uri() . '/assets/css/bid-build-service/what-is-bid-build.css',
        array('grit-global'),
        grit_asset_version('/assets/css/bid-build-service/what-is-bid-build.css')
    );

    wp_enqueue_style(
        'grit-expert-witness',
        get_stylesheet_directory_uri() . '/assets/css/expert-witness/expert-witness.css',
        array('grit-global'),
        grit_asset_version('/assets/css/expert-witness/expert-witness.css')
    );

    wp_enqueue_style(
        'grit-forensic-accounting',
        get_stylesheet_directory_uri() . '/assets/css/forensic-accounting/forensic-accounting.css',
        array('grit-global'),
        grit_asset_version('/assets/css/forensic-accounting/forensic-accounting.css')
    );

    wp_enqueue_style(
        'grit-design-build',
        get_stylesheet_directory_uri() . '/assets/css/design-build/design-build.css',
        array('grit-global'),
        grit_asset_version('/assets/css/design-build/design-build.css')
    );

    wp_enqueue_style(
        'grit-healthcare',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/healthcare.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/healthcare.css')
    );

    wp_enqueue_style(
        'grit-railroads',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/railroads.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/railroads.css')
    );

    wp_enqueue_style(
        'grit-advanced-technology',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/advanced-technology.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/advanced-technology.css')
    );

    wp_enqueue_style(
        'grit-behavioral-health',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/behavioral-health.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/behavioral-health.css')
    );

    wp_enqueue_style(
        'grit-education',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/education.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/education.css')
    );

    wp_enqueue_style(
        'grit-hospitality',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/hospitality.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/hospitality.css')
    );

    wp_enqueue_style(
        'grit-tenant-improvement',
        get_stylesheet_directory_uri() . '/assets/css/markets-we-served/tenant-improvement.css',
        array('grit-global'),
        grit_asset_version('/assets/css/markets-we-served/tenant-improvement.css')
    );

    wp_enqueue_style(
        'grit-awards',
        get_stylesheet_directory_uri() . '/assets/css/about-us/awards.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/awards.css')
    );

    wp_enqueue_style(
        'grit-community',
        get_stylesheet_directory_uri() . '/assets/css/about-us/community.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/community.css')
    );

    wp_enqueue_style(
        'grit-our-leadership',
        get_stylesheet_directory_uri() . '/assets/css/about-us/our-leadership.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/our-leadership.css')
    );

    wp_enqueue_style(
        'grit-our-story',
        get_stylesheet_directory_uri() . '/assets/css/about-us/our-story.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/our-story.css')
    );

    wp_enqueue_style(
        'grit-our-values',
        get_stylesheet_directory_uri() . '/assets/css/about-us/our-values.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/our-values.css')
    );

    wp_enqueue_style(
        'grit-quality',
        get_stylesheet_directory_uri() . '/assets/css/about-us/quality.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/quality.css')
    );

    wp_enqueue_style(
        'grit-safety',
        get_stylesheet_directory_uri() . '/assets/css/about-us/safety.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/safety.css')
    );

    wp_enqueue_style(
        'grit-sustainability',
        get_stylesheet_directory_uri() . '/assets/css/about-us/sustainability.css',
        array('grit-global'),
        grit_asset_version('/assets/css/about-us/sustainability.css')
    );

    wp_enqueue_style(
        'grit-owner-centric',
        get_stylesheet_directory_uri() . '/assets/css/our-approach/owner-centric.css',
        array('grit-global'),
        grit_asset_version('/assets/css/our-approach/owner-centric.css')
    );

    wp_enqueue_style(
        'grit-california',
        get_stylesheet_directory_uri() . '/assets/css/our-locations/california.css',
        array('grit-global'),
        grit_asset_version('/assets/css/our-locations/california.css')
    );

    wp_enqueue_style(
        'grit-token',
        get_stylesheet_directory_uri() . '/assets/css/token.css',
        array('grit-global'),
        grit_asset_version('/assets/css/token.css')
    );

     wp_enqueue_style(
        'grit-animation',
        get_stylesheet_directory_uri() . '/assets/css/animation.css',
        array('grit-global'),
        grit_asset_version('/assets/css/animation.css')
    );

     wp_enqueue_style(
        'grit-utilities',
        get_stylesheet_directory_uri() . '/assets/css/utilities.css',
        array('grit-global'),
        grit_asset_version('/assets/css/utilities.css')
    );

    wp_enqueue_style(
        'grit-sidenav',
        get_stylesheet_directory_uri() . '/assets/css/sidenav.css',
        array('grit-global'),
        grit_asset_version('/assets/css/sidenav.css')
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

    wp_enqueue_script(
        'grit-hero',
        get_stylesheet_directory_uri() . '/assets/js/bid-build-service/hero.js',
        array('jquery'),
        grit_asset_version('/assets/js/bid-build-service/hero.js'),
        true
    );


    wp_enqueue_script(
        'grit-why-bid-build',
        get_stylesheet_directory_uri() . '/assets/js/bid-build-service/why-bid-build.js',
        array('jquery'),
        grit_asset_version('/assets/js/bid-build-service/why-bid-build.js'),
        true
    );

    wp_enqueue_script(
        'grit-what-is-bid-build',
        get_stylesheet_directory_uri() . '/assets/js/bid-build-service/what-is-bid-build.js',
        array('jquery'),
        grit_asset_version('/assets/js/bid-build-service/what-is-bid-build.js'),
        true
    );

    wp_enqueue_script(
        'grit-expert-witness',
        get_stylesheet_directory_uri() . '/assets/js/expert-witness/expert-witness.js',
        array('jquery'),
        grit_asset_version('/assets/js/expert-witness/expert-witness.js'),
        true
    );

    wp_enqueue_script(
        'grit-forensic-accounting',
        get_stylesheet_directory_uri() . '/assets/js/forensic-accounting/forensic-accounting.js',
        array('jquery'),
        grit_asset_version('/assets/js/forensic-accounting/forensic-accounting.js'),
        true
    );

    wp_enqueue_script(
        'grit-design-build',
        get_stylesheet_directory_uri() . '/assets/js/design-build/design-build.js',
        array('jquery'),
        grit_asset_version('/assets/js/design-build/design-build.js'),
        true
    );

    wp_enqueue_script(
        'grit-healthcare',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/healthcare.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/healthcare.js'),
        true
    );

    wp_enqueue_script(
        'grit-railroads',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/railroads.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/railroads.js'),
        true
    );

    wp_enqueue_script(
        'grit-advanced-technology',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/advanced-technology.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/advanced-technology.js'),
        true
    );

    wp_enqueue_script(
        'grit-behavioral-health',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/behavioral-health.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/behavioral-health.js'),
        true
    );

    wp_enqueue_script(
        'grit-education',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/education.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/education.js'),
        true
    );

    wp_enqueue_script(
        'grit-hospitality',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/hospitality.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/hospitality.js'),
        true
    );

    wp_enqueue_script(
        'grit-tenant-improvement',
        get_stylesheet_directory_uri() . '/assets/js/markets-we-served/tenant-improvement.js',
        array('jquery'),
        grit_asset_version('/assets/js/markets-we-served/tenant-improvement.js'),
        true
    );

    wp_enqueue_script(
        'grit-awards',
        get_stylesheet_directory_uri() . '/assets/js/about-us/awards.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/awards.js'),
        true
    );

    wp_enqueue_script(
        'grit-community',
        get_stylesheet_directory_uri() . '/assets/js/about-us/community.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/community.js'),
        true
    );

    wp_enqueue_script(
        'grit-our-leadership',
        get_stylesheet_directory_uri() . '/assets/js/about-us/our-leadership.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/our-leadership.js'),
        true
    );

    wp_enqueue_script(
        'grit-our-story',
        get_stylesheet_directory_uri() . '/assets/js/about-us/our-story.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/our-story.js'),
        true
    );

    wp_enqueue_script(
        'grit-our-values',
        get_stylesheet_directory_uri() . '/assets/js/about-us/our-values.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/our-values.js'),
        true
    );

    wp_enqueue_script(
        'grit-quality',
        get_stylesheet_directory_uri() . '/assets/js/about-us/quality.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/quality.js'),
        true
    );

    wp_enqueue_script(
        'grit-safety',
        get_stylesheet_directory_uri() . '/assets/js/about-us/safety.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/safety.js'),
        true
    );

    wp_enqueue_script(
        'grit-sustainability',
        get_stylesheet_directory_uri() . '/assets/js/about-us/sustainability.js',
        array('jquery'),
        grit_asset_version('/assets/js/about-us/sustainability.js'),
        true
    );

    wp_enqueue_script(
        'grit-owner-centric',
        get_stylesheet_directory_uri() . '/assets/js/our-approach/owner-centric.js',
        array('jquery'),
        grit_asset_version('/assets/js/our-approach/owner-centric.js'),
        true
    );

    wp_enqueue_script(
        'grit-california',
        get_stylesheet_directory_uri() . '/assets/js/our-locations/california.js',
        array('jquery'),
        grit_asset_version('/assets/js/our-locations/california.js'),
        true
    );

    wp_enqueue_script(
        'grit-helper',
        get_stylesheet_directory_uri() . '/assets/js/helper.js',
        array('jquery'),
        grit_asset_version('/assets/js/helper.js'),
        true
    );

    wp_enqueue_script(
        'grit-sidenav',
        get_stylesheet_directory_uri() . '/assets/js/sidenav.js',
        array('jquery'),
        grit_asset_version('/assets/js/sidenav.js'),
        true
    );
}

add_action('wp_enqueue_scripts', 'grit_enqueue_assets');


add_shortcode('grit_commercial', 'grit_commercial_render');

function grit_commercial_render($atts) {
    static $loaded = false;
    if (!$loaded) {
        $theme_url = get_stylesheet_directory_uri();
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


function grit_bid_build_shortcode() {
    ob_start();

    get_template_part('template-parts/components/bid-build-service/bid-build');

    return ob_get_clean();
}
add_shortcode('grit_bid_build', 'grit_bid_build_shortcode');

function grit_expert_witness_shortcode() {
    ob_start();

    get_template_part('template-parts/components/expert-witness/expert-witness');

    return ob_get_clean();
}
add_shortcode('grit_expert_witness', 'grit_expert_witness_shortcode');

function grit_forensic_accounting_shortcode() {
    ob_start();

    get_template_part('template-parts/components/forensic-accounting/forensic-accounting');

    return ob_get_clean();
}
add_shortcode('grit_forensic_accounting', 'grit_forensic_accounting_shortcode');

function grit_design_build_shortcode() {
    ob_start();

    get_template_part('template-parts/components/design-build/design-build');

    return ob_get_clean();
}
add_shortcode('grit_design_build', 'grit_design_build_shortcode');

function grit_home_page_faqs_shortcode() {
    ob_start();

    get_template_part('template-parts/home/home-page-faqs');

    return ob_get_clean();
}
add_shortcode('grit_home_page_faqs', 'grit_home_page_faqs_shortcode');

function grit_healthcare_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/healthcare');

    return ob_get_clean();
}
add_shortcode('grit_healthcare', 'grit_healthcare_shortcode');

function grit_railroads_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/railroads');

    return ob_get_clean();
}
add_shortcode('grit_railroads', 'grit_railroads_shortcode');

function grit_advanced_technology_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/advanced-technology');

    return ob_get_clean();
}
add_shortcode('grit_advanced_technology', 'grit_advanced_technology_shortcode');

function grit_behavioral_health_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/behavioral-health');

    return ob_get_clean();
}
add_shortcode('grit_behavioral_health', 'grit_behavioral_health_shortcode');

function grit_education_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/education');

    return ob_get_clean();
}
add_shortcode('grit_education', 'grit_education_shortcode');

function grit_hospitality_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/hospitality');

    return ob_get_clean();
}
add_shortcode('grit_hospitality', 'grit_hospitality_shortcode');

function grit_tenant_improvement_shortcode() {
    ob_start();

    get_template_part('template-parts/components/markets-we-served/tenant-improvement');

    return ob_get_clean();
}
add_shortcode('grit_tenant_improvement', 'grit_tenant_improvement_shortcode');

function grit_awards_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/awards');

    return ob_get_clean();
}
add_shortcode('grit_awards', 'grit_awards_shortcode');

function grit_community_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/community');

    return ob_get_clean();
}
add_shortcode('grit_community', 'grit_community_shortcode');

function grit_our_leadership_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/our-leadership');

    return ob_get_clean();
}
add_shortcode('grit_our_leadership', 'grit_our_leadership_shortcode');

function grit_our_story_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/our-story');

    return ob_get_clean();
}
add_shortcode('grit_our_story', 'grit_our_story_shortcode');

function grit_our_values_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/our-values');

    return ob_get_clean();
}
add_shortcode('grit_our_values', 'grit_our_values_shortcode');

function grit_quality_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/quality');

    return ob_get_clean();
}
add_shortcode('grit_quality', 'grit_quality_shortcode');

function grit_safety_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/safety');

    return ob_get_clean();
}
add_shortcode('grit_safety', 'grit_safety_shortcode');

function grit_sustainability_shortcode() {
    ob_start();

    get_template_part('template-parts/components/about-us/sustainability');

    return ob_get_clean();
}
add_shortcode('grit_sustainability', 'grit_sustainability_shortcode');

function grit_owner_centric_shortcode() {
    ob_start();

    get_template_part('template-parts/components/our-approach/owner-centric');

    return ob_get_clean();
}
add_shortcode('grit_owner_centric', 'grit_owner_centric_shortcode');

function grit_california_shortcode() {
    ob_start();

    get_template_part('template-parts/components/our-locations/california');

    return ob_get_clean();
}
add_shortcode('grit_california', 'grit_california_shortcode');


/**
 * Global Side Navigation — Bid-Build Service Page
 * Injects fixed left rail before </body>
 */
function grit_global_sidenav() {
    // Only show on the Bid-Build page
    // Change this condition to match your page slug, ID, or template
    //  && !is_page_template('page-bid-build.php') // removed
    if (!is_page('bid-build')) {
        return;
    }
    ?>
    
    <nav class="grit-sidenav" id="gritSidenav" aria-label="Page sections">
        <div class="grit-sidenav__line"></div>
        <ul class="grit-sidenav__list">
            <li class="grit-sidenav__item active" data-section="hero">
                <span class="grit-sidenav__num">01</span>
                <span class="grit-sidenav__label">Overview</span>
            </li>
            <li class="grit-sidenav__item" data-section="service-why">
                <span class="grit-sidenav__num">02</span>
                <span class="grit-sidenav__label">Why Bid-Build?</span>
            </li>
            
            <li class="grit-sidenav__item" data-section="service-what-is">
                <span class="grit-sidenav__num">03</span>
                <span class="grit-sidenav__label">What is Bid-Build?</span>
            </li>
            <li class="grit-sidenav__item" data-section="process">
                <span class="grit-sidenav__num">04</span>
                <span class="grit-sidenav__label">Our Process</span>
            </li>
            <li class="grit-sidenav__item" data-section="industries">
                <span class="grit-sidenav__num">05</span>
                <span class="grit-sidenav__label">Industries we serve</span>
            </li>
            <li class="grit-sidenav__item" data-section="why-320">
                <span class="grit-sidenav__num">06</span>
                <span class="grit-sidenav__label">Why 320 Grit?</span>
            </li>
            <li class="grit-sidenav__item" data-section="get-started">
                <span class="grit-sidenav__num">07</span>
                <span class="grit-sidenav__label">Get Started</span>
            </li>
            <li class="grit-sidenav__item" data-section="faq">
                <span class="grit-sidenav__num">08</span>
                <span class="grit-sidenav__label">Frequently Asked Questions</span>
            </li>
        </ul>
    </nav>
    
    <?php
}
add_action('wp_footer', 'grit_global_sidenav', 5);

/**
 * Enqueue Side Nav CSS & JS globally on Bid-Build page
 */
function grit_sidenav_assets() {
    if (!is_page('bid-build') && !is_page_template('page-bid-build.php')) {
        return;
    }
    
    wp_enqueue_style('grit-sidenav', get_stylesheet_directory_uri() . '/assets/css/sidenav.css', [], '1.0');
    wp_enqueue_script('grit-sidenav', get_stylesheet_directory_uri() . '/assets/js/sidenav.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'grit_sidenav_assets');

function grit_global_libraries() {
    wp_enqueue_script('three-js', 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js', [], 'r128', true);
    wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], '3.12.5', true);
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], '3.12.5', true);
    wp_enqueue_script('lenis', 'https://cdn.jsdelivr.net/npm/lenis@1.1.18/dist/lenis.min.js', [], '1.1.18', true);
}
add_action('wp_enqueue_scripts', 'grit_global_libraries', 5);

/**
 * Careers components: register assets and shortcodes
 */
function grit_enqueue_careers_component_assets($component)
{
    $relative = '/template-parts/components/careers/' . $component . '.css';
    $relative_js = '/template-parts/components/careers/' . $component . '.js';
    $css_path = get_stylesheet_directory() . $relative;
    $js_path = get_stylesheet_directory() . $relative_js;
    $base_handle = 'grit-careers-' . str_replace('-', '_', $component);

    if (file_exists($css_path)) {
        wp_enqueue_style($base_handle, get_stylesheet_directory_uri() . $relative, array('grit-global'), grit_asset_version($relative));
    }

    if (file_exists($js_path)) {
        wp_enqueue_script($base_handle . '-js', get_stylesheet_directory_uri() . $relative_js, array('jquery'), grit_asset_version($relative_js), true);
    }
}

$grit_careers_components = array(
    'careers',
    'open-positions',
    'job-detail',
    'introduce-yourself',
    'apply-position',
    'saved-positions',
    'thank-you'
);

foreach ($grit_careers_components as $comp) {
    $shortcode_tag = 'grit_careers_' . str_replace('-', '_', $comp);
    add_shortcode($shortcode_tag, function ($atts = array(), $content = null) use ($comp) {
        grit_enqueue_careers_component_assets($comp);

        // In admin/editor contexts (classic admin or WPBakery frontend editor),
        // return a lightweight placeholder to avoid executing full front-end
        // templates which can cause fatal errors in the editor.
        $vc_frontend = ! empty( $_GET['vc_editable'] ) || ! empty( $_GET['vc_frontend_editor'] ) || ! empty( $_GET['vc_action'] ) || ! empty( $_GET['vc_post_id'] );
        if ( ( is_admin() && ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) || $vc_frontend ) {
            return '<div class="grit-careers-placeholder" data-component="' . esc_attr( $comp ) . '">[Careers: ' . esc_html( $comp ) . ']</div>';
        }

        ob_start();
        get_template_part('template-parts/components/careers/' . $comp);
        return ob_get_clean();
    });
}