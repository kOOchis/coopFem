<?php
/* Template Name: nos clubs */
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
    <h2 style="margin-top:2rem;">Nos clubs</h2>
      <?php echo facetwp_display( 'facet', 'list_clubs' ); ?>
      <?php $args = array(
        "post_type" => "clubs",
        "post_status" => "publish",
        "orderby" => "date",
        "order" => "DESC",
        "posts_per_page" => -1
      );
     $query = new WP_Query( $args ); ?>
    <div class="facetwp-template">
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-md-4 partenaireClubs" style="padding:5px;">
          <div class="paddingClubs">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
      </div>
  </div>
  </div>
</div>

<!-- fin contenu-->
<?php get_footer(); ?>
