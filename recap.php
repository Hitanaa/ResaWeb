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

    <!-- Nav Bar -->
    <header>
        <nav>
            <ul>
                <li><b><a href="index.php">ACCUEIL</a></b></li>
                <li><b><a href="catalogue.php">CATALOGUE</a></b></li>
                <li><b><a href="apropos.php">À PROPOS</a></b></li>
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
                <p><b>Nom :</b> Gonçalves</p>
                <p><b>Prénom :</b> Eve</p>
            </div>
            <p><b>Email :</b> evegoncalves.pro@gmail.com</p>
        </div>

        <h3>DÉTAILS DE <span class="special-font">RÉSERVATION</span></h3>
        <div class="info-container">
    <div class="text-info">
            <p><b>DATE DE DÉBUT</b> jj/mm/aaaa</p>
            <p><b>DATE DE RETOUR</b> jj/mm/aaaa</p>
            <p><b>Prix :</b> 6000€</p>
    </div>
        <img src="Images/moto_1.png" alt="Image moto" class="info-image">
</div>

<hr style="border: none; border-top: 1px solid #fff;">

<div class="info-container">
    <div class="text-info">
            <p><b>DATE DE DÉBUT</b> jj/mm/aaaa</p>
            <p><b>DATE DE RETOUR</b> jj/mm/aaaa</p>
            <p><b>Prix :</b> 6000€</p>
    </div>
        <img src="Images/moto_1.png" alt="Image moto" class="info-image">
</div>


            <button class="btn-confirm">CONFIRMER</button>
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
