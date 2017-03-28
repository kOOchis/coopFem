<?php
add_action('init','register_part' );

function register_part() {
	$labels = array(
		'name'               => 'Ajouter un partenaire',
		'singular_name'      => 'Partenaire',
		'name_admin_bar'     => 'name admin bar',
		'add_new'            => 'Ajouter',
		'add_new_item'       => 'Ajouter un nouveau partenaire',
		'new_item'           => 'Nouveau partenaire',
		'edit_item'          => 'Éditer un partenaire',
		'view_item'          => "Voir la partenaire",
		'all_items'          => 'Partenaire',
		'search_items'       => 'Rechercher un partenaire',
		'not_found'          => 'Aucun partenaire',
		'not_found_in_trash' => 'Aucun partenaire dans la poubelle',
		'parent_item_colon'  => '',
		'menu_name'          => 'Partenaires et affiliés',
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
		'menu_position'      =>6,
		'supports'           => array( 'title', 'editor', 'thumbnail'),
		'taxonomies' => array('category')
	);

	register_post_type( 'partenaire', $args );
}

 ?>
