<?php
add_action('init','register_activite' );

function register_activite() {
	$labels = array(
		'name'               => 'Ajouter une activité',
		'singular_name'      => 'Activité',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter une nouvelle activité',
		'new_item'           => 'Nouvelle activité',
		'edit_item'          => 'Éditer une activité',
		'view_item'          => "Voir la activité",
		'all_items'          => 'Activité',
		'search_items'       => 'Rechercher une activité',
		'not_found'          => 'Aucunne activité',
		'not_found_in_trash' => 'Aucunne activité dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Activités',
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
		'menu_position'      => 6,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'activite', $args );
}

 ?>
