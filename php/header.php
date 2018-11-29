<?php

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

    <div class="row bg-dark">
      <div class="col">
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" rel="home" href="#" title="Buy Sell Rent Everything">
              <img style="max-width:100px; margin-top:-7px;" src="/Cours/TechnoWeb/PROJET/pawcs/assets/fig/main_logo.png">
            </a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="/Cours/TechnoWeb/PROJET/pawcs/index.php"> Accueil 
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/Cours/TechnoWeb/PROJET/pawcs/php/all_annonces.php"> Toutes nos annonces </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#"> Gestion des annonces</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> 
                Recherche
              </button>
            </form>
          </div>
        </nav>
      </div>
    </div>

