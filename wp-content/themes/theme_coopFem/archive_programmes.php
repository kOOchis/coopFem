
<?php
/* Template Name: programme */
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
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-md-12 manifestations">
    <h2 style="margin-top:2rem;">Nos programmes</h2>
    <?php $args = array(
      'post_type' => 'Programmes',
      'showposts'=>100);
    $query = new WP_Query( $args );
    while ($query->have_posts()) : $query->the_post(); ?>
    <div class="row rowCalendar">

        <div class="col-md-1 calendrier">

          <?php
          $texte = get_field('date_programme');
          //Les chiffres
          $chiffres = explode("[a-zA-Z]", $texte);
          //Les lettres
          $lettres = explode("[0-9]", $texte);
          //Affichage
          echo "<p class='date_month'>".implode("",$lettres);
          echo "<p class='date_day'>".implode("",$chiffres);
          ?>

        </div>
        <div class="col-md-10 contentActivite">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="typo-color"><i class="typo-color fa fa-clock-o rouge-color"></i>  <?php the_field('heure_programme') ?><i class="typo-color fa fa-map-marker rouge-color"></i> <?php the_field('lieu_programme') ?> </p>
          <p><?php the_excerpt() ?></p>
        </div>
    </div>
  <?php endwhile; ?>
  </div>
  </div>
</div>

<!-- fin contenu-->
<?php get_footer(); ?>
