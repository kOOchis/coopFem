<?php

require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/presentations.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/manifestations.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/clubs.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/activites.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/appel_volontaire.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/partenaires.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/programmes.php');
require_once(ABSPATH.'wp-content/themes/theme_coopFem/types/sliderFooter.php');

// Enable widgetable sidebar
// You may need to tweak your theme files, more info here - http://codex.wordpress.org/Widgetizing_Themes
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'id' => 'zone_widget',
	'name' => 'Colonne droite',
	'before_widget' => '<div class="widget">',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));

// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Zone principal', 'wpfme' ),
) );

// Pour activer les images à la une dans le back office dans un article
add_theme_support('post-thumbnails' );
set_post_thumbnail_size(409,544,true );

/**
 * getDates
 * @param  [array] $date 
 * @return [array] preformat month and day 
 */
function getDates($date) {
	$dateArr = explode(" ", $date);
	$dateArr[1] = substr($dateArr[1], 0, 4);
	return $dateArr;
}

/**
 * showDate affichage de la date
 * @param  [array] $dates
 */
function showDate($dates) {
	$dates = getDates($dates);
	echo "<p class='date_month'>". $dates[1];
    echo "<p class='date_day'>".$dates[0];
}


/*
function pagination($query) {

	$baseURL="http://".$_SERVER['HTTP_HOST'];
	if($_SERVER['REQUEST_URI'] != "/"){
		$baseURL = $baseURL.$_SERVER['REQUEST_URI'];
	}

	// Suppression de '/page' de l'URL
	$sep = strrpos($baseURL, '/page/');
	if($sep != FALSE){
		$baseURL = substr($baseURL, 0, $sep);
	}

  // Suppression des paramètres de l'URL
	$sep = strrpos($baseURL, '?');
	if($sep != FALSE){
	// On supprime le caractère avant qui est un '/'
		$baseURL = substr($baseURL, 0, ($sep-1));
	}

	$page = $query->query_vars["paged"];
	if ( !$page ) $page = 1;
	$qs = $_SERVER["QUERY_STRING"] ? "?".$_SERVER["QUERY_STRING"] : "";

	// Nécessaire uniquement si on a plus de posts que de posts par page admis
	if ( $query->found_posts > $query->query_vars["posts_per_page"] ) {
		echo '<ul class="pagination">';
		// lien précédent si besoin
		if ( $page > 1 ) {
			echo '<li class="next_prev prev"><a title="Revenir à la page précédente (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page-1).'/'.$qs.'">« précédente</a></li>';
		}
		// la boucle pour les pages
		for ( $i=1; $i <= $query->max_num_pages; $i++ ) {
			// ajout de la classe active pour la page en cours de visualisation
			if ( $i == $page ) {
				echo '<li class="active"><a href="#pagination" title="Vous êtes sur cette page '.$i.'">'.$i.'</a></li>';
			} else {
				echo '<li><a title="Rejoindre la page '.$i.'" href="'.$baseURL.'/page/'.$i.'/'.$qs.'">'.$i.'</a></li>';
			}
		}
		// le lien next si besoin
		if ( $page < $query->max_num_pages ) {
			echo '<li class="next_prev next"><a title="Passer à la page suivante (vous êtes à la page '.$page.')" href="'.$baseURL.'/page/'.($page+1).'/'.$qs.'">suivante »</a></li>';
		}
		echo '</ul>';
	}
}*/
?>
