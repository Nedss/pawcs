<?php
include "header.php";
?>

<div class="row">
  <div class="col text-center">
    <h1> Consultez toutes nos annonces ! </h1>
  </div>
</div>

<?php
include "bdd.php";
$maBd = connexionbd();
$maRequete = "SELECT * FROM nedss.annonces;";
$resRequete = requete($maBd, $maRequete);

foreach ($resRequete as $value => $line) {
  echo "<div class='row border border-dark rounded m-2 text-center'>";
  echo "<div class='col-4'>";
  #echo  "<p> Ligne n°" . $value . ':' . $line . "</p>";
  echo "<a href='" . $line['photo'] . "' >"; 
  echo "<img src='" . $line['photo'] . "' class='img-thumbnail' alt='Photo annonce' title='Cliquez pour aggrandir' />"; 
  echo "</a>";
  echo "</div>";
  echo "<div class='col-8 cell-align'>";
  echo "<div>";
  echo "<p>" . $line['titre'] . "</p>";
  echo "<p>" . $line['categorie'] . "</p>";
  echo "<p>" . $line['prix'] . " euros </p>";
  echo "<p>" . $line['date_ajout'] . "</p>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

?>

<?php
include "footer.php";
?>
