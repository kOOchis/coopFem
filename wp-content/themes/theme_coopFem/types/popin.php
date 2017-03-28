<?php
add_action('init','register_popin' );

function register_popin() {
	$labels = array(
		'name'               => 'Ajouter une Pop-In',
		'singular_name'      => 'Pop-In',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter une nouvelle Pop-In',
		'new_item'           => 'Nouvelle Pop-In',
		'edit_item'          => 'Éditer une Pop-In',
		'view_item'          => "Voir la Pop-In",
		'all_items'          => 'Pop-In',
		'search_items'       => 'Rechercher une Pop-In',
		'not_found'          => 'Aucune Pop-In',
		'not_found_in_trash' => 'Aucune Pop-In dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Pop-In',
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

	register_post_type( 'popin', $args );
}

 ?>
