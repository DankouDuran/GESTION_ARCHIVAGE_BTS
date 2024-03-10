<?php          
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "bts2024";

// Établir une connexion à la base de données

$connection = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);
if(isset($_POST['button']))
{
 // Récupérer les valeurs soumises par le formulaire

$nom_patient= $_POST['nom'];
$prenom_patient=$_POST['prenom'];
$age= $_POST['age'];
$sexe= $_POST['sexe'];
$numtel= $_POST['numtel'];
$id=$_GET['id'];
extract($_POST);
$query="UPDATE patient SET nom_patient='$nom_patient', prenom_patient='$prenom_patient', age='$age', sexe='$sexe',  numtel='$numtel' WHERE id_patient=$id";
if(mysqli_query($connection,$query)){
       
 //header("location:patient.php?msg=suppression reussie");
 echo"<script>alert('modification reussie')</script>";
}
else{
 echo"<script>alert('echec')</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inserer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <li><a href="index.php" class="btn_add">retour</a></li>
    
<div class="form">
        <a href="index.php" class="back_btn"><img src="piece3.jpg" alt="piece3"></a>
        <h2>modifier un patient</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" required autocomplete="off">
            
            <label for="">prenom</label>
            <input type="text" name="prenom" required autocomplete="off">
            
            <label for="">age</label>
            <input type="number" name="age" required autocomplete="off">
            
            <label for="">Id_adresse</label>
            <select name="Id_adresse" id="Id_adresse">
            <?php
              
              $query="SELECT * FROM adresse";
              $res=mysqli_query($connection,$query);

              while($ligne=mysqli_fetch_array($res)){
                echo"<option name='ligne[]' value='".$ligne["Id_adresse"]."'>".$ligne['nom']."</option>";
              }
              ?>
             <!-- <option value="">faite votre choix</option>
              <option value="">douala</option>
             <option value="">yaounde</option> -->
            </select>

            <label for="">sexe</label>
            <select name="sexe">
                <option value="masculin" name="sexe">masculin</option>
                <option value="feminin" name="sexe">feminin</option>
            </select>
            <label for="">numtel</label>
            <input type="number" name="numtel" required autocomplete="off">
            <input type="submit" value="modifier" name="button">
            <a href="index.php"></a>
        </form>
    </div> 
</body>
</html>

<?php 
if(isset($_POST['button']))
{
 // Récupérer les valeurs soumises par le formulaire

$nom_patient= $_POST['nom'];
$prenom_patient=$_POST['prenom'];
$age= $_POST['age'];
$Id_adresse= $_POST['Id_adresse'];
$sexe= $_POST['sexe'];
$numtel= $_POST['numtel'];
// Effectuer les opérations sur la base de données
$sql = "INSERT INTO  patient(nom_patient, prenom_patient, age, Id_adresse, sexe,  numtel) 
VALUES ('$nom_patient', '$prenom_patient','$age','$Id_adresse','$sexe', '$numtel')";
if (mysqli_query($connection, $sql)) {
  echo "oui";
//       echo "<script type='text/javascript'> 

//         alert('Les données ont été insérées avec succès dans la base de données.');
     
// </script>
// ";

} else {
  echo "non";
//           echo "<script type='text/javascript'>
     
//         alert('Erreur lors de l'insertion des données :');
     
// </script>
// ";

}
}

?>