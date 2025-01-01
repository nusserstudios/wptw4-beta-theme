<?php
// Making jQuery to load from Google Library
function replace_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js', false, '1.11.3');
        wp_enqueue_script('jquery');
        wp_enqueue_script('jquery-migrate');
    }
}
add_action('init', 'replace_jquery');

/**
 * Get the asset path.
 *
 * @param string $path Path to asset.
 * @return string
 */
function tw_beta_asset($path) {
    return get_template_directory_uri() . $path;
}

/**
 * Enqueue theme assets.
 */
function tw_beta_enqueue_scripts() {
    $theme = wp_get_theme();
    wp_enqueue_style('tw-beta', tw_beta_asset('/dist/css/app.css'), array(), $theme->get('Version'));
    wp_enqueue_script('tw-beta', tw_beta_asset('/dist/js/app.js'), array('jquery'), $theme->get('Version'), true);
}

add_action('wp_enqueue_scripts', 'tw_beta_enqueue_scripts');

