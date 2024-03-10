<?php
session_start();
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
    

<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-2"  style="margin-left: -30px;">

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

$nom_utilisateur= $_POST['nom'];
$prenom_utilisateur=$_POST['prenom'];
$email= $_POST['email'];
$sexe= $_POST['sexe'];
$date_naiss= $_POST['date_naiss'];
$numtel= $_POST['numtel'];
$pseudo= $_POST['pseudo'];
$mot_de_passe= $_POST['mdp'];
// Effectuer les opérations sur la base de données
$sql = "INSERT INTO  utilisateur(nom_utilisateur, prenom_utilisateur, email, sexe, datenaiss, numtel, pseudo, mot_de_passe) 
VALUES ('$nom_utilisateur', '$prenom_utilisateur','$email','$sexe','$date_naiss', '$numtel', '$pseudo','$mot_de_passe')";
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
    <title>Document</title>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<div class="container">
        <a href="inserer.php"class="btn_add">retour</a>
        <table>
            <tr id="items">
                <th>Id_utilisateur</th>
                <th>nom_utilisateur</th>
                <th>prenom_utilisateur</th>
                <th>email</th>
                <th>sexe</th>
                <th>date_naiss</th>
                <th>numtel</th>
                <th>pseudo</th>
                <th>mot_de_passe</th>
                <th>action</th>
            </tr>
            <?php
            
            ?>
            <?php
        // lire tous les champs de la BD
        $sq="SELECT * FROM utilisateur ";
        $result=mysqli_query($connection, $sq); 
        if(!$result){
          die("invalid query:".$connection->error);  
        }
        //lire les donnes de chAque ligne
        while($row=mysqli_fetch_array($result)){
           $id=$row['Id_utilisateur'];
          echo"
          <tr>
            <td>" .$row['Id_utilisateur']. "</td>
            <td>".$row['nom_utilisateur']."</td>
            <td>".$row['prenom_utilisateur']."</td>
            <td>".$row['email']."</td>
            <td>".$row['sexe']."</td>
            <td>".$row['datenaiss']."</td>
            <td>".$row['numtel']."</td>
            <td>".$row['pseudo']."</td>
            <td>".$row['mot_de_passe']."</td>
            <td>
            <a href='modifier.php?id=$id' class='link-dark'title='modifier' >
            < i class='fas fa-modifier me-3'></i>
            </a>
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