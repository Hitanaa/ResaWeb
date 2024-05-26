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
    <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

    <!-- Favicon  -->
    <link rel="icon" href="Images/favicon.ico">

    <!-- Library AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
    <!-- ----------- Nav Bar ----------- -->
    <header>
        <nav>
            <ul>
                <li><b><a href="index.php">ACCUEIL</a></b></li>
                <li><b><a href="catalogue.php">CATALOGUE</a></b></li>
                <li><b><a href="apropos.php">À PROPOS</a></b></li>
            </ul>
        </nav>
    </header>

    <h1>RÉSERVATION<br>D'UNE <span class="special-font">MOTO</span></h1>
    <div class="overlay">
        <img src="Images/forme2.png" class="left-image">
        <div class="circle2"></div>
        <div class="circle"></div>
        <div class="form-container">
            <form action="<?php echo 'recap.php?id='.$idMoto; ?>" method="post">
                <div class="form-group">
                    <input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                
                <div class="form-group">
                    <input type="email" name="email" placeholder="Email" required></textarea>
                </div>

                <h2 class="debut">DATE DE DÉBUT</h2>

                <div class="form-group calendar">
                    <select name="jourDebut">
                        <option value="" disabled selected>Jour</option>
                        <?php
                        for ($i = 1; $i <= 31; $i++) {
                            echo "<option value='$i'>$i</option>";
                        }
                            ?>
                    </select>
                    <select name="moisDebut">
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
                    <select name="anneeDebut">
                        <option value="" disabled selected>Année</option>
                        <?php
                            $anneeActuelle = date("Y");
                            for ($i = $anneeActuelle; $i <= $anneeActuelle + 10; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>

                <h2 class="retour">DATE DE RETOUR</h2>

                <div class="form-group calendar">
                    <select name="jourRetour">
                        <option value="" disabled selected>Jour</option>
                        <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                    <select name="moisRetour">
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
                    <select name="anneeRetour">
                        <option value="" disabled selected>Année</option>
                        <?php
                            $anneeActuelle = date("Y");
                            for ($i = $anneeActuelle; $i <= $anneeActuelle + 10; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                        ?>
                    </select>
                </div>

                    <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $jourDebut = $_POST['jourDebut'];
                        $moisDebut = $_POST['moisDebut'];
                        $anneeDebut = $_POST['anneeDebut'];
                        $jourRetour = $_POST['jourRetour'];
                        $moisRetour = $_POST['moisRetour'];
                        $anneeRetour = $_POST['anneeRetour'];

                        // Validate date format (optional): You can add checks for valid day, month, and year ranges.

                        // Check if start date is after end date
                        $startDate = strtotime("$anneeDebut-$moisDebut-$jourDebut");
                        $endDate = strtotime("$anneeRetour-$moisRetour-$jourRetour");

                        if ($startDate > $endDate) {
                            $errorMessage = "La date de début ne peut pas être après la date de fin.";
                            // Redirect to form with error message (optional):
                            // header("Location: recap.php?id=" . $idMoto . "&error=" . urlencode($errorMessage));
                            // exit();
                        } else {
                            // Process form data (e.g., insert into database)
                            // ... your code to handle valid form submission ...
                        }
                    }
                    ?>
                <div class="moto">
                    <h2>UNE DEUXIÈME MOTO ?</h2>
                    <select id="name-moto" name="nameMoto2">
                        <option value="all">Aucune</option>
                        <option value="john">Émeraude</option>
                        <option value="emma">Améthyste</option>
                        <option value="alex">Aigue-marine</option>
                        <option value="sarah">Onyx</option>
                        <option value="michael">Saphir</option>
                        <option value="lisa">Diamant</option>
                    </select>
                </div>

                <div class="form-group">
                    <input type="submit" value="RÉSERVER" />;
                </div>
            </form>
        </div>
        <img src="Images/forme1.png" class="right-image">
    </div>
    
     <!-- ----------- Mentions Légales / Contacts -----------  -->
<footer>
    <ul>
        <li class="hover-underline-animation"><b><a href="terme.html"><h4>TERMES</h4></a></b></li>
        <li class="hover-underline-animation"><b><a href="confidentialite.html"><h4>CONFIDENTIALITÉ</h4></a></b></li>
        <li class="hover-underline-animation"><b><a href="contact.html"><h4>CONTACTEZ-NOUS</h4></a></b></li>
    </ul>
    <p>Tout droit réservé à Prestige © 2024</p>
</footer>

<!-- Librairy -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

</body>

</html>