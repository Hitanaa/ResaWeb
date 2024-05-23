<?php 
  if(isset($_POST['start-date']) AND isset($_POST['end-date'])){?>
  <p style="color: #fff"><?php echo $_POST['start-date']."".$_POST['end-date']; ?></p>
  <?php }?>

  <div class="container">
    <h2 style="color: white;">QUELLE MOTO SOUHAITEZ-VOUS CONDUIRE ?</h2>
  
    <form method="post">
      <div class="filtre">
        <label for="selectOption">Choose an option:</label>
        <select name="tri" id="tri">
            <option value="date_asc">Option 1</option>
            <option value="date_desc">Option 2</option>
        </select>
        <button type="submit">Trier</button>
      </div>
    </form>
    
  

    <?php

        $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=egoncalves_prestige;charset=utf8', 'root', '');

        $sql = "SELECT * FROM moto";
        // Construire la requête SQL en fonction du critère de tri sélectionné
        if(isset($_POST['tri'])){
          $tri = $_POST['tri'];
          if ($tri == "date_asc") {
            echo $sql = "SELECT * FROM moto ORDER BY prix ASC";
          } elseif ($tri == "date_desc") {
            echo $sql = "SELECT * FROM moto ORDER BY prix DESC";
          }
        }
        
        // Declaration et execution de la réquete
        $sqlQuery = "SELECT * FROM moto";
        $recipesStatement = $mysqlClient->query($sql);

        // récupère toutes les lignes dans le tableau
        $recipes = $recipesStatement->fetchAll();

      ?>


    <div class="box-container">
    <?php

    // Compter les lignes pour savoir s'il y en a au moins une
    if($recipesStatement->rowCount() > 0 ){

    // itérer sur le tableau par index et par nom
      foreach ($recipes as $recipe) {
        echo'<div class="card">
          <h3>'.$recipe['titre'].'</h3>
          <img src="Images/moto-sportive-r125-2021.png">
          <p>Incl. 1 000 km</p>
          <p>'.$recipe['prix'].'€ /jour</p>
        </div>';
      }
    }else{
      echo "0 résultats";
    }
        ?>
    </div>
  </div>  
    <!--<script>
          document.addEventListener("DOMContentLoaded", function() {
          const selectElement = document.getElementById('selectOption');
          const resultDiv = document.getElementById('result');

          // Ajouter un écouteur d'événements pour détecter les changements de sélection
          selectElement.addEventListener('change', function() {
              // Récupérer la valeur sélectionnée
              const selectedOption = selectElement.value;

              // Envoyer la valeur sélectionnée à PHP pour exécuter la requête SQL
              fetch('query.php', {
                  method: 'POST',
                  headers: {
                      'Content-Type': 'application/json',
                  },
                  body: JSON.stringify({ selectedOption: selectedOption }),
              })
              .then(response => response.json())
              .then(data => {
                  // Mettre à jour le contenu de la page avec les données renvoyées par PHP
                  resultDiv.textContent = data.message;
              })
              .catch(error => {
                  console.error('Error:', error);
              });
          });
      });
    </script>-->