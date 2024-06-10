<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de réservation</title>

  <!-- Relier le CSS au HTML  -->
  <link rel="stylesheet" href="style.css">

     <!-- Fonts  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=Nokora:wght@100;300;400;700;900&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet">

  <!-- Favicon  -->
  <link rel="icon" href="Images/favicon.ico">
</head>
<body>

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

    <meta name="confirmation" content="confirmation" />

    <div class="confirmation-commande">
        <h1>MERCI POUR VOTRE <span class="special-font">RÉSERVATION</span></h1>
        <p>UN EMAIL VOUS A ÉTÉ <span class="special-font">ENVOYÉ</span>. PENSEZ À VÉRIFIER VOS <span class="special-font">SPAMS</span>.</p>
        <div class="logo-container">
      <img class="logo" src="Images/LOGO.png" alt="logo prestige">
    </div>
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
</body>

<!-- Importer la bibliothèque Font Awesome pour les icônes -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.querySelector(".menu-icon");
    const navLinks = document.querySelector(".nav-links");

    menuIcon.addEventListener("click", function() {
        navLinks.classList.toggle("show");
    });
});
</script>

</html>
