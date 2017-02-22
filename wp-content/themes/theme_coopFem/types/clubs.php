<?php
add_action('init','register_club' );

function register_club() {
	$labels = array(
		'name'               => 'Ajouter un club',
		'singular_name'      => 'Club',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau club',
		'new_item'           => 'Nouveau club',
		'edit_item'          => 'Éditer un club',
		'view_item'          => "Voir le club",
		'all_items'          => 'Clubs',
		'search_items'       => 'Rechercher un club',
		'not_found'          => 'Aucun club',
		'not_found_in_trash' => 'Aucun club dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Clubs',
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
		'menu_position'      => 7,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'clubs', $args );
}

 ?>
