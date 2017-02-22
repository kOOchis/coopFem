<?php
add_action('init','register_programme' );

function register_programme() {
	$labels = array(
		'name'               => 'Ajouter un programme',
		'singular_name'      => 'Programme',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau programme',
		'new_item'           => 'Nouveau programme',
		'edit_item'          => 'Éditer un programme',
		'view_item'          => "Voir le programme",
		'all_items'          => 'Programmes',
		'search_items'       => 'Rechercher un programme',
		'not_found'          => 'Aucun programme',
		'not_found_in_trash' => 'Aucun programme dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Programmes',
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
		'menu_position'      => 4,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'programmes', $args );
}

 ?>
