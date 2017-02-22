<?php
add_action('init','register_manif' );

function register_manif() {
	$labels = array(
		'name'               => 'Ajouter une manifestation',
		'singular_name'      => 'Manifestation',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter une nouvelle manifestation',
		'new_item'           => 'Nouvelle manifestation',
		'edit_item'          => 'Éditer une manifestation',
		'view_item'          => "Voir la manifestation",
		'all_items'          => 'Manifestations',
		'search_items'       => 'Rechercher une manifestation',
		'not_found'          => 'Aucunne manifestation',
		'not_found_in_trash' => 'Aucunne manifestation dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Manifestations',
	);

	$args = array(
		'labels'             => $labels,
    'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'manifestation', $args );
}

 ?>
