<!-- Cette règle est non applicable car Je n'ai pas d'image porteuse d'information -->
<!-- REGLES 113 // OPQUAST - Chaque image porteuse d'information est dotée d'une alternative textuelle appropriée. -->
 

<!-- ========================================================================================= -->
<!-- REGLES 160 // OPQUAST - Le focus clavier n'est ni supprimé ni masqué. -->
<!-- REGLES 161 // OPQUAST - Le site est intégralement utilisable au clavier. -->
<!-- REGLES 162 // OPQUAST - La navigation au clavier s'effectue dans un ordre prévisible. -->

<!-- ========================================================================================= -->
<!-- REGLES 175 // OPQUAST - La charte graphique est cohérente sur l'ensemble du site. -->
<!-- REGLES 176 // OPQUAST - L'information n'est pas véhiculée uniquement par la couleur. -->
<!-- REGLES 177 // OPQUAST - Les contenus sont présentés avec un contraste suffisant par rapport à leur arrière-plan. -->
<!-- REGLES 181 // OPQUAST - La taille des éléments cliquables est suffisante. -->

<!-- ========================================================================================= -->
<!-- REGLES 185 // OPQUAST - Une famille générique de police est indiquée comme dernier élément de substitution. -->
<!-- REGLES 186 // OPQUAST - Les styles ne justifient pas le texte. -->
<!-- REGLES 187 // OPQUAST - Les mises en majuscules à des fins décoratives sont effectuées à l'aide des styles -->

<!-- ========================================================================================= -->
<!-- REGLES 227 // OPQUAST - Le contenu de chaque page est organisé selon une structure de titres et sous-titres hiérarchisée. -->

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

<!-- REGLES 150 // OPQUAST - Il est possible de revenir à la page d'accueil depuis toutes les pages. -->
<!-- REGLES 152 // OPQUAST - Les items actifs de menu sont signalés. -->
<!-- REGLES 154 // OPQUAST - Les icônes de navigation sont accompagnées d'une légende explicite. -->
<!-- ----------- Nav Bar ----------- -->
    <header>
        <nav>
            <a href="index.php" class="logo_nav"><img src="Images/logo_nav.png" alt=""></a>
            <div class="menu-icon">
                <i class="fas fa-bars"></i>
            </div>
            <ul class="nav-links">
                <li><b><a href="index.php" class="hover-underline-animation">Accueil</a></b></li>
                <li><b><a href="catalogue.php" class="hover-underline-animation">Catalogue</a></b></li>
                <li><b><a href="apropos.php" class="hover-underline-animation">À Propos</a></b></li>
            </ul>
        </nav>
    </header>

<!-- REGLES 83 // OPQUAST - La soumission d'un formulaire est suivie d'un message indiquant la réussite ou non de l'action souhaitée. -->
<!-- ----------- Récapitulatif ----------- -->
    <h1>RÉCAPITULATIF<br>DE <span class="special-font">VOTRE COMMANDE</span></h1>
    <div class="overlay">
        <div class="circle2"></div>
        <div class="circle"></div>
        <img src="Images/forme2.png" class="left-image">
        <div class="container">
            <div class="perso">

            <!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
<!-- 
                <fieldset>
                    <legend>Informations personnelles</legend>
                </fieldset> -->

                <h2>INFORMATIONS <span class="special-font">PERSONNELLES</span></h2>
            </div>
            <div class="info">
                <div class="name-container">
                    <p><b>Prénom :</b> <?php echo htmlspecialchars($_REQUEST['prenom']); ?></p>
                    <p><b>Nom :</b> <?php echo htmlspecialchars($_REQUEST['nom']); ?></p>
                </div>
                <p><b>Email :</b> <?php echo htmlspecialchars($_REQUEST['email']); ?></p>
            </div>

            <!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
        <!-- <fieldset>
                    <legend>Date de début et de retour</legend>
                </fieldset> -->

            <h3>DÉTAILS DE <span class="special-font">RÉSERVATION</span></h3>
            <form id="confirmationForm" method="post" action="send_email.php">
                <input type="hidden" name="prenom" value="<?php echo htmlspecialchars($_REQUEST['prenom']); ?>">
                <input type="hidden" name="nom" value="<?php echo htmlspecialchars($_REQUEST['nom']); ?>">
                <input type="hidden" name="email" value="<?php echo htmlspecialchars($_REQUEST['email']); ?>">
                <input type="hidden" name="anneeDebut" value="<?php echo htmlspecialchars($_REQUEST['anneeDebut']); ?>">
                <input type="hidden" name="moisDebut" value="<?php echo htmlspecialchars($_REQUEST['moisDebut']); ?>">
                <input type="hidden" name="jourDebut" value="<?php echo htmlspecialchars($_REQUEST['jourDebut']); ?>">
                <input type="hidden" name="anneeRetour" value="<?php echo htmlspecialchars($_REQUEST['anneeRetour']); ?>">
                <input type="hidden" name="moisRetour" value="<?php echo htmlspecialchars($_REQUEST['moisRetour']); ?>">
                <input type="hidden" name="jourRetour" value="<?php echo htmlspecialchars($_REQUEST['jourRetour']); ?>">
                <input type="hidden" name="nameMoto2" value="<?php echo htmlspecialchars($_REQUEST['nameMoto2']); ?>">
                <input type="hidden" name="idMoto" value="<?php echo htmlspecialchars($_REQUEST['id']); ?>">

            <?php
                include('connexionBDD.php');
                $conn = Database::getBDD();
                $idMoto = $_REQUEST['id'];

                

                // Récupérer les informations de la première moto
                $sqlMoto = "SELECT * FROM moto WHERE id = :idMoto";
                $motosStatement = $conn->prepare($sqlMoto);
                $motosStatement->bindParam(':idMoto', $idMoto, PDO::PARAM_STR);
                $motosStatement->execute();
                $moto = $motosStatement->fetch();

                $dateDebut = new DateTime($_POST['anneeDebut'] . '-' . $_POST['moisDebut'] . '-' . $_POST['jourDebut']);
                $dateFin = new DateTime($_POST['anneeRetour'] . '-' . $_POST['moisRetour'] . '-' . $_POST['jourRetour']);
                $interval = $dateDebut->diff($dateFin);
                $totalDays = $interval->days + 1; // Inclure le premier jour dans le comptage

                $prixTotalMoto = $moto['prix'] * $totalDays;
                $total = $prixTotalMoto;
            ?>
            <div class="info-container">
                <div class="text-info">

                <!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
        <!-- <fieldset>
                    <legend>Date de début et de retour</legend>
                </fieldset> -->

                    <p><b>Nom :</b> <?php echo htmlspecialchars($moto['titre']); ?></p>
                    <p><b>DATE DE DÉBUT :</b> <?php echo htmlspecialchars($_POST['jourDebut'] . '/' . $_POST['moisDebut'] . '/' . $_POST['anneeDebut']); ?></p>
                    <p><b>DATE DE RETOUR :</b> <?php echo htmlspecialchars($_POST['jourRetour'] . '/' . $_POST['moisRetour'] . '/' . $_POST['anneeRetour']); ?></p>
                    <p><b>Prix par jour :</b> <?php echo $moto['prix']; ?>€</p>
                    <p><b>Total pour <?php echo htmlspecialchars($totalDays); ?> jours :</b> <?php echo htmlspecialchars($prixTotalMoto); ?>€</p>
                </div>
                <img src="../Images/moto_<?php echo htmlspecialchars($idMoto); ?>.png" alt="Image moto" class="info-image">
            </div>

            <?php if (!empty($_POST['nameMoto2']) && $_POST['nameMoto2'] != 'all') : ?>
                <?php 
                    $nameMoto2 = $_POST['nameMoto2'];
                    $sqlMoto2 = "SELECT * FROM moto WHERE titre = :nameMoto2";
                    $motosStatement2 = $conn->prepare($sqlMoto2);
                    $motosStatement2->bindParam(':nameMoto2', $nameMoto2, PDO::PARAM_STR);
                    $motosStatement2->execute();
                    $moto2 = $motosStatement2->fetch();

                    $prixTotalMoto2 = $moto2['prix'] * $totalDays;
                    $total += $prixTotalMoto2;
                ?>
                <hr style="border: none; border-top: 1px solid #fff;">
                <div class="info-container">
                    <div class="text-info">
                        <p><b>Nom :</b> <?php echo htmlspecialchars($moto2['titre']); ?></p>
                        <p><b>DATE DE DÉBUT :</b> <?php echo htmlspecialchars($_POST['jourDebut'] . '/' . $_POST['moisDebut'] . '/' . $_POST['anneeDebut']); ?></p>
                        <p><b>DATE DE RETOUR :</b> <?php echo htmlspecialchars($_POST['jourRetour'] . '/' . $_POST['moisRetour'] . '/' . $_POST['anneeRetour']); ?></p>
                        <p><b>Prix par jour :</b> <?php echo $moto2['prix']; ?>€</p>
                        <p><b>Total pour <?php echo htmlspecialchars($totalDays); ?> jours :</b> <?php echo htmlspecialchars($prixTotalMoto2); ?>€</p>
                    </div>
                    <img src="Images/moto_<?php echo htmlspecialchars($moto2['id']); ?>.png" alt="Image moto" class="info-image">
                </div>
            <?php endif; ?>

            <!-- ----------- Prix Total ----------- -->
            <div class="total">
                <h2>PRIX <span class="special-font">TOTAL</SPAN> :</h2>
                <p><?php echo htmlspecialchars($total); ?>€</p>
            </div>
            
            <!-- REGLES 82 // OPQUAST - La page affichée après l'envoi d'un formulaire permet de reprendre directement la navigation. -->
        
        <!-- ----------- Bouton Confirmation ----------- -->
            <button type="submit" class="btn-confirm">CONFIRMER</button>
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
<script src="script_mail.js"></script>

</body>

</html>