<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prestige</title>
  <link rel="stylesheet" href="style_index.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="avis.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

<link rel="icon" href="Images/favicon.ico">

    <!-- Aos library  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


</head>

<body>
  <header>
    <nav>
      <ul>
      <li><b><a href="index.php">ACCUEIL</a></b></li>
        <li><b><a href="catalogue.php">CATALOGUE</a></b></li>
        <li><b><a href="apropos.php">À PROPOS</a></b></li>
      </ul>
    </nav>
  </header>


  <section class="moto-section">
  <video autoplay muted loop>
  <source src="video/intro.mp4" type="video/mp4">
</video>
  </section>

  <section class="services">
    <h3>SERVICES</h3>

    <section class="services-section">
      <div class="service-container">
        <div class="service">
          <img src="Images/24h.png" alt="Service 1">
          <h2>24h/24 7j/7</h2>
        </div>
        <div class="service">
          <img src="Images/Terre.png" alt="Service 2">
          <h2>International</h2>
        </div>
        <div class="service">
          <img src="Images/certificat.png" alt="Service 3">
          <h2>Certifier</h2>
        </div>
      </div>
    </section>
    <!--<div class="container">
      <img src="Images/moto-sportive-r125-2021.png">
      <img src="Images/moto-sportive-r125-2021.png">
      <img src="Images/moto-sportive-r125-2021.png">
    </div>-->
    
  </section>
  <section class="moto" class="pt-5">
    <h3>NOS MOTOS</h3>
      <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample" data-mdb-carousel-init class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <!-- Controls -->
      <div class="d-flex justify-content-between">  
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                <h5 class="mb-3 text-white">Anna Deynah</h5>
                <p>UX Designer</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                  officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                </p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_2.png" alt="moto"/>
                <h5 class="mb-3">John Doe</h5>
                <p>Web Developer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                  suscipit laboriosam, nisi ut aliquid commodi.
                </p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_3.png" alt="moto"/>
                <h5 class="mb-3 text-white">Maria Kate</h5>
                <p>Photographer</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti.
                </p>
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
                <h5 class="mb-3">John Doe</h5>
                <p class="text-white">UX Designer</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                  officiis hic tenetur quae quaerat ad velit ab hic tenetur.
                </p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_5.png" alt="moto"/>
                <h5 class="mb-3 text-white">Alex Rey</h5>
                <p>Web Developer</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                  suscipit laboriosam, nisi ut aliquid commodi.
                </p>
              </div>

              <div class="col-lg-4 d-none d-lg-block">
                <img class="shadow-1-strong mb-4"
                  src="Images/moto_6.png" alt="moto"/>
                <h5 class="mb-3 text-white">Maria Kate</h5>
                <p>Photographer</p>
                <p class="text-white">
                  <i class="fas fa-quote-left pe-2"></i>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti.
                </p>
              </div>
            </div>
          </div>
        </div>
      <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
  </section>

  <section class="comment">
    <h3>NOS AVIS</h3>
      <!-- Carousel wrapper -->
    <div id="carouselMultiItemExample2" data-mdb-carousel-init class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <!-- Controls -->
      <div class="d-flex justify-content-between">  
        <button class="carousel-control-prev" type="button" data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-mdb-target="#carouselMultiItemExample2" data-mdb-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
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
                <h5 class="mb-3">Anna Deynah</h5>
                <p>UX Designer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                  officiis hic tenetur quae quaerat ad velit ab hic tenetur.
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
                  style="width: 150px;" />
                <h5 class="mb-3">John Doe</h5>
                <p>Web Developer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                  suscipit laboriosam, nisi ut aliquid commodi.
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
                <h5 class="mb-3">Maria Kate</h5>
                <p>Photographer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti.
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
                <h5 class="mb-3">John Doe</h5>
                <p>UX Designer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                  officiis hic tenetur quae quaerat ad velit ab hic tenetur.
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
                <h5 class="mb-3">Alex Rey</h5>
                <p>Web Developer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                  suscipit laboriosam, nisi ut aliquid commodi.
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
                <h5 class="mb-3">Maria Kate</h5>
                <p>Photographer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti.
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
                <img class="rounded-circle shadowb-1-strong mb-4"
                  src="Images/avis_7.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3">Jérémy Tahar</h5>
                <p>Étudiant</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                  officiis hic tenetur quae quaerat ad velit ab hic tenetur.
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
                  src="Images/avis_8.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3">George Shehata</h5>
                <p>Étudiant</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                  suscipit laboriosam, nisi ut aliquid commodi.
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
                  src="Images/avis_9.jpg" alt="avatar"
                  style="width: 150px;" />
                <h5 class="mb-3">Maria Kate</h5>
                <p>Photographer</p>
                <p class="text-muted">
                  <i class="fas fa-quote-left pe-2"></i>
                  At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                  praesentium voluptatum deleniti atque corrupti.
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
      </div>
      <!-- Inner -->
    </div>
    <!-- Carousel wrapper -->
  </section>

  <footer>
        <ul>
            <li class="hover-underline-animation"><b><a href="terme.html"><h4>TERMES</h4></a></b></li>
            <li class="hover-underline-animation"><b><a href="confidentialite.html"><h4>CONFIDENTIALITÉ</h4></a></b></li>
            <li class="hover-underline-animation"><b><a href="contact.html"><h4>CONTACTEZ-NOUS</h4></a></b></li>
        </ul>
        <p>Tout droit réservé à Prestige © 2024</p>
</footer>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js">


	<script src="js/script.js"></script>
</body>

</html>