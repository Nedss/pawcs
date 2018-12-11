<?php
session_start();
?>

<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>OURS, annonces en ligne</title>
  <link rel="stylesheet" href="/Cours/TechnoWeb/PROJET/pawcs/assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="/Cours/TechnoWeb/PROJET/pawcs/assets/customCSS/custom.css">
</head>
<body>
  <div class="container">

    <div class="row bg-dark mb-5">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" rel="home" href="/Cours/TechnoWeb/PROJET/pawcs/index.php" title="Buy Sell Rent Everything">
              <img style="max-width:100px; margin-top:-7px;" src="/Cours/TechnoWeb/PROJET/pawcs/assets/fig/main_logo.png">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="/Cours/TechnoWeb/PROJET/pawcs/php/all_annonces.php"> Toutes nos annonces </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Cours/TechnoWeb/PROJET/pawcs/php/dynannonces.php"> Annonces & Recherche </a>
              </li>
            </ul>
            <!--
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> 
                Recherche
              </button>
            </form>
            -->
            <?php
              if(isset($_SESSION["pseudo"])) {
                echo "
                  
                  <a href='/Cours/TechnoWeb/PROJET/pawcs/php/deconnexion.php' type='button' class='btn btn-lg btn-secondary'> Se déconnecter (".$_SESSION["pseudo"].") </a>";
              } else {
                echo "
                  <a href='/Cours/TechnoWeb/PROJET/pawcs/php/connexion.php' type='button' class='btn btn-lg btn-secondary'> Se connecter </a>";
              }
            ?>
              
          </div>
        </nav>
      </div>
    </div>

