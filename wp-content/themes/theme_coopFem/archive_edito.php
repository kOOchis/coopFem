<?php
/* Template Name: edito */
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
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
           <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <div class="row" style=" margin-top:1rem; margin-left:0;">
               <a class="retourArrow" href="javascript:history.go(-1)"> <i class="fa fa-arrow-left" aria-hidden="true"> </i> Retour</a>
             </div>
             <h2 style="margin-top:1rem;" class="entry-title"><?php the_title(); ?></h2>
             <p style="margin-bottom:1rem;" class="date"><i class="fa fa-calendar-o bleu-color white" aria-hidden="true"></i> <?php echo get_the_date(); ?></p>
             <div class="row">
               <div class="col-md-8">
                 <img class="img-responsive" src="<?php echo the_post_thumbnail_url(); ?>" alt="">
               </div>
             </div>
           <?php endwhile;?>
          </div>
 </div>

 <?php get_footer(); ?>
