<?php
session_start();
?>
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

if (isset ($_POST['button'])){
  $nom=$_POST['nom'];
  $prenom=$_POST['prenom'];
  $age=$_POST['age'];
  $sexe=$_POST['sexe'];
  $numb=$_POST['numtel'];
  $adresse=$_POST['adresse'];

  $sql=" INSERT INTO patient (nom_patient, prenom_patient, age, sexe, numtel, Id_adresse)
  VALUES ('$nom', '$prenom', '$age', '$sexe', '$numb', '$adresse')";

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
<div class="container">
    
<div class="search">
        <input type="text" placeholder="rechercher">
        <input type="submit" value="search" name="search">
        <li><a href="index.php">cliquez ici</a></li>
    </div>
        <a href="#"class="btn_add"><img src="piece3.jpg" alt="piece3"></a>
        <table>
            <tr id="items">
                <th>Id</th>
                <th>nom</th>
                <th>prenom</th>
                <th>age</th>
                <th>sexe</th>
                <th>numtel</th>
                <th>Id_adresse</th>
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
            <td>" .$row['Id_patient']. "</td>
            <td>".$row['nom_patient']."</td>
            <td>".$row['prenom_patient']."</td>
            <td>".$row['age']."</td>
            <td>".$row['sexe']."</td>
            <td>".$row['numtel']."</td>
            <td>".$row['Id_adresse']."</td>
            <td><a class='btn btn-primary btn-sn' href='modifier.php?id=$id'>Edit</a>
            <a class='btn btn-primary btn-sn' href='supprimer.php?id=$id' >DELETE</a>
            </td>
        </tr>
          ";
        }
     ?>
        </table>
        </div>
        </body>
</html>