
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   

?>
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

$date_entree=$_POST['date_entree'];
$heure= $_POST['heure'];
$Id_patient= $_POST['Id_patient'];
// Effectuer les opérations sur la base de données
$sql = "INSERT INTO  dossier_medical(date_entree, heure, Id_patient) 
VALUES ('$date_entree', '$heure','$Id_patient')";
if (mysqli_query($connection, $sql)) {
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
  
<div class="form">
        <a href="index.php" class="back_btn"><img src="piece3.jpg" alt="piece3"></a>
        <h2>add medical record</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label for="">date_entree</label>
            <input type="datetime" name="date_entree" required autocomplete="off">
            
            <label for="">heure</label>
            <input type="time" name="heure" required autocomplete="off">

            <label for="">Id_patient</label>
            <select name="Id_patient" id="Id_patient">
            <?php
              $query="SELECT * FROM patient";
              $res=mysqli_query($connection,$query);

              while($ligne=mysqli_fetch_array($res)){
                echo"<option name=".$ligne["Id_patient"]." value='".$ligne["Id_patient"]."'>"
                .$ligne['nom']."</option>";
              }
              ?>
             <!-- <option value="">faite votre choix</option>
              <option value="">douala</option>
             <option value="">yaounde</option> -->
            </select>

            <input type="submit" value="ajouter" name="button">
            <a href="index.php"></a>
        </form>
    </div>
    <div class="container">
        <a href="#"class="btn_add"><img src="piece3.jpg" alt="piece3"></a>
        <table>
            <tr id="items">
                <th>Id_dossier_</th>
                <th>date_entree</th>
                <th>heure</th>
                <th>Id_patient</th>
                <th>action</th>
            </tr>
            <?php
        // lire tous les champs de la BD
        $sql="SELECT * FROM patient ";
        $result=mysqli_query($connection, $sql); 
        if(!$result){
          die("invalid query:".$connection->error);  
        }
        //lire les donnes de chAque ligne
        while($row=mysqli_fetch_array($result)){
           $id=$row['Id_patient'];
          echo"
          <tr>
            <td>".$row['date_entree']."</td>
            <td>".$row['heure']."</td>
            <td>" .$row['Id_patient']. "</td>
            <td><a class='btn btn-primary btn-sn' href='modifier.php?id=$id'>Edit</a>
            <a class='btn btn-primary btn-sn' href='supprimer.php?id=$id' >DELETE</a>
            </td>
        </tr>
          ";
        }
     ?>

          <?php 

          ?>
        </table>
        </div>
</body>
</html>