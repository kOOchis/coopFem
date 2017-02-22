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


	<div class="container">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="row" style=" margin-top:1rem;">
								<a class="retourArrow" href="javascript:history.go(-1)"> <i class="fa fa-arrow-left" aria-hidden="true"> </i> Retour</a>
							</div>
							<div class="row" style=" margin-top:1rem;">

										<div class="col-md-1 calendrier">

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
					        <div class="col-md-11 contentActivite" style="margin-top=1rem">

										<h3><?php the_title(); ?></h3>
					          <p class="typo-color"><i class="typo-color fa fa-clock-o rouge-color"> </i><?php the_field('heure_manif') ?> 	<i class="typo-color fa fa-map-marker rouge-color"> </i> <?php the_field('lieu_manif') ?> </p>

					        </div>
					    </div>
							<div class="row">
								<div class="entry-content">
									<?php the_content(); ?>
								</div>
							</div>
	 					</div>
		<?php endwhile; // end of the loop. ?>
	</div>




	<?php get_footer(); ?>
