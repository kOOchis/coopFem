<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Play-Again
 * @since 1.0
 */

get_header(); ?>
  <!--sélecteur pour afficher séparément les register post type par id-->
  <?php sliderCoopfem_show(); ?>

  <!--sélecteur pour afficher séparément les register post type par id-->
  <?php
   $id_soutien = 40;
   $billet_soutien = get_post($id_soutien);
   $title_soutien = $billet_soutien->post_title;
   $date_soutien = $billet_soutien->post_date;
   $contenu_soutien = get_field( 'presentation_resume', $id_soutien );
   $permalink = get_post_permalink();

   $id_radio = 39;
   $billet_radio = get_post($id_radio);
   $title_radio = $billet_radio->post_title;
   $date_radio = $billet_radio->post_date;
   $contenu_radio = get_field( 'presentation_resume', $id_radio );

   $id_action = 34;
   $billet_action = get_post($id_action);
   $title_action = $billet_action->post_title;
   $date_action = $billet_action->post_date;
   $contenu_action = get_field( 'presentation_resume', $id_action );
  ?>

  <div class="container presentation">
    <div class="row">
      <div class="col-md-4">
        <?php echo "<h2>$title_action</h2>
        <p>$contenu_action</p>"; ?>
        <a href="<?php get_post_permalink( $id_action ); ?>" class="btn btn-primary bouton">Plus d'infos</a>
      </div>
      <div class="col-md-4">
        <?php echo "<h2>$title_radio</h2>
        <p>$contenu_radio</p>"; ?>
        <a href="<?php get_post_permalink( $id_radio ); ?>" class="btn btn-primary bouton">Toutes les émissions</a>
      </div>
      <div class="col-md-4">
        <?php echo "<h2>$title_soutien</h2>
        <p>$contenu_soutien</p>"; ?>
        <a href="<?php get_post_permalink( $id_soutien ); ?>" class="btn btn-primary bouton">Plus d'infos</a>
      </div>
    </div>
  </div>

  <div id="volontaire"class="container rouge margin-top">
    <div class="row">
      <?php $args = array(
        'post_type' => 'volontaire',
        'showposts'=>1);
      $query = new WP_Query( $args );
      while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-12">
          <?php the_content() ?>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <div class="container margin-top">
    <div class="col-md-8">
      <h2 style="margin-left:-15px;">Quelques activités de la Coopération Féminine</h2>
        <!-- Début de la Boucle. -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="row rowStyle">
            <div class="col-md-4 imgStyle">
              <img class="img-responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="col-md-8 contentActivite">
              <h3><?php the_title(); ?></h3>
              <p class="date"><i class="fa fa-calendar-o bleu-color white" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="btn btn-primary bouton">Lire la suite</a>
            </div>
        </div>
        <?php endwhile; else: ?>
        <?php endif; ?>
        <?php pagination($wp_query); ?>
    </div>

    <div class="col-md-4 manifestations">
      <h2 style="margin-left:-15px;">Événements et Manifestations à venir</h2>
      <?php $args = array(
        'post_type' => 'manifestation',
        'showposts'=>3);
      $query = new WP_Query( $args );
      while ($query->have_posts()) : $query->the_post(); ?>
      <div class="row rowStyle">

          <div class="col-md-2 calendrier">

            <?php
            $texte = get_field('date_manif');
            //Les chiffres
            $chiffres = split("[a-zA-Z]", $texte);
            //Les lettres
            $lettres = split("[0-9]", $texte);
            //Affichage
            echo "<p class='date_month'>".implode("",$lettres);
            echo "<p class='date_day'>".implode("",$chiffres);
            ?>

          </div>
          <div class="col-md-10 contentActivite">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="typo-color"><i class="typo-color fa fa-map-marker rouge-color"></i> <?php the_field('heure_manif') ?></p>
            <p class="typo-color"><i class="typo-color fa fa-clock-o rouge-color"></i><?php the_field('lieu_manif') ?> </p>
          </div>
      </div>
    <?php endwhile; ?>
    <div  style="margin-top:0;"  class="rowStyle row">
      <a href="http://localhost/wp-coopFem/manifestations/" class="btn btn-primary bouton">Voir toutes les manifestations</a>
    </div>
    </div>

    <div class="col-md-4 manifestations">
      <h2 style="margin-left:-15px;">Programmes de clubs à venir</h2>
      <?php $args = array(
        'post_type' => 'programmes',
        'showposts'=>3);
      $query = new WP_Query( $args );
      while ($query->have_posts()) : $query->the_post(); ?>
      <div class="row rowStyle">

          <div class="col-md-2 calendrier">

            <?php
            $texte = get_field('date_programme');
            //Les chiffres
            $chiffres = split("[a-zA-Z]", $texte);
            //Les lettres
            $lettres = split("[0-9]", $texte);
            //Affichage
            echo "<p class='date_month'>".implode("",$lettres);
            echo "<p class='date_day'>".implode("",$chiffres);
            ?>

          </div>
          <div class="col-md-10 contentActivite">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="typo-color"><i class="typo-color fa fa-map-marker rouge-color"></i> <?php the_field('heure_programme') ?></p>
            <p class="typo-color"><i class="typo-color fa fa-clock-o rouge-color"></i><?php the_field('lieu_programme') ?> </p>
          </div>
      </div>
    <?php endwhile; ?>
    <div  style="margin-top:0;"  class="rowStyle row">
      <a href="http://localhost/wp-coopFem/nos-programmes/" class="btn btn-primary bouton">Voir tous les programmes</a>
    </div>
    </div>

<?php get_footer(); ?>
