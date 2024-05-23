<?php
  // La classe BDD sert pour la connexion à la BDD
  class BDD
  {
    // Attributs
    public static $conn = null;

    // Méthode static qui gère la conexion à la base de données
    // Retourne un objet de type PDO qui concerne la connexion à la BDD
    public static function getBDD()
    {
      // On teste si l'attribut $pdo est pas initialisé sinon on l'initialise
      if (self::$conn == null)
      {
        // Identifiant
        $id = 'root';
        // Mot de passe
        $mdp = '';
        // Nom de la BDD
        $bdd = 'egoncalves_prestige';
        // Adresse du serveur
        $host = 'localhost';

        self::$conn = new PDO("mysql:host=$host;dbname=$bdd;charset=utf8",$id,$mdp,
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      } // Fin if
      return self::$conn;
    } // Fin méthode
  }

?>
