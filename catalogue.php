<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catalogue - Prestige</title>
  <link rel="stylesheet" href="style_catalogue.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css" rel="stylesheet" />

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Sedgwick+Ave+Display&display=swap" rel="stylesheet">

<link rel="icon" href="Images/favicon.ico">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"></script>
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
  <section style="background-color: #eee;">
  <div class="text-center container py-5">
    <h4 class="mt-4 mb-5"><strong>Bestsellers</strong></h4>

    <div class="row">
    <img src="" class="w-100" />
      <?php
      // Connexion à la base de données MySQL
      $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=egoncalves_prestige;charset=utf8', 'root', '');


      // Requête SQL pour récupérer les motos bestsellers
      $sql = "SELECT * FROM moto ORDER BY prix DESC";
      $motosStatement = $mysqlClient->query($sql);
      
      // Vérifie si au moins une moto bestseller est trouvée
      if ($motosStatement->rowCount() > 0) {
        // Parcours des résultats et affichage des motos bestsellers
        while ($moto = $motosStatement->fetch()) {
          echo '<div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                      <img src="../resaweb/'.$moto['img'].'" class="w-100" />
                      <a href="../details.html?id='.$moto['id'].'">
                        <div class="mask">
                          <div class="d-flex justify-content-start align-items-end h-100">
                            <h5><span class="badge bg-primary ms-2">New</span></h5>
                          </div>
                        </div>
                        <div class="hover-overlay">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                      </a>
                    </div>
                    <div class="card-body">
                      <a href="" class="text-reset">
                        <h5 class="card-title mb-3">' . $moto['titre'] . '</h5>
                      </a>
                      <a href="../details.html?id='.$moto['id'].'" class="text-reset">
                        <p>Category</p>
                      </a>
                      <h6 class="mb-3">$' . $moto['prix'] . '</h6>
                    </div>
                  </div>
                </div>';
        }
      } else {
        echo "<p>Aucune motos trouvé.</p>";
      }
      ?>
    </div>
  </div>
</section>
<footer>
        <ul>
            <li class="hover-underline-animation"><b><a href="terme.html"><h4>TERMES</h4></a></b></li>
            <li class="hover-underline-animation"><b><a href="confidentialite.html"><h4>CONFIDENTIALITÉ</h4></a></b></li>
            <li class="hover-underline-animation"><b><a href="contact.html"><h4>CONTACTEZ-NOUS</h4></a></b></li>
        </ul>
        <p>Tout droit réservé à Prestige © 2024</p>
</footer>
    </body>


</html>

