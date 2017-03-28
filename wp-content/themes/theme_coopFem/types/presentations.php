<?php
add_action('init','register_pres' );

function register_pres() {
	$labels = array(
		'name'               => 'Ajouter une présentation',
		'singular_name'      => 'Présentation',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter une nouvelle présentation',
		'new_item'           => 'Nouvelle présentation',
		'edit_item'          => 'Éditer une présentation',
		'view_item'          => "Voir la présentation",
		'all_items'          => 'Présentation',
		'search_items'       => 'Rechercher une présentation',
		'not_found'          => 'Aucune présentation',
		'not_found_in_trash' => 'Aucune présentation dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Présentation',
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
		'menu_position'      => 10,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'presentation', $args );
}

 ?>
