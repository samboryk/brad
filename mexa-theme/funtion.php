<?php
/**
 * Theme setup and asset loading.
 *
 * @package MEXA_Infrastructure
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function mexa_infrastructure_enqueue_assets() {
    wp_enqueue_style( 'mexa-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );
    wp_enqueue_script( 'mexa-script', get_template_directory_uri() . '/function.js', [ 'jquery' ], wp_get_theme()->get( 'Version' ), true );
}
add_action( 'wp_enqueue_scripts', 'mexa_infrastructure_enqueue_assets' );
