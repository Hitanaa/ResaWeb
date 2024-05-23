<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestige</title>

  <!-- Library AOS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- Relier le CSS au HTML  -->
<link rel="stylesheet" href="style_index.css">
<link rel="stylesheet" href="style.css">

<!-- Library  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="avis.css">

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

<!-- --- Bouton pour revenir à la page d'accueil du site --- -->
<a class="btn-top" href="#top">
        <svg src="img/direction.svg" width="24" height="20">
            <path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"></path>
        </svg>
    </a>

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

<!-- ----------- Vidéo d'Accueil ----------- -->
<section class="moto-section" >
  <video autoplay muted loop>
    <source src="video/intro.mp4" type="video/mp4">
  </video>
  <div class="overlay">
    <h1>PRESTIGE</h1>
    <h1 class="upside">PRESTIGE</h1>
  </div>
</section>

<div class="ligne-blanche"></div>

<div class="description">
  <h2 data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="500">HORIZONS INEXPLORÉS</h2>
<p data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="600">Découvrez notre <b>collection</b> soigneusement sélectionnée de motos de <span class="special-font"> PRESTIGE</span>, des <b>joyaux mécaniques</b> qui <b>transcendent l'ordinaire</b>.
Nous vous offrons un <b>accès privilégié</b> à des machines d'exception, prêtes à répondre à <b>vos désirs</b> de conduite les plus <b>exigeants</b>. </p> <br>
<p data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="700">Laissez-nous vous guider vers des <b>horizons inexplorés</b> avec un <b>frisson exceptionnel</b>.</p> <br>
<p data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="800">Votre <b>aventure commence ici</b>.</p> <br> 

      <div class="logo-container" data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="900">
  <img class="logo" src="Images/LOGO.png" alt="logo prestige">
</div>
</div>


  </section>

  <!-- ----------- Section "NOS MOTOS" ----------- -->
  <section class="moto">
    <h3 data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="500">NOS <span class="special-font">MOTOS</span></h3>
      <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample" data-mdb-carousel-init class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <!-- Controls -->
      <div class="d-flex justify-content-between">
        <button class="carousel-control-prev " type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style=" filter: invert(2%) grayscale(100%);"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style=" filter: invert(2%) grayscale(100%);"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Inner -->
      <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_1.png" alt="moto"/>
                <h5 class="mb-3 text-white">Diamant</h5>
                <p class="text-white">5000€ - jour</p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_2.png" alt="moto"/>
                <h5 class="mb-3 text-white">Saphir</h5>
                <p class="text-white">3000€ - jour</p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_3.png" alt="moto"/>
                <h5 class="mb-3 text-white">Améthyste</h5>
                <p class="text-white">3000€ - jour</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_4.png" alt="moto"/>
                <h5 class="mb-3 text-white">Opale</h5>
                <p class="text-white">3500€ - jour</p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_5.png" alt="moto"/>
                <h5 class="mb-3 text-white">Onyx</h5>
                <p class="text-white">3500€ - jour</p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_6.png" alt="moto"/>
                <h5 class="mb-3 text-white">Quartz</h5>
                <p class="text-white">2500€ - jour</p>
                </p>
              </div>
            </div>
          </div>
        </div>
      <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
  </section>

  <!-- ----------- Sections "NOS AVIS" ----------- -->
  <section class="comment">
    <h3 data-aos="fade-down"
      data-aos-easing="linear"
      data-aos-duration="500">NOS <span class="special-font">AVIS</span></h3>
      <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample2" data-mdb-carousel-init class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <!-- Controls -->
      <div class="d-flex justify-content-between">
        <button class="carousel-control-prev " type="button" data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true" style=" filter: invert(2%) grayscale(100%);"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style=" filter: invert(2%) grayscale(100%);"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Inner -->
      <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle shadow-1-strong mb-4"
                  src="Images/avis_1.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3 text-white">Jérémy Tahar</h5>
                <p class="text-white">Étudiant</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  L'équipe de Prestige a rendu mon expérience vraiment exceptionnelle ! Leur attention aux détails m'ont impressionné. Ils ont su répondre à toutes mes questions tout au long du processus.
                </p>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                </ul>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="rounded-circle shadow-1-strong mb-4"
                  src="Images/avis_2.jpg" alt="avatar"
                  style="width: 150px;"/>
                <h5 class="mb-3 text-white">George Shehata</h5>
                <p class="text-white">Étudiant</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Mon expérience avec Prestige a été au-delà de mes attentes. Leur passion pour les motos transparaît dans tout ce qu'ils font. Je recommande à tous les amateurs de deux roues !
                </p>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li>
                    <i class="fas fa-star-half-alt fa-sm"></i>
                  </li>
                </ul>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="rounded-circle shadow-1-strong mb-4"
                  src="Images/avis_3.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3 text-white">Lucas Haudiquet</h5>
                <p class="text-white">Étudiant</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Chaque détail, de la puissance du moteur à la maniabilité, était simplement remarquable. J'ai vécu des moments inoubliables. Un grand merci pour cette expérience exceptionnelle !
                </p>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="far fa-star fa-sm"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <img class="rounded-circle shadow-1-strong mb-4"
                  src="Images/avis_4.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3 text-white">Alyssa Karahan</h5>
                <p class="text-white">Étudiante</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Prestige a su transformer ma simple location de moto en une véritable aventure. Leur flotte de motos de luxe et leur service clientèle impeccable est une sacré expérience.
                </p>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                </ul>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="rounded-circle shadow-1-strong mb-4"
                  src="Images/avis_5.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3 text-white">Andréa Caneval</h5>
                <p class="text-white">Étudiante</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Grâce à leur équipe dévouée et à leur expertise inégalée, j'ai eu le privilège de vivre une expérience de conduite véritablement exceptionnelle.
                </p>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li>
                    <i class="fas fa-star-half-alt fa-sm"></i>
                  </li>
                </ul>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="rounded-circle shadow-1-strong mb-4"
                  src="Images/avis_6.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3 text-white">Sacha Doukhan</h5>
                <p class="text-white">Étudiant</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Chaque kilomètre parcouru avec Prestige a été un véritable plaisir, de la première prise en main à la dernière accélération. Une expérience de conduite incomparable, merci pour ces moments inoubliables !
                </p>
                <ul class="list-unstyled d-flex justify-content-center text-warning mb-0">
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="fas fa-star fa-sm"></i></li>
                  <li><i class="far fa-star fa-sm"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div> 
    
</section>


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
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js">
 
	<script src="js/script.js"></script>
</body>
 <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
  AOS.init();
</script>

</html>