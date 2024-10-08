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
  <title>À propos - Prestige</title>

<!-- Relier le CSS au HTML  -->

<link rel="stylesheet" href="style_apropos.css">
<link rel="stylesheet" href="style.css">

<!-- Fonts  -->
<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Nokora:wght@100;300;400;700;900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
    rel="stylesheet">

<!-- Favicon  -->
<link rel="icon" href="Images/favicon.ico">

<!-- Librairy AOS  -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


</head>
<body>

<meta name="description" content="À propos" />

<!-- ----------- Bouton pour revenir en haut  ----------- -->
<a class="btn-top" href="#top">
        <svg src="img/direction.svg" width="24" height="20">
            <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"></path>
        </svg>
    </a>

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

<!-- ----------- Première case ----------- -->
  <div class="timeline">
    <div class="checkpoint">
      <div data-aos="fade-left">
        <h2>ORIGINE DE <span class="special-font">PRESTIGE</span> <span class="date">(2021)</span></h2>
        <p>Eve Gonçalves, étudiante en première année de BUT MMI à Gustave Eiffel, imagine le concept de Prestige, un site de réservation en ligne de motos de luxe.</p>
        <p>Animée par sa passion pour les deux-roues et son ambition d'offrir une expérience exclusive, Eve commence à donner vie à son idée.</p>
      </div>
    </div>

<!-- ----------- Deuxième case ----------- -->
    <div class="checkpoint">
      <div data-aos="fade-right">
        <h2>CONCEPTION DU <span class="special-font">PROJET</span> <span class="date">(2022)</span></h2>
        <p>Eve développe le concept de Prestige, mettant l'accent sur le luxe et la facilité d'utilisation en ligne.</p>
        <p>Avec détermination, elle entreprend des recherches approfondies pour sélectionner les motos les plus prestigieuses et les destinations les plus attrayantes pour les amateurs de conduite.</p>
      </div>
    </div>

<!-- ----------- Troisième case ----------- -->
    <div class="checkpoint">
      <div data-aos="fade-left">
        <h2>DÉVELOPPEMENT DU <span class="special-font">SITE WEB</span> <span class="date">(2024)</span></h2>
        <p>Eve se lance dans la création du site web Prestige, mettant en œuvre ses compétences en développement pour concevoir une interface élégante et conviviale.</p>

        <p>Déterminée, elle travaille sur chaque aspect du site, de la conception à la programmation, pour garantir une expérience utilisateur optimale.</p>
      </div>
    </div>

<!-- ----------- Quatrième case ----------- -->
    <div class="checkpoint">
      <div data-aos="fade-right">
        <h2>LANCEMENT OFFICIEL DE <span class="special-font">PRESTIGE</span> <span class="date">(2024)</span></h2>
        <p>Prestige est officiellement lancé, permettant aux clients de réserver des motos de luxe en ligne pour la première fois.</p>
        <p>Une campagne de lancement réussie attire l'attention des passionnés de moto du monde entier, mettant en lumière le travail acharné d'Eve et de son équipe.</p>
      </div>
    </div>

<!-- ----------- Cinquième case ----------- -->
    <div class="checkpoint">
      <div data-aos="fade-left">
        <h2>RÉPUTATION <span class="special-font">GRANDISSANTE</span> <span class="date">(2024)</span></h2>
        <p>Grâce à l'engagement et au dévouement d'Eve, Prestige devient une référence en matière de réservation de motos de luxe en ligne, avec une réputation grandissante pour son service exceptionnel.</p>

        <p>Les critiques élogieuses confirment le statut de Prestige comme leader du marché, reflétant le travail acharné d'Eve et de son équipe.</p>
      </div>
    </div>

<!-- ----------- Sixième case ----------- -->
    <div class="checkpoint">
      <div data-aos="fade-right">
        <h2>VISION DU <span class="special-font">FUTURE</span> <span class="date">(2026 et au-delà)</span></h2>
        <p>Eve continue d'innover et d'étendre l'empreinte de Prestige à l'échelle mondiale, tout en maintenant l'engagement initial envers le luxe et l'exclusivité.</p>
      </div>
    </div>
  </div>


  <div class="floating-container">
        <img src="Images/Eve.jpg" alt="Photo d'Eve" class="floating-image">
  </div>

  <div class="sources">
    <h3>Sources libre de droit</h4>
  <h4>Images: <b>Pinterest</b>, <b>Unsplash</b></h4>
  <h4>Librairy : <b>Aos</b>, <b>GitHub</b></h4>
  <h4>Font : <b>Google Font</b></h4>
  <h4>Texte : <b>ChatGPT</b></h4>
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

</body>

<!-- Librairy AOS  -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
        document.querySelector('.menu-icon').addEventListener('click', () => {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('active');
      });
      </script>

</html>