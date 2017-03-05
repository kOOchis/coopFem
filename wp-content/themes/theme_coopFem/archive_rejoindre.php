
<?php
/* Template Name: nous rejoindre */
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
    <div class="row" style=" margin-top:1rem;padding-left: 1rem;">
        <?php $url = home_url(); ?>
        <a class="retourHome" href="<?php echo esc_url( $url ); ?>"> <i class="fa fa-home" aria-hidden="true"> </i> Retour vers l'accueil</a>
    </div>
  <h2 style="margin-top:2rem;">Nous rejoindre</h2>
  <div class="row">

    <form>
  <fieldset class="form-group">
    <!-- <h1>Appel à cotisation</h1> -->
    <h3>Je souhaite</h3>
    <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
        Adhérer à la Coopération Féminine + m'abonner au magazine - 80€
      </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
        Adhérer à la Coopération Féminine - 70€
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
        M'abonner au magazine - 25€
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios4" value="option4" disabled>
        Adhérer à deux + m'abonner au magazine - 115€
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios5" value="option5" disabled>
        Adhérer comme membre bienfaiteur  - à partir de 130€
      </label>
    </div>
    <div class="form-check disabled">
    <label class="form-check-label">
        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios6" value="option6" disabled>
        faire un don de <input type="text" name="textOptionRadio6">
      </label>
    </div>
  </fieldset>
  <div class="form-check">
    <h3>Je règle à l'ordre de la Coopération Féminine</h3>

    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Par chèque bancaire
    </label>
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Par chèque postal
    </label>
    <p><br>Un Cerfa correspondant au montant de l'adhésion vous sera délivré <br><br>
    <span style="font-weight:bold">À imprimer et à envoyer avec le chèque à l'adresse suivante : Coopération Féminine - 39 rue Broca, 75005 Paris</span></p>
  </div>

  <div class="form-check">
    <h3><br>Mes coordonnées</h3>
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      Mme
    </label>
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input">
      M.
    </label>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1"><br>Nom</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Téléphone</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <h3>Je parraine</h3>
    <p>... et recevez, vous et la nouvelle adhérente, le journal gratuitement
pendant un an (vous ne paierez donc que 65€ pendant un an pour l'adhésion + magazine).</p>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nom</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Prénom</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Adresse</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Téléphone</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" style="font-family: 'Roboto', sans-serif !important;" class="alignright btn btn-primary">Imprimer</button>
</form>


    </div>
  </div>


<!-- fin contenu-->
<?php get_footer(); ?>
