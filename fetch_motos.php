<?php

include('connexionBDD.php');

$conn = Database::getBDD();

$sql = "SELECT * FROM moto WHERE 1";

if (isset($_POST['search']) && !empty($_POST['search'])) {
    $search = $_POST['search'];
    $sql .= " AND titre LIKE :search";
}

if (isset($_POST['tri'])) {
    $tri = $_POST['tri'];
    if ($tri == "date_asc") {
        $sql .= " ORDER BY prix ASC";
    } elseif ($tri == "date_desc") {
        $sql .= " ORDER BY prix DESC";
    }
} else {
    // Si aucune option de tri n'est sélectionnée, tri par défaut
    $sql .= " ORDER BY prix ASC";
}

$stmt = $conn->prepare($sql);

if (isset($search)) {
    $stmt->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
}

$stmt->execute();
$recipes = $stmt->fetchAll();

// REGLES 131 // OPQUAST - Chaque lien est doté d'un intitulé dans le code source.
// REGLES 132 // OPQUAST - Le libellé de chaque lien décrit sa fonction ou la nature du contenu vers lequel il pointe.
// REGLES 133 // OPQUAST - Les liens de même nature ont des couleurs, des formes et des comportements identiques sur toutes les pages.
// REGLES 134 // OPQUAST - Le soulignement est réservé aux liens.
// REGLES 134 // OPQUAST - Les liens sont visuellement différenciés du reste du contenu.

if ($stmt->rowCount() > 0) {
    foreach ($recipes as $recipe) {
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
                            <h5 class="card-title mb-3">' . htmlspecialchars($recipe['titre']) . '</h5>
                        </a>
                        <a href="details.php?id='.$recipe['id'].'" class="text-reset">
                            <p>Category</p>
                        </a>
                        <h6 class="mb-3">$' . htmlspecialchars($recipe['prix']) . '</h6>
                    </div>
                </div>
            </div>';
    }
} else {
    echo "<p>Aucune moto trouvée.</p>";
}
?>
