<?php
/**
 * Plugin Name: Competiciones
 * 
 * @see https://developer.wordpress.org/reference/functions/register_post_type/
 */

if (!defined("ABSPATH"))
    exit;

// Register Custom Post Type
function post_competiciones() {

	$labels = array(
		'name'                  => _x( 'competiciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'competicion', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Competiciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Competiciones', 'text_domain' ),
		'archives'              => __( 'Competiciones', 'text_domain' ),
		'attributes'            => __( 'Atributos de competción', 'text_domain' ),
		'parent_item_colon'     => __( 'Competición superior:', 'text_domain' ),
		'all_items'             => __( 'Todas las competiciones', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nueva competición', 'text_domain' ),
		'add_new'               => __( 'Añadir nueva', 'text_domain' ),
		'new_item'              => __( 'Nueva competición', 'text_domain' ),
		'edit_item'             => __( 'Editar competición', 'text_domain' ),
		'update_item'           => __( 'Actualizar competición', 'text_domain' ),
		'view_item'             => __( 'Ver competición', 'text_domain' ),
		'view_items'            => __( 'Ver competiciones', 'text_domain' ),
		'search_items'          => __( 'Buscar competición', 'text_domain' ),
		'not_found'             => __( 'No hay competiciones', 'text_domain' ),
		'not_found_in_trash'    => __( 'No hay competiciones en la papelerea', 'text_domain' ),
		'featured_image'        => __( 'Imagen de portada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen de portada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar imagen de portada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen de portada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en la competición', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a esta competición', 'text_domain' ),
		'items_list'            => __( 'Lista de competiciones', 'text_domain' ),
		'items_list_navigation' => __( 'Navegación de lista de competiciones', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de competiciones', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'competicion', 'text_domain' ),
		'description'           => __( 'Competiciones del club', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'competiciones',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'post_competiciones', $args );

}
add_action( 'init', 'post_competiciones', 0 );