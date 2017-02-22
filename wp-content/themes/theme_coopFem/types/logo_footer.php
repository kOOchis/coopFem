<?php
add_action('init','register_logo' );

function register_logo() {
	$labels = array(
		'name'               => 'Ajouter un logo',
		'singular_name'      => 'Logo',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau logo',
		'new_item'           => 'Nouvelle logo',
		'edit_item'          => 'Éditer un logo',
		'view_item'          => "Voir le logo",
		'all_items'          => 'Logo',
		'search_items'       => 'Rechercher un logo',
		'not_found'          => 'Aucun logo',
		'not_found_in_trash' => 'Aucun logo dans le poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'logo footer',
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
		'menu_position'      => 3,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'logo_footer', $args );
}

 ?>
