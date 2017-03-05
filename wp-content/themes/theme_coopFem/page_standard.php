<?php
/* Template Name: page standard */
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<div class="container">
  <div class="row">
  <div class="row" style=" margin-top:1rem;padding-left: 1rem;">
        <?php $url = home_url(); ?>
        <a class="retourArrow" href="<?php echo esc_url( $url ); ?>"> <i class="fa fa-home" aria-hidden="true"> </i> Retour vers l'accueil</a>
    </div>
	   <?php while (have_posts() ) : the_post(); ?>
      <h2 style="margin-top:1rem;"><?php the_title(); ?></h2>
      <p style="margin-bottom:1rem; font-size:1rem;"><i class="typo-color fa fa-pencil" style="color:#4682cb ;"></i> <?php echo get_the_author(); ?>  <i class="typo-color fa fa-calendar-check-o"  style="color:#4682cb ;"></i> <?php echo get_the_date(); ?></p>
      <p><?php the_content(); ?></p>
      <?php endwhile; ?>
  </div>
</div>

<?php get_footer(); ?>
