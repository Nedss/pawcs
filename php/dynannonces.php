<?php 
include "header.php";
?>

<div class="row">
  <div class="col text-center">
    <h1> Annonces & Recherches </h1>
  </div>
</div>
<div id="liste-annonces">
</div>
<div class="row">
  <div class="col">
    <form id="recherche"> 
      <div class="form-group">
        <label for="InputRecherche"> Recherche d'annonces</label>

        <input name="recherche" class="form-control" type="text" placeholder="Recherche">
        <small id="rechercheHelp" class="form-text text-muted"> Pas de mots-clés = toutes les annonces. </small>
      </div>
      <button class="btn btn-dark">Recherche</button>
    </form>

    <!--<button class="btn btn-primary" onclick="lireAnnonces()">Afficher toutes les annonces !</button> -->
  </div>
</div>


<?php
include "footer.php";
?>

