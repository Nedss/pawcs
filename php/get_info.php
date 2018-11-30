<?php 
include "bdd.php";

header("Content-type: application/json");

$maBd = connexionbd(); 

$resultat = $maBd->query("SELECT * FROM nedss.annonces");
$annonces = $resultat->FetchAll(PDO::FETCH_ASSOC);

// HTTP OK
http_response_code(200);

echo json_encode($annonces);

?>
