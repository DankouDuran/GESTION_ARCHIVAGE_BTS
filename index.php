<?php
session_start();
?>
    
<?php
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "bts2024";

// Établir une connexion à la base de données

$connection = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

if (isset ($_POST['button'])){
  $nom_patient=$_POST['nom'];
  $prenom_patient=$_POST['prenom'];
  $age=$_POST['age'];
  $sexe=$_POST['sexe'];
  $numtel=$_POST['numtel'];
  $Id_adresse=$_POST['adresse'];

  $sql=" INSERT INTO patient(nom_patient, prenom_patient, age, sexe, numtel, Id_adresse)
  VALUES ('$nom_patient', '$prenom_patient', '$age', '$sexe', '$numtel', '$Id_adresse')";

  $query = mysqli_query($connection, $sql);


  if ( $query) {
    echo "<script type='text/javascript'> 
  alert('Les données ont été insérées avec succès dans la base de données.');    
</script>
";

} else {
          echo "<script type='text/javascript'>
        alert('Erreur lors de l'insertion des données :');   
</script>
";

}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>
<body>
  <a href="dashboard.php">cliquez ici</a>
<div class="form">
        <a href="index.php" class="back_btn"><img src="piece3.jpg" alt="piece3"></a>
        <h2>ajouter un patient</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form method="POST">
            <label for="name">nom</label>
            <input type="text" id="name" name="nom" required autocomplete="off">
            
            <label for="">prenom</label>
            <input type="text" name="prenom" required autocomplete="off">
            
            <label for="">age</label>
            <input type="number" name="age" required  autocomplete="off">
           
            <label for="">sexe</label>
            <select name="sexe">
                <option value="masculin">masculin</option>
                <option value="feminin">feminin</option>
            </select>
            
            <label for="">numtel</label>
            <input type="number" name="numtel" required autocomplete="off">

            <label for="">Id_adresse</label>
            <select name="adresse" >
            <?php
              $query="SELECT * FROM adresse";
              $res=mysqli_query($connection,$query);


              while($ligne=mysqli_fetch_array($res)){
                echo"<option name=".$ligne["Id_adresse"]." value=".$ligne["Id_adresse"].">"
                .$ligne[1]."</option>";
              }
              ?>
             <!-- <option value="">faite votre choix</option>
              <option value="">douala</option>
             <option value="">yaounde</option> -->
            </select>


              <!-- while($ligne=mysqli_fetch_array($res)){ -->
                <!-- echo"<option value='$ligne[0]'> -->
                <!-- $ligne[1]</option>"; -->
              <!-- } -->
              <!-- ?> -->
             <!-- <option value="">faite votre choix</option>
              <option value="">douala</option>
             <option value="">yaounde</option> -->
            <!-- </select> -->
            <input type="submit" value="ajouter" name="button">
            <p>je me suis deja enregistrer</p>
            <li><a href="mars.php">cliquez ici</a></li>
        </form>
    </div>
</body>
</html>