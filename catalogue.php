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
  <title>Catalogue - Prestige</title>

  <!-- Relier le CSS au HTML  -->
  <link rel="stylesheet" href="style_catalogue.css">
  <link rel="stylesheet" href="style.css">

  <!-- Library  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

  <!-- Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nokora:wght@100;300;400;700;900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="Images/favicon.ico">

</head>

<body>
  <meta name="description" content="Catalogue" />

  <!-- Bouton pour revenir en haut -->
  <a class="btn-top" href="#top">
    <svg src="img/direction.svg" width="24" height="20">
      <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"></path>
    </svg>
  </a>

<!-- REGLES 150 // OPQUAST - Il est possible de revenir à la page d'accueil depuis toutes les pages. -->
<!-- REGLES 152 // OPQUAST - Les items actifs de menu sont signalés. -->
<!-- REGLES 154 // OPQUAST - Les icônes de navigation sont accompagnées d'une légende explicite. -->
  <!-- Nav Bar -->
  <header>
    <nav>
      <a href="index.php" class="logo_nav"><img src="Images/logo_nav.png" alt=""></a>
      <ul>
        <li><b><a href="index.php" class="hover-underline-animation">Accueil</a></b></li>
        <li><b><a href="catalogue.php" class="hover-underline-animation">Catalogue</a></b></li>
        <li><b><a href="apropos.php" class="hover-underline-animation">À Propos</a></b></li>
      </ul>
    </nav>
  </header>

  <!-- Le Catalogue -->
  <div class="text-center container py-5">
    <h1 class="title">COLLECTION <span class="special-font">PRESTIGE </span></h1>

    <div class="logo-container" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="900">
      <img class="logo" src="Images/LOGO.png" alt="logo prestige">
    </div>

    <h2 class="sentence">UNE <span class="special-font">MOTO</span> INCROYABLE POUR UNE <span class="special-font">ODYSSÉE</span> INOUBLIABLE</h2>

    <!-- Filtre/Tri -->
    <div class="tri">
      <input type="text" id="search" placeholder="Rechercher par nom...">
      <select name="tri" id="tri">
        <option value="default" selected>Aucun</option>
        <option value="date_asc">Prix croissant</option>
        <option value="date_desc">Prix décroissant</option>
      </select>
      
    </div>

    <div class="row" id="moto-container">
      <!-- Les résultats des motos seront affichés ici -->
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

</body>

<!-- Librairy AOS -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>

<script src="script_tri.js" ></script>

</html>