| Lien hébergé sur o2switch : https://resaweb.egoncalves.butmmi.o2switch.site/

| Lien opquast : https://docs.google.com/spreadsheets/d/1OcUe2xmjPFw5pqo0z4nzMGJuG7vtfgfspZ-P9yc4Lds/edit?usp=sharing
(Disponible aussi en pdf dans le dossier resaweb)


\\ INSTALLATION SUR UN SERVEUR LOCAL //

1.  Installer WAMPP, il existe d'autre serveurs locaux tels que MAMPP ou XAMPP. Pour ma part, ce sera WAMPP.

2.  Ouvrir WAMPP. Aller dans l'explorateur de fichier puis "Ce PC" et cliquez sur le fichier wamp64. Après avoir cliquez sur wamp64, cliquez sur "www" et déposez y votre fichier resaweb.zip. Ensuite il faut extraire le dossier pour accéder au site en local.

    (Ce PC > Acer (C:) > wamp64 > www)

3.  Dans n'importe quel navigateur, saississez l'URL "http://localhost/", puis à la suite du dernier slash, écrivez "resaweb/". Cet url "http://localhost/resaweb/ vous permet d'acceder au site web.

4.  Après avoir vérifier que le site est bien visible depuis cet url, tapez désormais "http://localhost/phpmyadmin/" pour accéder à phpmyadmin. Créez votre base de donnée.

5.  Sur VSCode, faites un fichier nommé "connexion.php" ou "connexionBDD.php", modifier l'accès à la base de données pour que le site soit lié à la base de donné en serveur local. Par exemple, dans mon cas :


                        <?php
                            // La classe BDD sert pour la connexion à la BDD
                            class Database {
                                public static function getBDD () {
                                $conn = new PDO('mysql:host=localhost;dbname=egoncalves_prestige;charset=utf8;', 'root', '');
                                return $conn;
                            }
                        }
                    ?>


6.  Retourner dans le localhost sur un navigateur et ouvrir le dossier contenant le site web. Si tout fonctionne, le site web s'affiche.
    En local, le site web est accessible depuis l'URL : "http://localhost/resaweb/index.php"
