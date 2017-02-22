<?php
add_action('init','register_sliderfooter' );

function register_sliderfooter() {
	$labels = array(
		'name'               => 'Ajouter un slide',
		'singular_name'      => 'slide footer',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouvel slide',
		'new_item'           => 'Nouveau slide',
		'edit_item'          => 'Éditer un slide',
		'view_item'          => "Voir le slide",
		'all_items'          => 'Slide footer',
		'search_items'       => 'Rechercher un slide',
		'not_found'          => 'Aucun slide',
		'not_found_in_trash' => 'Aucun slide dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Slide footer',
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

	register_post_type( 'sliderfooter', $args );
}

 ?>
