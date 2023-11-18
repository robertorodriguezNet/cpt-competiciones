<?php
/**
 * Plugin Name: Competiciones
 * 
 * @see https://developer.wordpress.org/reference/functions/register_post_type/
 */

if (!defined("ABSPATH"))
    exit;

function competiciones_setup_post_type()
{
    $args = array(
        'labels' => array(
            'name' => __('Competiciones', 'textdomain'),
            'singular_name' => __('Competición', 'textdomain'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => ['title','editor','thumbnail','excerpt']
    );

    register_post_type('competiciones', $args);
}

add_action('init', 'competiciones_setup_post_type');

/**
 * Las taxoonomías tipo debe distinguir: pista, cross, ruta.
 * 
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 */
function tipo_competicion_taxonomy() {
    register_taxonomy( 'tipo', 'competiciones');
}
add_action( 'init', 'tipo_competicion_taxonomy', 0 );