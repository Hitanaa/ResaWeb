<!-- MAILS -->

<?php

require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$moto2 = null;

$firstname = $_POST['prenom'];
$lastname = $_POST['nom'];
$email = $_POST['email'];
$dateDebut = new DateTime($_POST['anneeDebut'] . '-' . $_POST['moisDebut'] . '-' . $_POST['jourDebut']);
$dateFin = new DateTime($_POST['anneeRetour'] . '-' . $_POST['moisRetour'] . '-' . $_POST['jourRetour']);
$interval = $dateDebut->diff($dateFin);
$nameMoto2 = $_POST['nameMoto2'];
$totalDays = $interval->days + 1;

// Connexion à la base de données
include('connexionBDD.php');

$conn = Database::getBDD();

// Récupérer l'ID de la moto à partir des paramètres de la requête
$idMoto = $_POST['idMoto'];

// PREMIERE MOTO
// Requête pour récupérer les informations de la moto
$sqlMoto = "SELECT * FROM moto WHERE id = :idMoto";
$motosStatement = $conn->prepare($sqlMoto);
$motosStatement->bindParam(':idMoto', $idMoto, PDO::PARAM_INT);
$motosStatement->execute();
$moto = $motosStatement->fetch();



// Calculer le prix total pour la première moto
$prixTotal = $moto['prix'] * $totalDays; 

// DEUXIEME MOTO
if (!empty($nameMoto2) && $nameMoto2 != 'all') {
    $sqlMoto2 = "SELECT * FROM moto WHERE titre = :nameMoto";
    $motosStatement2 = $conn->prepare($sqlMoto2);
    $motosStatement2->bindParam(':nameMoto', $nameMoto2, PDO::PARAM_STR);
    $motosStatement2->execute();
    $moto2 = $motosStatement2->fetch();

  // Ajouter le prix total pour la deuxième moto
  $prixTotal += $moto2['prix'] * $totalDays; 
}

// Envoyer l'email de confirmation et insérer les données dans la base de données
sendConfirmationEmail($firstname, $lastname, $email, $dateDebut, $dateFin, $moto, $moto2, $totalDays, $prixTotal, $conn);

/* Fonction pour envoyer l'email de confirmation de la réservation */
function sendConfirmationEmail($firstname, $lastname, $email, $dateDebut, $dateFin, $moto, $moto2, $totalDays, $prixTotal, $conn)
{
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'evegoncalves.pro@gmail.com';
        $mail->Password = 'qfsv ebrg fonw gyqs';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->CharSet = 'UTF-8';

        // Destinataires
        $mail->setFrom('evegoncalves.pro@gmail.com', 'Prestige');
        $mail->addAddress($email, $firstname . ' ' . $lastname);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Confirmation de votre réservation';
        $mail->Body = generateConfirmationEmailBody($firstname, $lastname, $email, $dateDebut, $dateFin, $moto, $moto2, $totalDays, $prixTotal);

        $mail->send();

        // Après envoi de l'email, insérer les données dans la base de données
        insertReservationIntoDatabase($firstname, $lastname, $email, $dateDebut, $dateFin, $moto, $moto2, $totalDays, $prixTotal, $conn);

        // Redirection vers confirmation.php avec message de confirmation
        $url = "confirmation.php?";
        $url .= "prenom=" . urlencode($firstname);
        $url .= "&nom=" . urlencode($lastname);
        $url .= "&email=" . urlencode($email);
        $url .= "&dateDebut=" . urlencode($dateDebut->format('d-m-Y'));
        $url .= "&dateFin=" . urlencode($dateFin->format('d-m-Y'));
        $url .= "&moto=" . urlencode($moto['titre']);
        $url .= "&moto2=" . ($moto2 ? urlencode($moto2['titre']) : '');
        $url .= "&totalDays=" . urlencode($totalDays);
        $url .= "prixTotal=" . urlencode($prixTotal);

        header('Location: ' . $url);
        exit;

    } catch (Exception $e) {
        echo json_encode(array('status' => 'error', 'message' => "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
    }
}


// Insertion dans la base de donnée
function insertReservationIntoDatabase($firstname, $lastname, $email, $dateDebut, $dateFin, $moto, $moto2, $totalDays, $prixTotal, $conn)
{
    try {
        $sql = "INSERT INTO reservations (prenom, nom, email, date_debut, date_fin, moto_id, moto2_id, jours_total, prix_total)
                VALUES (:prenom, :nom, :email, :dateDebut, :dateFin, :motoId, :moto2Id, :joursTotal, :prixTotal)";

        $stmt = $conn->prepare($sql);


        $stmt->bindParam(':prenom', $firstname, PDO::PARAM_STR);
        $stmt->bindParam(':nom', $lastname, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':dateDebut', $dateDebut->format('Y-m-d'), PDO::PARAM_STR);
        $stmt->bindValue(':dateFin', $dateFin->format('Y-m-d'), PDO::PARAM_STR);
        $stmt->bindParam(':motoId', $moto['id'], PDO::PARAM_INT);
        if (!empty($moto2)) {
            $stmt->bindParam(':moto2Id', $moto2['id'], PDO::PARAM_INT);
        }else {
            $stmt->bindValue(':moto2Id', null, PDO::PARAM_NULL);
        }
        
        $stmt->bindParam(':joursTotal', $totalDays, PDO::PARAM_INT);
        $stmt->bindParam(':prixTotal', $prixTotal, PDO::PARAM_STR);


        $stmt->execute();

        $rowCount = $stmt->rowCount();
        if ($rowCount > 0) {
            echo json_encode(array('status' => 'success', 'message' => 'Data inserted into database successfully'));
        } else {
            echo json_encode(array('status' => 'error', 'message' => 'Failed to insert data into database'));
        }
    } catch (Exception $e) {
        echo json_encode(array('status' => 'error', 'message' => "Failed to insert data into database. Error: {$e->getMessage()}"));
    }
}


/* Fonction pour générer le corps de l'email de confirmation */
function generateConfirmationEmailBody($firstname, $lastname, $email, $dateDebut, $dateFin, $moto, $moto2, $totalDays, $prixTotal)
{
    ob_start();
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Confirmation de réservation</title>
    </head>

    <body style="font-family: Arial, sans-serif; background-color: #f2f2f2; color: #333; padding: 20px;">
        <div style="max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);">
            <h2 style="text-align: center; color: #333;">Confirmation de votre réservation</h2>
            <p>Bonjour <?php echo htmlspecialchars($firstname . ' ' . $lastname); ?>,</p>
            <p>Nous vous confirmons la réservation suivante :</p>
            <hr style="border-top: 1px solid #ddd;">
            <h3 style="color: #333;">Détails de la réservation :</h3>
            <p><b>Nom de la moto :</b> <?php echo htmlspecialchars($moto['titre']); ?></p>
            <p><b>Date de début :</b> <?php echo $dateDebut->format('d/m/Y'); ?></p>
            <p><b>Date de retour :</b> <?php echo $dateFin->format('d/m/Y'); ?></p>
            <p><b>Prix par jour :</b> <?php echo htmlspecialchars($moto['prix']); ?>€</p>
            <p><b>Nombre de jours :</b> <?php echo htmlspecialchars($totalDays); ?></p>
            <p><b>Total :</b> <?php echo htmlspecialchars($moto['prix'] * $totalDays); ?>€</p>
            <?php if (!empty($moto2)) : ?>
                <hr style="border-top: 1px solid #ddd;">
                <h3 style="color: #333;">Deuxième moto :</h3>
                <p><b>Nom de la moto :</b> <?php echo htmlspecialchars($moto2['titre']); ?></p>
                <p><b>Date de début :</b> <?php echo $dateDebut->format('d/m/Y'); ?></p>
                <p><b>Date de retour :</b> <?php echo $dateFin->format('d/m/Y'); ?></p>
                <p><b>Prix par jour :</b> <?php echo htmlspecialchars($moto2['prix']); ?>€</p>
                <p><b>Nombre de jours :</b> <?php echo htmlspecialchars($totalDays); ?></p>
                <p><b>Total :</b> <?php echo htmlspecialchars($moto2['prix'] * $totalDays); ?>€</p>
            <?php endif; ?>
            <hr style="border-top: 1px solid #ddd;">

            <p><b>Total :</b> <?php echo htmlspecialchars($prixTotal); ?>€</p>

            <p style="text-align: center; color: #888;">Merci de votre réservation chez Prestige Moto.</p>
        </div>
    </body>

    </html>
<?php
    return ob_get_clean(); // Retourne le contenu du tampon de sortie
}
?>
