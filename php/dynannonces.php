<?php 
include "header.php";
?>

<script type="text/javascript" src="/Cours/TechnoWeb/PROJET/pawcs/js/recherche.js"></script>
<script type="text/javascript" src="/Cours/TechnoWeb/PROJET/pawcs/js/suppression.js"></script>
<div class="row">
  <div class="col text-center">
    <h1> Annonces & Recherches </h1>
  </div>
</div>
<div class="row">
  <div class="col">
    <form id="recherche"> 
      <div class="form-group">
        <label for="InputRecherche"> Recherche d'annonces</label>

        <input name="recherche" class="form-control" type="text" placeholder="Recherche">
        <small id="rechercheHelp" class="form-text text-muted"> Pas de mots-cl�s = toutes les annonces. </small>
      </div>
      <button class="btn btn-dark">Recherche</button>
    </form>
    <?php
      if(isset($_SESSION["pseudo"])){
        echo '<div id="annonces-login"></div>';
      } else {
        echo '<div id="liste-annonces"></div>';
      }
    ?>


    <!--<button class="btn btn-primary" onclick="lireAnnonces()">Afficher toutes les annonces !</button> -->
  </div>
</div>

<div class="row mt-3">
  <div class="col">
    <input type="button" value="Supprimer les annonces s�lectionn�es" class="btn btn-danger btn-lg btn-block" onclick="suppression()" />
  </div>
</div>
<div class="row">
  <div class="col">
    <a href="/Cours/TechnoWeb/PROJET/pawcs/php/form_annonce.php" class="btn btn-secondary btn-lg btn-block active" role="button" aria-pressed="true">
      Ajoutez votre annonce !
    </a>

<?php
include "footer.php";
?>

