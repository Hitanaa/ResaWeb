<?php

// Inclut le fichier de connexion à la base de données
include('connexionBDD.php');

// Obtient la connexion à la base de données
$conn = Database::getBDD();

// Requête SQL de base pour sélectionner toutes les motos
$sql = "SELECT * FROM moto";

// Vérifie si une option de tri est sélectionnée via le formulaire POST
if (isset($_POST['tri'])) {
    $tri = $_POST['tri'];
    if ($tri == "date_asc") {
        $sql .= " ORDER BY prix ASC"; // Tri par prix croissant
    } elseif ($tri == "date_desc") {
        $sql .= " ORDER BY prix DESC"; // Tri par prix décroissant
    }
} else {
    // Si aucune option de tri n'est sélectionnée, tri par défaut
    $sql .= " ORDER BY prix ASC";
}

$recipesStatement = $conn->query($sql);  
$recipes = $recipesStatement->fetchAll(); 

if ($recipesStatement->rowCount() > 0) {
    foreach ($recipes as $recipe) {
      // Génère le code HTML pour afficher chaque moto
          echo '<div class="col-lg-4 col-md-6 mb-4">
                  <div class="card">
                    <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">
                      <img src="../'.$recipe['img'].'" class="w-80" />
                      <a href="details.php?id='.$recipe['id'].'">
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
                      <a href="details.php?id='.$recipe['id'].'" class="text-reset">
                        <h5 class="card-title mb-3">' . $recipe['titre'] . '</h5>
                      </a>
                      <a href="details.php?id='.$recipe['id'].'" class="text-reset">
                        <p>Category</p>
                      </a>
                      <h6 class="mb-3">$' . $recipe['prix'] . '</h6>
                    </div>
                  </div>
                </div>';
        }
      } else {
        echo "<p>Aucune motos trouvé.</p>";
      }
      ?>