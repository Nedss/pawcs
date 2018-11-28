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
$maRequete = "SELECT * FROM root.annonces;";
$resRequete = requete($Bd, $maRequete);




?>

<?php
include "footer.php";
?>
