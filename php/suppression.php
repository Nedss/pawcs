<?php 

session_start();
include "bdd.php";
$bdd=connexionbd();

if(isset($_SESSION['pseudo'])){
  if(isset($_REQUEST)){
    foreach ($_REQUEST as $value => $line){
      $requete = "DELETE from nedss.annonces WHERE id=" . $line['id'] . ";";
    requete($bdd, $requete);

    }
  }
}

?>
