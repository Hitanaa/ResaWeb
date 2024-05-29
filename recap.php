<?php

    if (!empty($_REQUEST['nom']) && !empty($_REQUEST['prenom'])) {
        $firstname = $_REQUEST['prenom'];
        $lastname = $_REQUEST['nom'];
        $email = $_REQUEST['email'];
        $dateDebut = new DateTime($_REQUEST['anneeDebut']. '-'.$_REQUEST['moisDebut'].'-'.$_REQUEST['jourDebut']);
        $dateFin = new DateTime($_REQUEST['anneeRetour'] .'-'.$_REQUEST['moisRetour'] .'-'.$_REQUEST['jourRetour']);
        $interval = $dateDebut->diff($dateFin);
        $nameMoto2 = $_REQUEST['nameMoto2'];

        // Connexion à la base de données
        include('connexionBDD.php');

        $conn = BDD::getBDD();
        // Récupérer l'ID de la moto à partir des paramètres de la requête
        $idMoto = $_REQUEST['id'];

        // Requête pour récupérer les informations de la moto
        $sqlMoto = "SELECT * FROM moto WHERE id = :idMoto";
        $motosStatement = $conn->prepare($sqlMoto);
        $motosStatement->bindParam(':idMoto', $idMoto, PDO::PARAM_INT);
        $motosStatement->execute();
        $moto = $motosStatement->fetch();
    }
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récapitulatif - Prestige</title>

    <link rel="stylesheet" href="style_reservation.css">
    <link rel="stylesheet" href="style_recap.css">
    <link rel="stylesheet" href="style.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nokora:wght@100;300;400;700;900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="Images/favicon.ico">

    <!-- Library AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>

<meta name="description" content="Récapitulatif de la commande" />

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

    <h1>RÉCAPITULATIF<br>DE <span class="special-font">VOTRE COMMANDE</span></h1>
    <div class="overlay">
        <div class="circle4"></div>
        <div class="circle3"></div>
        <img src="Images/forme2.png" class="left-image">
        <div class="container">
        <h2 class="perso">INFORMATIONS <span class="special-font">PERSONNELLES</span></h2>
        <div class="info">
            <div class="name-container">
                <p><b>Prénom :</b> <?php echo htmlspecialchars($firstname); ?></p>
                <p><b>Nom :</b> <?php echo htmlspecialchars($lastname); ?></p>
            </div>
            <p><b>Email :</b> <?php echo htmlspecialchars($email); ?></p>
        </div>

        <h3>DÉTAILS DE <span class="special-font">RÉSERVATION</span></h3>
        <div class="info-container">
            <div class="text-info">
                <p><b>Nom :</b> <?php echo htmlspecialchars($moto['titre']); ?></p>
                <p><b>DATE DE DÉBUT :</b> <?php echo $dateDebut->format('d/m/Y'); ?></p>
                <p><b>DATE DE RETOUR :</b> <?php echo $dateFin->format('d/m/Y'); ?></p>
                <p><b>Prix :</b> <?php echo htmlspecialchars($moto['prix']); ?>€</p>
            </div>
            <img src="Images/moto_<?php echo htmlspecialchars($moto['id']); ?>.png" alt="Image moto" class="info-image">
        </div>

        <?php if (!empty($nameMoto2) && $nameMoto2 != 'all') : 
            $sqlMoto2 = "SELECT * FROM moto WHERE titre = :nameMoto";
            $motosStatement2 = $conn->prepare($sqlMoto2);
            $motosStatement2->bindParam(':nameMoto', $nameMoto2, PDO::PARAM_STR);
            $motosStatement2->execute();
            $moto2 = $motosStatement2->fetch();
        ?>
        <hr style="border: none; border-top: 1px solid #fff;">
        <div class="info-container">
            <div class="text-info">
                <p><b>Nom :</b> <?php echo htmlspecialchars($nameMoto2); ?></p>
                <p><b>DATE DE DÉBUT :</b> <?php echo $dateDebut->format('d/m/Y'); ?></p>
                <p><b>DATE DE RETOUR :</b> <?php echo $dateFin->format('d/m/Y'); ?></p>
               
                <p><b>Prix :</b> <?php echo htmlspecialchars($moto2['prix']); ?>€</p>
            </div>
            <img src="Images/moto_<?php echo htmlspecialchars($moto2['id']); ?>.png" alt="Image moto" class="info-image">
        </div>
        <?php endif; ?>

        <a href="index.php"> <button class="btn-confirm">CONFIRMER</button></a>
        </div>
        <div>
            <img src="Images/forme1.png" class="right-image">
        </div>
    </div>

    <!-- Mentions Légales / Contacts -->
    <footer>
        <ul>
            <li class="hover-underline-animation"><b><a href="terme.html"><h4>TERMES</h4></a></b></li>
            <li class="hover-underline-animation"><b><a href="confidentialite.html"><h4>CONFIDENTIALITÉ</h4></a></b></li>
            <li class="hover-underline-animation"><b><a href="contact.html"><h4>CONTACTEZ-NOUS</h4></a></b></li>
        </ul>
        <p>Tout droit réservé à Prestige © 2024</p>
    </footer>

    <!-- Library AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script_recap.js"></script>

</body>

</html>
