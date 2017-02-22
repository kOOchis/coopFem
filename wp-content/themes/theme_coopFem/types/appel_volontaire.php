<?php
add_action('init','register_volontaire' );

function register_volontaire() {
	$labels = array(
		'name'               => 'Ajouter un bandeau',
		'singular_name'      => 'Appel à volontaire',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouvel bandeau',
		'new_item'           => 'Nouvel bandeau',
		'edit_item'          => 'Éditer un bandeau',
		'view_item'          => "Voir l'bandeau",
		'all_items'          => 'Appel à volontaire',
		'search_items'       => 'Rechercher un bandeau',
		'not_found'          => 'Aucun bandeau',
		'not_found_in_trash' => 'Aucun bandeau dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Bandeau',
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
		'menu_position'      => 8,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'volontaire', $args );
}

 ?>
