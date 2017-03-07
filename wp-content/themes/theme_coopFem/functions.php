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
set_post_thumbnail_size(652,867,true );

/**
 * getDates
 * @param  [array] $date 
 * @return [array] preformat month and day 
 */
function getDates($date) {
	$mois = ['Janv', 'Fév', 'Mars', 'Avr', 'MAI', 'Juin', 'Juil', 'Aout', 'Sept', 'Oct', 'Nov', 'Dec'];
	$year = substr($date, 0, 4);
	$month = substr($date, 4, 2);
	$day = substr($date, 6, 2);
	$dateArr = [];
	$dateArr[0] = $day;
	$dateArr[1] = $mois[$month - 1];
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

function my_theme_add_editor_styles() {
  add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'my_theme_add_editor_styles' );
