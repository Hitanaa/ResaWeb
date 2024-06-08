<?php
// Connexion à la base de données
include('connexionBDD.php');

$conn = Database::getBDD();

// Récupérer l'ID de la moto à partir des paramètres de la requête
$idMoto = $_REQUEST['id'];

// Requête pour récupérer les informations de la moto
$sqlMoto = "SELECT * FROM moto WHERE id = :idMoto"; 
$motosStatement = $conn->prepare($sqlMoto);
$motosStatement->bindParam(':idMoto', $idMoto, PDO::PARAM_INT);
$motosStatement->execute();
$moto = $motosStatement->fetch();

// Requête pour récupérer toutes les images associées à la moto
$sqlImages = "SELECT * FROM image WHERE idMoto = :idMoto";
$ImagemotosStatement = $conn->prepare($sqlImages);
$ImagemotosStatement->bindParam(':idMoto', $idMoto, PDO::PARAM_INT);
$ImagemotosStatement->execute();
$images = $ImagemotosStatement->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue - Prestige</title>

  <!-- Relier le CSS au HTML  -->
  <link rel="stylesheet" href="style_details.css">
  <link rel="stylesheet" href="style.css">

  <!-- Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nokora:wght@100;300;400;700;900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

  <!-- Librairy AOS  -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="Images/favicon.ico">

</head>

<body>

<meta name="description" content="Plus de détails" />

<!-- --- Bouton pour revenir à la page d'accueil du site --- -->
<a class="btn-top" href="#top">
        <svg src="img/direction.svg" width="24" height="20">
            <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"></path>
        </svg>
    </a>

<!-- ----------- Nav Bar ----------- -->
<header>
    <nav>
      <a href="index.php" class="logo_nav"><img src="Images/logo_nav.png" alt=""></a>
      <ul>
        <li><b><a href="index.php" class="hover-underline-animation">Accueil</a></b></li>
        <li><b><a href="catalogue.php" class="hover-underline-animation">Catalogue</a></b></li>
        <li><b><a href="apropos.php" class="hover-underline-animation" >À Propos</a></b></li>
      </ul>
    </nav>
  </header>

  <!-- ----------- Titre ----------- -->
  <div class="title">
    <h1><?=  $moto['titre'] ?></h1>
    <h1 class="upside"> <?=  $moto['titre'] ?></h1>
  </div>

  <!-- ----------- Bouton pour revenir en haut  ----------- -->
  <div class="button-top">
  <?php
     echo '<a href="reservation.php?id='.$idMoto.'">RÉSERVER</a>';
     ?>
  </div>

  <!-- ----------- Texte présentation de la moto ----------- -->
  <div class="container">
    <div>
      <h2>PLONGEZ DANS <span class="break-line">LE <span class="special-font">PRESTIGE</span></span></h2>

      <p data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="500"><?php echo $moto['description1']; ?></p>

      <p data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="500"><?php echo $moto['description2']; ?></p>
    </div>
    <?php

    echo '<img src="'.$images[1]['lien'].'" alt="" class="transparent">';
    echo '<img src="'.$images[0]['lien'].'" alt="" class="image-moto">';
    ?>
  </div>

  <!-- ----------- Texte pour les roues de la moto ----------- -->
  <div class="container_wheel">
    <p data-aos="fade-down"
    data-aos-easing="linear"
    data-aos-duration="500"><?php echo $moto['description3']; ?></p>
    <div class="wheel" >
    <?php
    echo '<img src="'.$images[2]['lien'].'" alt="">';
    ?>
    </div>
  </div>

  <!-- ----------- Texte pour le moteur de la moto ----------- -->
  <div class="container_motor">
    <div class="motor">
      <?php
        echo '<img src="'.$images[3]['lien'].'" alt="">';
      ?>
    </div>
    <div class="motor_text">
        <p data-aos="fade-down"
        data-aos-easing="linear"
        data-aos-duration="500"><?php echo $moto['description4']; ?></p>
    </div>
</div>

<!-- ----------- Texte + Bouton réserver ----------- -->
<body>
  <div class="container">
  <div class="button-container">
      <h3>DÉCOUVREZ LE VÉRITABLE <span class="special-font">PRESTIGE</span> SANS PLUS ATTENDRE !</h3>

      <?php
     echo '<a href="reservation.php?id='.$idMoto.'">RÉSERVER</a>';
     ?>
  </div>
</div>



  <!-- ----------- Mentions Légales / Contacts -----------  -->
  <footer>
    <ul>
      <li class="hover-underline-animation"><b><a href="terme.html">
            <h4>TERMES</h4>
          </a></b></li>
      <li class="hover-underline-animation"><b><a href="confidentialite.html">
            <h4>CONFIDENTIALITÉ</h4>
          </a></b></li>
      <li class="hover-underline-animation"><b><a href="contact.html">
            <h4>CONTACTEZ-NOUS</h4>
          </a></b></li>
    </ul>
    <p>Tous droits réservés à Prestige © 2024</p>
  </footer>

  <!-- Librairy AOS  -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>