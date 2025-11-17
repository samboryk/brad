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

/**
 * Ensure the WordPress pages required by the theme exist and are linked to their templates.
 */
function mexa_infrastructure_ensure_pages() {
    $templates = [
        'home.php'  => [
            'title'    => 'Головна сторінка',
            'slug'     => 'home',
            'set_front'=> true,
        ],
        'link.php'  => [
            'title' => 'Інфраструктура',
            'slug'  => 'infrastructure',
        ],
        'link2.php' => [
            'title' => 'Токен',
            'slug'  => 'token',
        ],
        'link3.php' => [
            'title' => 'Навігатор по сайту',
            'slug'  => 'navigator',
        ],
    ];

    foreach ( $templates as $template => $page_args ) {
        $existing = get_pages(
            [
                'meta_key'   => '_wp_page_template',
                'meta_value' => $template,
                'number'     => 1,
                'post_status'=> 'publish',
            ]
        );

        if ( ! empty( $existing ) ) {
            $page_id = $existing[0]->ID;
            update_post_meta( $page_id, '_wp_page_template', $template );
        } else {
            $page_id = wp_insert_post(
                [
                    'post_title'   => $page_args['title'],
                    'post_name'    => sanitize_title( $page_args['slug'] ),
                    'post_status'  => 'publish',
                    'post_type'    => 'page',
                    'post_content' => '',
                ]
            );

            if ( is_wp_error( $page_id ) ) {
                continue;
            }

            update_post_meta( $page_id, '_wp_page_template', $template );
        }

        if ( ! empty( $page_args['set_front'] ) ) {
            update_option( 'show_on_front', 'page' );
            update_option( 'page_on_front', $page_id );
        }
    }
}
add_action( 'after_switch_theme', 'mexa_infrastructure_ensure_pages' );
