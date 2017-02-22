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

<!-- debut contenu -->
<div id="home-actus">
	<div class="box-category-tittle box-shadow red">
        <h4><a href="<?php echo get_category_link(7 ); ?>" class="white-color" href="#">Tous les Articles</a></h4>
      </div>
	<div class="row small-up-1 medium-up-3">
		<div class="bg-box grey box-shadow">
			
			<!-- debut boucle -->
			<?php while (have_posts() ) : the_post(); ?>
			<!-- on récupère le contenu  -->
			<div class="column" style="margin-bottom:15px;">
				<div class="white hr-gutter box-shadow-hover">
					<p class="typo-color"><?php the_post_thumbnail(); ?></p>

					<div class="padding-content">
						<h5><a class="red-color" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
						<h2></h2>
						<p class="typo-color"><i class="typo-color fa fa-calendar-check-o"></i> <?php echo get_the_date(); ?></p>
						<hr>
						<p class="typo-color"><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>"><li class="red button box-shadow-hover expanded box-shadow">Voir</li></a>
					</div>
				</div>
			</div>
			<!-- fin de boucle--> 
		<?php endwhile; ?>
	</div>
	




<!-- fin contenu--> 
<?php get_footer(); ?>




