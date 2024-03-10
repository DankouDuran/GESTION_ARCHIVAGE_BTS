<?php
        session_start();
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<body>

      <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-2" style="margin-left: -30px;">

                <?php
                    
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "bts2024";

// Établir une connexion à la base de données

$connection = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

                ?>



    
<div class="form">
        <a href="index.php" class="back_btn"></a>
        <h2>ajouter un patient</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" required>
            
            <label for="">prenom</label>
            <input type="text" name="prenom" required>
            
            <label for="">age</label>
            <input type="number" name="age" required>
            
            <label for="">sexe</label>
            <select name="sexe" id="sexe">
                <option value="">masculin</option>
                <option value="">feminin</option>
            </select>
            
            <label for="">numtel</label>
            <input type="number" name="numtel" required>
            <input type="submit" value="ajouter" name="button">
            <a href="index.php"></a>
        </form>
        </div>
               
          
                            


                            </div>
                            <div class="col-md-6">
                            <div class="container">
        <a href="#"class="btn_add"><img src="piece3" alt="piece3"></a>
        <table>
            <tr id="items">
                <th>id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>age</th>
                <th>sexe</th>
                <th>numtel</th>
                <th>modifier</th>
                <th>supprimer</th>

            </tr>
            
        </table>
        </div>
                </div>
            </div>
        </div>
      </div>

</body>
</html>