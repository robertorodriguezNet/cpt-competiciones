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
		'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'excerpt' ),
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
		'show_in_rest'          => false,
	);
	register_post_type( 'post_competiciones', $args );

}
add_action( 'init', 'post_competiciones', 0 );

/**
 * Generated by the WordPress Meta Box Generator
 * https://jeremyhixon.com/tool/wordpress-meta-box-generator/
 * 
 * Retrieving the values:
 * Campeonato = get_post_meta( get_the_ID(), 'opcion_campeonato', true )
 * Edad = get_post_meta( get_the_ID(), 'opcion_edad', true )
 * Equipo = get_post_meta( get_the_ID(), 'opcion_equipo', true )
 * Fecha = get_post_meta( get_the_ID(), 'opcion_fecha', true )
 * Lugar = get_post_meta( get_the_ID(), 'opcion_lugar', true )
 * Tipo = get_post_meta( get_the_ID(), 'opcion_tipo', true )
 */
class Opciones_Para_Las_Competiciones {
	private $config = '{"title":"Opciones para las competiciones","description":"Opciones auxiliares para las competiciones","prefix":"opcion_","domain":"opciones-para-las-competiciones","class_name":"Opciones_Para_Las_Competiciones","post-type":["post"],"context":"normal","priority":"default","cpt":"post_competiciones","fields":[{"type":"radio","label":"Campeonato","options":"provincial : Provincial\r\natonomico : Castilla y Le\u00f3n\r\nespana : Espa\u00f1a\r\neuropa : Europa","id":"opcion_campeonato"},{"type":"select","label":"Edad","default":"absoluto","options":"sub-12 : Sub 12\r\nsub-14 : Sub 14\r\nsub-16 : Sub 16\r\nsub-18 : Sub 18\r\nsub-20 : Sub 20\r\nsub-23 : Sub 23\r\nalevin : Alev\u00edn\r\ninfantil : Infantil\r\ncadete : Cadete\r\njuvenil : Juvenil\r\njunior : J\u00fanior\r\npromesa : Promesa\r\nabsoluto : Absoluto\r\nmaster : M\u00e1ster","id":"opcion_edad"},{"type":"radio","label":"Equipo","options":"masculino : Masculino\r\nfemenino : Femenino\r\nambos : Ambos","id":"opcion_equipo"},{"type":"date","label":"Fecha","max":"2016-10-31","min":"1990-11-01","id":"opcion_fecha"},{"type":"text","label":"Lugar","id":"opcion_lugar"},{"type":"radio","label":"Tipo","options":"aire-libre : Aire libre\r\npista-cubierta : Pista cubierta\r\ncross : Cross\r\nruta : Ruta","id":"opcion_tipo"}]}';

	public function __construct() {
		$this->config = json_decode( $this->config, true );
		$this->process_cpts();
		add_action( 'add_meta_boxes', [ $this, 'add_meta_boxes' ] );
		add_action( 'admin_head', [ $this, 'admin_head' ] );
		add_action( 'save_post', [ $this, 'save_post' ] );
	}

	public function process_cpts() {
		if ( !empty( $this->config['cpt'] ) ) {
			if ( empty( $this->config['post-type'] ) ) {
				$this->config['post-type'] = [];
			}
			$parts = explode( ',', $this->config['cpt'] );
			$parts = array_map( 'trim', $parts );
			$this->config['post-type'] = array_merge( $this->config['post-type'], $parts );
		}
	}

	public function add_meta_boxes() {
		foreach ( $this->config['post-type'] as $screen ) {
			add_meta_box(
				sanitize_title( $this->config['title'] ),
				$this->config['title'],
				[ $this, 'add_meta_box_callback' ],
				$screen,
				$this->config['context'],
				$this->config['priority']
			);
		}
	}

	public function admin_head() {
		global $typenow;
		if ( in_array( $typenow, $this->config['post-type'] ) ) {
			?><style>.rwp-description {
					margin-bottom: 1rem;
				}</style><?php
		}
	}

	public function save_post( $post_id ) {
		foreach ( $this->config['fields'] as $field ) {
			switch ( $field['type'] ) {
				default:
					if ( isset( $_POST[ $field['id'] ] ) ) {
						$sanitized = sanitize_text_field( $_POST[ $field['id'] ] );
						update_post_meta( $post_id, $field['id'], $sanitized );
					}
			}
		}
	}

	public function add_meta_box_callback() {
		echo '<div class="rwp-description">' . $this->config['description'] . '</div>';
		$this->fields_table();
	}

	private function fields_table() {
		?><table class="form-table" role="presentation">
			<tbody><?php
				foreach ( $this->config['fields'] as $field ) {
					?><tr>
						<th scope="row"><?php $this->label( $field ); ?></th>
						<td><?php $this->field( $field ); ?></td>
					</tr><?php
				}
			?></tbody>
		</table><?php
	}

	private function label( $field ) {
		switch ( $field['type'] ) {
			case 'radio':
				echo '<div class="">' . $field['label'] . '</div>';
				break;
			default:
				printf(
					'<label class="" for="%s">%s</label>',
					$field['id'], $field['label']
				);
		}
	}

	private function field( $field ) {
		switch ( $field['type'] ) {
			case 'date':
				$this->input_minmax( $field );
				break;
			case 'radio':
				$this->radio( $field );
				break;
			case 'select':
				$this->select( $field );
				break;
			default:
				$this->input( $field );
		}
	}

	private function input( $field ) {
		printf(
			'<input class="regular-text %s" id="%s" name="%s" %s type="%s" value="%s">',
			isset( $field['class'] ) ? $field['class'] : '',
			$field['id'], $field['id'],
			isset( $field['pattern'] ) ? "pattern='{$field['pattern']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function input_minmax( $field ) {
		printf(
			'<input class="regular-text" id="%s" %s %s name="%s" %s type="%s" value="%s">',
			$field['id'],
			isset( $field['max'] ) ? "max='{$field['max']}'" : '',
			isset( $field['min'] ) ? "min='{$field['min']}'" : '',
			$field['id'],
			isset( $field['step'] ) ? "step='{$field['step']}'" : '',
			$field['type'],
			$this->value( $field )
		);
	}

	private function radio( $field ) {
		printf(
			'<fieldset><legend class="screen-reader-text">%s</legend>%s</fieldset>',
			$field['label'],
			$this->radio_options( $field )
		);
	}

	private function radio_checked( $field, $current ) {
		$value = $this->value( $field );
		if ( $value === $current ) {
			return 'checked';
		}
		return '';
	}

	private function radio_options( $field ) {
		$output = [];
		$options = explode( "\r\n", $field['options'] );
		$i = 0;
		foreach ( $options as $option ) {
			$pair = explode( ':', $option );
			$pair = array_map( 'trim', $pair );
			$output[] = sprintf(
				'<label><input %s id="%s-%d" name="%s" type="radio" value="%s"> %s</label>',
				$this->radio_checked( $field, $pair[0] ),
				$field['id'], $i, $field['id'],
				$pair[0], $pair[1]
			);
			$i++;
		}
		return implode( '<br>', $output );
	}

	private function select( $field ) {
		printf(
			'<select id="%s" name="%s">%s</select>',
			$field['id'], $field['id'],
			$this->select_options( $field )
		);
	}

	private function select_selected( $field, $current ) {
		$value = $this->value( $field );
		if ( $value === $current ) {
			return 'selected';
		}
		return '';
	}

	private function select_options( $field ) {
		$output = [];
		$options = explode( "\r\n", $field['options'] );
		$i = 0;
		foreach ( $options as $option ) {
			$pair = explode( ':', $option );
			$pair = array_map( 'trim', $pair );
			$output[] = sprintf(
				'<option %s value="%s"> %s</option>',
				$this->select_selected( $field, $pair[0] ),
				$pair[0], $pair[1]
			);
			$i++;
		}
		return implode( '<br>', $output );
	}

	private function value( $field ) {
		global $post;
		if ( metadata_exists( 'post', $post->ID, $field['id'] ) ) {
			$value = get_post_meta( $post->ID, $field['id'], true );
		} else if ( isset( $field['default'] ) ) {
			$value = $field['default'];
		} else {
			return '';
		}
		return str_replace( '\u0027', "'", $value );
	}

}
new Opciones_Para_Las_Competiciones;