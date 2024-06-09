<!-- Cette règle est non applicable car il n'y a pas de mot de passe dans mon site web. -->
<!-- REGLES 74 // OPQUAST - Les caractères saisis dans un champ de mot de passe peuvent être affichés en clair. -->

<!-- Cette règle est non applicable car le formulaire de mon site n'est pas réparti sur plusieurs pages mais sur UNE page -->
<!-- REGLES 81 // OPQUAST - Lors de la saisie d'un formulaire réparti sur plusieurs pages, un récapitulatif global est affiché avant l'envoi définitif. -->

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

<!-- REGLES 150 // OPQUAST - Il est possible de revenir à la page d'accueil depuis toutes les pages. -->
<!-- REGLES 152 // OPQUAST - Les items actifs de menu sont signalés. -->
<!-- REGLES 154 // OPQUAST - Les icônes de navigation sont accompagnées d'une légende explicite. -->
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


<!-- REGLES 67 // OPQUAST - Chaque champ de formulaire est associé dans le code source à une étiquette qui lui est propre. -->
<!-- REGLES 90 // OPQUAST - Le copier coller est possible dans les champs de formulaire. -->


  <!-- ----------- Formulaire ----------- -->
    <h1>RÉSERVATION<br>D'UNE <span class="special-font">MOTO</span></h1>
    <div class="overlay">
        <img src="Images/forme2.png" class="left-image">
        <div class="circle2"></div>
        <div class="circle"></div>
        <div class="form-container">
        <form id="reservationForm" action="<?php echo 'recap.php?id='.$idMoto; ?>" method="post">

<!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
        <!-- <fieldset>
                    <legend>Informations personnelles</legend>
                </fieldset> -->


<!-- REGLES 69 // OPQUAST - L'étiquette de chaque champ de formulaire indique si la saisie est obligatoire. -->
<!-- REGLES 70 // OPQUAST - L'étiquette de chaque champ de formulaire indique, le cas échéant, quel format de saisie doit être respecté. -->
<!-- REGLES 71 // OPQUAST - L'utilisateur est averti lorsqu'une saisie est sensible à la casse. -->
<!-- REGLES 72 // OPQUAST - L'étiquette de chaque champ de formulaire qui le nécessite indique les limites de nombre de caractères -->
<!-- REGLES 75 // OPQUAST - Chaque étiquette de formulaire est visuellement rattachée au champ qu'elle décrit. -->
<!-- REGLES 76 // OPQUAST - Les informations contextuelles se rapportant à un champ de formulaire lui sont visuellement rattachées -->
<!-- REGLES 77 // OPQUAST - En cas de rejet des données saisies dans un formulaire, les champs contenant les données rejetées sont indiqués à l'utilisateur. -->
<!-- REGLES 78 // OPQUAST - En cas de rejet des données saisies dans un formulaire, les raisons du rejet sont indiquées à l'utilisateur. -->
<!-- REGLES 79 // OPQUAST - En cas de rejet des données saisies dans un formulaire, toutes les données saisies peuvent être modifiées par l'utilisateur. -->
<!-- REGLES 80 // OPQUAST - Les messages d'erreur personnalisés sont exprimés dans la langue du formulaire. -->
<!-- REGLES 89 // OPQUAST - La navigation dans un processus complexe ne provoque pas la perte des données précédemment soumises. -->
<!-- REGLES 93 // OPQUAST - Les champs de saisie de type mail, URL, téléphone, nombre, recherche, mots de passe, heure et date sont dotés du type approprié. -->

            <!-- Informations personnelles -->
            <div class="form-group">
                <input type="text" name="prenom" placeholder="Prénom" maxlength="50" required>
                <input type="text" name="nom" placeholder="Nom" maxlength="50" required>
            </div>
            
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" maxlength="100" required>
            </div>

<!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
<!-- <fieldset>
                    <legend>Date de départ</legend>
                </fieldset> -->

<!-- REGLES 79 // OPQUAST - En cas de rejet des données saisies dans un formulaire, toutes les données saisies peuvent être modifiées par l'utilisateur. -->
<!-- REGLES 89 // OPQUAST - La navigation dans un processus complexe ne provoque pas la perte des données précédemment soumises. -->
<!-- REGLES 93 // OPQUAST - Les champs de saisie de type mail, URL, téléphone, nombre, recherche, mots de passe, heure et date sont dotés du type approprié. -->
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

<!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
<!-- <fieldset>
                    <legend>Date de retour</legend>
                </fieldset> -->


<!-- REGLES 79 // OPQUAST - En cas de rejet des données saisies dans un formulaire, toutes les données saisies peuvent être modifiées par l'utilisateur. -->
<!-- REGLES 89 // OPQUAST - La navigation dans un processus complexe ne provoque pas la perte des données précédemment soumises. -->
<!-- REGLES 93 // OPQUAST - Les champs de saisie de type mail, URL, téléphone, nombre, recherche, mots de passe, heure et date sont dotés du type approprié. -->
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

<!-- REGLES 68 // OPQUAST - Les informations complétant l'étiquette d'un champ sont associées à celui-ci dans le code-source. -->
            <!-- <fieldset>
                    <legend>Options supplémentaires</legend>
                </fieldset> -->


<!-- REGLES 79 // OPQUAST - En cas de rejet des données saisies dans un formulaire, toutes les données saisies peuvent être modifiées par l'utilisateur. -->
<!-- REGLES 89 // OPQUAST - La navigation dans un processus complexe ne provoque pas la perte des données précédemment soumises. -->
<!-- REGLES 91 // OPQUAST - Les éléments d'une liste déroulante qui peuvent être regroupés le sont de manière appropriée. -->
<!-- REGLES 92 // OPQUAST - Les listes d'options de formulaires sont présentées dans un ordre identifiable. -->
<!-- REGLES 93 // OPQUAST - Les champs de saisie de type mail, URL, téléphone, nombre, recherche, mots de passe, heure et date sont dotés du type approprié. -->
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

<!-- REGLES 69 // OPQUAST - L'étiquette de chaque champ de formulaire indique si la saisie est obligatoire. -->
<!-- REGLES 70 // OPQUAST - L'étiquette de chaque champ de formulaire indique, le cas échéant, quel format de saisie doit être respecté. -->
<!-- REGLES 71 // OPQUAST - L'utilisateur est averti lorsqu'une saisie est sensible à la casse. -->
<!-- REGLES 75 // OPQUAST - Chaque étiquette de formulaire est visuellement rattachée au champ qu'elle décrit. -->
<!-- REGLES 76 // OPQUAST - Les informations contextuelles se rapportant à un champ de formulaire lui sont visuellement rattachées -->
<!-- REGLES 77 // OPQUAST - En cas de rejet des données saisies dans un formulaire, les champs contenant les données rejetées sont indiqués à l'utilisateur. -->
<!-- REGLES 78 // OPQUAST - En cas de rejet des données saisies dans un formulaire, les raisons du rejet sont indiquées à l'utilisateur. -->
<!-- REGLES 79 // OPQUAST - En cas de rejet des données saisies dans un formulaire, toutes les données saisies peuvent être modifiées par l'utilisateur. -->
<!-- REGLES 80 // OPQUAST - Les messages d'erreur personnalisés sont exprimés dans la langue du formulaire -->
<!-- REGLES 83 // OPQUAST - La soumission d'un formulaire est suivie d'un message indiquant la réussite ou non de l'action souhaitée. -->
<!-- REGLES 89 // OPQUAST - La navigation dans un processus complexe ne provoque pas la perte des données précédemment soumises. -->
<!-- REGLES 93 // OPQUAST - Les champs de saisie de type mail, URL, téléphone, nombre, recherche, mots de passe, heure et date sont dotés du type approprié. -->

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
