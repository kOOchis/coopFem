<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
  ?>

</section>

	<footer>
  <div class="container">
	  <div class="row">
	    <div class="col-md-7 liensFooter">
	      <h4>coopération féminine</h4>
	      <?php wp_nav_menu( array('menu' => 'footer' )); ?>
		  </div>
			<div class="col-md-5 lienUtile">
        <h4>liens utiles</h4>
		<?php $args = array(
	    'post_type' => 'sliderFooter',
	    'showposts'=>-1);
	    ?>
			<div class="slider-footer owl-theme logoBg">
			<?php
	    $query = new WP_Query( $args );
	    while ($query->have_posts()) : $query->the_post(); ?>
			   <div class="item"><a target="_blank" href="<?php echo get_field('url_slider_footer') ?>"><img src="<?php echo the_post_thumbnail_url(); ?>" alt=""></a></div>
		<?php endwhile; ?>
			</div>
      </div>
		</div>
	</footer>
	<div class="footer2">
		<p class="text-center">© Coopération Féminine 2017</p>
	</div>



	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/navigation.js"></script>
	<script src="<?php bloginfo("template_directory");?>/javascript/owl.carousel/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/slider.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/firstWordColor.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/date.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/footer.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/jquery-validation/dist/jquery.validate.min.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/jquery-validation/dist/localization/messages_fr.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory");?>/javascript/formulaire.js"></script>
	</body>
	</html>
