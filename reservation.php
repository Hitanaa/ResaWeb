<?php

$idMoto = $_REQUEST['id'];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation - Prestige</title>

    <!-- Relier le CSS au HTML  -->
    <link rel="stylesheet" href="style_reservation.css">
    <link rel="stylesheet" href="style.css">

    <!-- Fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nokora:wght@100;300;400;700;900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="Images/favicon.ico">

    <!-- Library AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
<meta name="description" content="Réservation" />

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

  <!-- ----------- Formulaire ----------- -->
    <h1>RÉSERVATION<br>D'UNE <span class="special-font">MOTO</span></h1>
    <div class="overlay">
        <img src="Images/forme2.png" class="left-image">
        <div class="circle2"></div>
        <div class="circle"></div>
        <div class="form-container">
        <form id="reservationForm" action="<?php echo 'recap.php?id='.$idMoto; ?>" method="post">

            <!-- Informations personnelles -->
            <div class="form-group">
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="text" name="nom" placeholder="Nom" required>
            </div>
            
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <!-- Date de début -->
            <h2 class="debut">DATE DE DÉBUT</h2>

            <div class="form-group calendar">
                <select name="jourDebut" id="jourDebut">
                    <option value="" disabled selected>Jour</option>
                    <?php
                    for ($i = 1; $i <= 31; $i++) {
                        echo "<option value='$i'>$i</option>";
                    }
                        ?>
                </select>
                <select name="moisDebut" id="moisDebut">
                    <option value="" disabled selected>Mois</option>
                    <?php
                        $mois = array(
                            "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
                        );
                        foreach ($mois as $key => $value) {
                            echo "<option value='" . ($key + 1) . "'>$value</option>";
                        }
                    ?>
                </select>
                <select name="anneeDebut" id="anneeDebut">
                    <option value="" disabled selected>Année</option>
                    <?php
                        $anneeActuelle = date("Y");
                        for ($i = $anneeActuelle; $i <= $anneeActuelle + 10; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Date de retour -->
            <h2 class="retour">DATE DE RETOUR</h2>

            <div class="form-group calendar">
                <select name="jourRetour" id="jourRetour">
                    <option value="" disabled selected>Jour</option>
                    <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <select name="moisRetour" id="moisRetour">
                    <option value="" disabled selected>Mois</option>
                    <?php
                        $mois = array(
                            "Janvier", "Février", "Mars", "Avril", "Mai", "Juin",
                            "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"
                        );
                        foreach ($mois as $key => $value) {
                            echo "<option value='" . ($key + 1) . "'>$value</option>";
                        }
                    ?>
                </select>
                <select name="anneeRetour" id="anneeRetour">
                    <option value="" disabled selected>Année</option>
                    <?php
                        $anneeActuelle = date("Y");
                        for ($i = $anneeActuelle; $i <= $anneeActuelle + 10; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
            </div>

            <!-- Deuxième moto -->
            <div class="moto">
                <h2>UNE DEUXIÈME <span class="special-font">MOTO </span>?</h2>
                <select id="name-moto" name="nameMoto2">
                    <option value="all">Aucune</option>
                    <optgroup label="Moto">
                        <option value="Amethyste">Améthyste</option>
                        <option value="Diamant">Diamant</option>
                        <option value="Onyx">Onyx</option>
                        <option value="Opale">Opale</option>
                        <option value="Quartz">Quartz</option>
                        <option value="Saphir">Saphir</option>
                    </optgroup>
                </select>
            </div>

            <!-- Confirmation -->
            <div class="confirmation">
                <input type="checkbox" id="confirm-checkbox" required>
                <label for="confirm-checkbox">Vous confirmez votre achat et certifiez avoir pris connaissance et accepté les conditions générales de vente. Un email de confirmation vous sera envoyé.</label>
            </div>

            <!-- Bouton Réserver -->
            <div class="form-group">
                <input type="submit" value="RÉSERVER">
            </div>
        </form>
        <p id="errorMessage" style="color: red; font-family: Nokora, sans-serif; font-weight: 500;
            font-style: normal; font-size: 0.8rem;"></p>
        </div>
        <img src="Images/forme1.png" class="right-image">
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
</body>


    <!-- Librairy -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script_reservation.js"></script>


</html>
