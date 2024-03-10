<?php          
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "bts2024";

// Établir une connexion à la base de données

$connection = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);
       $id=$_GET['id'];
       $query="DELETE FROM patient WHERE Id_patient='$id'";
       $res=mysqli_query($connection,$query);
       if($res){
        //header("location:patient.php?msg=suppression reussie");
        echo"<script>alert('suppression reussie')</script>";
       }
       else{
        echo"<script>alert('echec')</script>";
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
</body>
</html>