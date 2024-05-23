<?php
// Récupérer la valeur envoyée depuis JavaScript
$data = json_decode(file_get_contents('php://input'), true);
$selectedOption = $data['selectedOption'];

// Vérifier si l'option sélectionnée est valide
switch ($selectedOption) {
    case 'option1':
        $result = 'Résultat pour l\'option 1 depuis la base de données.';
        break;
    case 'option2':
        $result = 'Résultat pour l\'option 2 depuis la base de données.';
        break;
    case 'option3':
        $result = 'Résultat pour l\'option 3 depuis la base de données.';
        break;
    default:
        $result = 'Option invalide.';
}

// Renvoyer le résultat à JavaScript
echo json_encode(['message' => $result]);
?>
