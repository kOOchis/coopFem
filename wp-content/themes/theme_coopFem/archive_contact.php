
<?php
/* Template Name: contacter */
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
  <div class="googleMap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2626.0673412210936!2d2.34566311606417!3d48.83785417928552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671eb6ff6117d%3A0xf49dbc554073122e!2s39+Rue+Broca%2C+75005+Paris!5e0!3m2!1sfr!2sfr!4v1484517607039" width="1170" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</div>

<div class="container">
  <h2 style="margin-top:2rem;">Nous contacter</h2>
  <div class="row">
    <div class="col-md-6">
      <h3>Détails</h3>
      <p>39 rue Broca <br>75005 Paris</p>
      <p>Tél. : 01 42 17 10 90 / Fax : 01 42 17 10 89</p>
      <p>contact@cooperation-feminine.fr</p>
    </div>

    <div class="col-md-6">
      <div class="success">
        <h2 class="messageSucess">Votre message à bien été envoyé<br>Merci</h2>
      </div>
      <h3>Nous envoyer un email</h3>
      <form id="formulaire" method="post" action="envoie.php">

        <div class="col-md-12 colForm">
          <div class="form-group">
            <input type="text" class="form-control" id="nom" name="nom" required placeholder="Nom">
          </div>
        </div>

        <div class="col-md-12 colForm">
          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
        </div>

        <div class="col-md-12 colForm">
          <div class="form-group">
            <textarea class="form-control" id="message" name="message" rows="4" required placeholder="Message"></textarea>
          </div>
        </div>

        <div class="col-md-12 colForm text-right">
          <button type="submit" class="btn btn-primary bouton" name="action" value="Envoyer">Envoyer</button>
        </div>

      </form>
    </div>
    </div>
  </div>


<!-- fin contenu-->
<?php get_footer(); ?>
