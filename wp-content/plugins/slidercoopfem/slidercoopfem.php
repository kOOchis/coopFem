<?php
/*
Plugin Name: Slider Coopération Féminine
Description: Plugin permettant de gérer le slider
Version:     01
Author:      Sébastien Huertas
*/

add_action('init', 'slidercoopfem_init');

/**
* Permet d'initialiser les fontctinonalités liées au slider
**/
function slidercoopfem_init(){

  $labels = array(
    'name' => 'Slide',
    'singular_name' => 'Slide',
    'add_new' => 'Ajouter un Slide',
    'add_new_item' => 'Ajouter un nouveau Slide',
    'edit_item' => 'Éditer un Slide',
    'new_item' => 'Nouveau Slide',
    'view_item' => 'Voir le Slide',
    'search_item' => 'Rechercher un Slide',
    'not_found' => 'Aucun Slide',
    'not_found_in_trash' => 'Aucun Slide dans la corbeille',
    'parent_item_colon' => '',
    'menu_name' => 'Slides'
  );

  register_post_type('slide', array(
    'public' => true,
    'publicity_queryable' => false,
    'labels' => $labels,
    'capability_type' => 'post',
    'supports' => array('title', 'thumbnail', 'editor'),
    'menu_position' => 4
  ));

  add_image_size('slider', 1170,400,true);

}

/**
* Permet d'afficher le carrousel
**/
function slidercoopfem_show($limit = 10){
  $slides = new WP_query("post_type=slide&posts_per_page=$limit");
  echo '<div class="container">
          <div id="slider">
            <div class="row text-center">
              <div id="slider-affiche-principal" class="owl-carousel">';
  while($slides->have_posts()){
    $slides->the_post();
    global $post;
    echo "<div class='item'>";
      echo "<div class='white-color'>";
      the_content();
      echo '</div>';
      echo '<div class="img-slider">';
      the_post_thumbnail('slider');
      echo '</div>';
    echo '</div>';
  }
  echo '     </div>
            </div>
          </div>
        </div>';
}
