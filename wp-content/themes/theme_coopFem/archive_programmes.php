
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
    <div class="row" style=" margin-top:1rem;padding-left: 1rem;">
        <?php $url = home_url(); ?>
        <a class="retourHome" href="<?php echo esc_url( $url ); ?>"> <i class="fa fa-home" aria-hidden="true"> </i> Retour vers l'accueil</a>
    </div>
    <h2 style="margin-top:2rem;">Nos programmes</h2>

    
    <?php echo facetwp_display( 'facet', 'list_programmes' ); ?>

    <?php
           // get posts
      $today = date('Ymd');
      $posts = get_posts(array(
      'post_type'     => 'programmes',
      'posts_per_page'  => -1,
      'meta_query' => array(
                             array(
                                'key'   => 'date_programme',
                                'compare' => '>=',
                                'value'   => $today,
                            )
                          ),
      'orderby'     => 'meta_value',
      'order'       => 'ASC'
      ));

      ?>

     <div class="facetwp-template">
      <?php if( $posts ): 

        foreach( $posts as $post ): 
        setup_postdata( $post ) 
      ?>

      <div class="row rowCalendar">
        <div class="col-md-1 calendrier">
          <?php showDate(get_field('date_programme')); ?>
        </div>

        <div class="col-md-10 contentActivite">
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p class="typo-color"><i class="typo-color fa fa-clock-o rouge-color"></i>  <?php the_field('heure_programme') ?><i class="typo-color fa fa-map-marker rouge-color"></i> <?php the_field('lieu_programme') ?> </p>
          <p><?php the_excerpt() ?></p>
        </div>
      </div>

      <?php endforeach; ?>
      <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>
  </div>
  </div>
</div>

<!-- fin contenu-->
<?php get_footer(); ?>
