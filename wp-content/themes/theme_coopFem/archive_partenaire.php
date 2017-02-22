<?php
/* Template Name: partenaires */
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
    <h2 style="margin-top:2rem;">Partenaires et affiliés</h2>
    <?php $args = array(
      'post_type' => 'partenaire',
      'showposts'=>100);
    $query = new WP_Query( $args );
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-4 partenaireCategory" style="padding:5px;">
          <div class="paddingCategory heightPartenaire">
            <h3><?php the_title(); ?></h3>
            <p><?php the_field('resume_partenaire') ?></p>
            <a href="<?php the_permalink(); ?>" class="btn btn-primary bouton">En savoir plus</a>
          </div>
        </div>
  <?php endwhile; ?>
  </div>
  </div>
</div>

<!-- fin contenu-->
<?php get_footer(); ?>
