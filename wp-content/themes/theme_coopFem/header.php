<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/javascript/owl.carousel/css/owl.carousel.css ">
<link rel="stylesheet" href="<?php bloginfo("template_directory");?>/javascript/owl.carousel/css/owl.theme.css">
	<!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
	</head>

  <body <?php body_class(); ?>>

		<div class="rougeFonce">
   <div class="navigationTop">
     <div class="container">
       <ul>
	       <li><a target="_blank" href="https://www.facebook.com/La-Coop%C3%A9ration-F%C3%A9minine-Paris-279644072242870/"><i class="fa fa-facebook rouge-color white" aria-hidden="true"></i></a></li>
	       <li><a target="_blank" href="https://www.flickr.com/photos/39914732@N07/sets/"><i class="fa fa-flickr rouge-color white" aria-hidden="true"></i></a></li>
         <li class="forResponsive"><a style=" padding:5px 0 0 0; float: right;  " onclick=menuResponsive()><i style ="border: 0px solid black; font-size:1.5rem;" class="fa fa-bars white-color" aria-hidden="true"></i></a></li>
     	 </ul>
   	</div>
   </div>
 </div>

 <div class="rouge">
  <div class="navigationBaseline">
    <div class="container" style="padding-right:0;">
      <?php $url = home_url(); ?>
      <h1 class="left"><a href="<?php echo esc_url( $url ); ?>" class="white-color">Coopération féminine</a></h1>
	    <img class="right" src="<?php bloginfo("template_directory");?>/ressources/logos/logo.jpg" alt="">
  	</div>
  </div>
</div>

<div class="rouge">
  <div class="navigationBottom">
    <div class="container rougeFonce">
      <?php wp_nav_menu( array('menu' => 'Navigation header' )); ?>
  	</div>
  </div>
</div>
  <section>
