<?php
/* Template Name: clubs loisirs */
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
    <div class="row" style=" margin-top:1rem;padding-left: 1rem;">
        <?php $url = home_url(); ?>
        <a class="retourHome" href="<?php echo esc_url( $url ); ?>"> <i class="fa fa-home" aria-hidden="true"> </i> Retour vers l'accueil</a>
    </div>
    <h2 style="margin-top:2rem;">Clubs loisirs</h2>
    <?php $args = array(
      'post_type' => 'activite',
      'cat' => '9',
      'showposts'=>100);
    $query = new WP_Query( $args );
    while ($query->have_posts()) : $query->the_post(); ?>
    <div class="row rowCalendar">

        <div class="col-md-12 contentActivite">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="typo-color"><i class="typo-color fa fa-calendar rouge-color"></i>Posté le<?php echo get_the_date() ?> </p>
          <p><?php the_excerpt() ?></p>
        </div>
    </div>
  <?php endwhile; ?>
  </div>
  </div>
</div>


<!-- fin contenu-->
<?php get_footer(); ?>
