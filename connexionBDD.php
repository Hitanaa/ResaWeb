<?php
  // La classe BDD sert pour la connexion à la BDD

  class Database {

    public static function getBDD () {
      $conn = new PDO('mysql:host=localhost;dbname=egoncalves_prestige;charset=utf8;', 'root', '');
      return $conn;
    }
}
?>
