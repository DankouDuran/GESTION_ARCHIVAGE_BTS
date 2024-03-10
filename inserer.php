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
<li><a href="liste.php">retour</a></li>
<div class="form">
        <h2> add  A NEW users</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label for="">nom</label>
            <input type="text" name="nom" required autocomplete="off">
            
            <label for="">prenom</label>
            <input type="text" name="prenom" required autocomplete="off">
            
            <label for="">email</label>
            <input type="mail" name="email" required autocomplete="off">
            
            <label for="">sexe</label>
            <select name="sexe">
                <option value="masculin" name="masculin">masculin</option>
                <option value="feminin" name="feminin">feminin</option>
            </select>
            
            <label for="">date_naiss</label>
            <input type="date" name="date_naiss" required autocomplete="off">
            
            <label for="">numtel</label>
            <input type="number" name="numtel" required autocomplete="off">
            
            <label for="">pseudo</label>
            <input type="text" name="pseudo" required autocomplete="off" >

            <label for="">mot_de_passe</label>
            <input type="password" name="mdp" required autocomplete="off">

            <input type="submit" value="ajouter" name="button">
        </form>
</div>
</body>
</html>