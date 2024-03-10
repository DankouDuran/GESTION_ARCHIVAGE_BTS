<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connexion</title>
    <link rel="stylesheet" href="connexion.css">
</head>
<body>
    
<?php

$connect = mysqli_connect("localhost", "root", "", "bts2024");


?>
<?php
if(isset($_POST['button']))
{

$pseudo=$_POST['pseudo'];
$mdp=$_POST['mdp'];

$error = array();

if (empty($pseudo)) {
    $error['utilisateur']=" Veuillez entrer votre pseudo"; 
}else if (empty($mdp)) {
    $error['utilisateur']="Veuillez entrer votre mot de passe"; 
}

if(count($error)==0){

     $query = "SELECT * FROM utilisateur WHERE pseudo='$pseudo' AND  mot_de_passe='$mdp'";

     $result = mysqli_query($connect,$query);
    
    if(mysqli_num_rows($result) ==0){
        echo"<script> alert('vous avez éte reconnu en tant que utilisateur ') </script>";

        $_SESSION['utilisateur'] = $pseudo;   

         header("Location:dashboard.php");
         exit();

        
        }
        else{
         echo"<script> alert('pseudo utilisateur ou mot de passe invalide') </script>"; 
    }
}

}
 ?>
</div> 
 <?php
                               if(isset($error['utilisateur'])){

                                $sh= $error['utilisateur'];

                                  $show= "<h4 class='text-center  alert alert-danger'> $sh</h4>";

                               }else{
                                 $show= "";

                               }
                               echo $show;

?>
                            <?php
                               if(isset($error['utilisateur'])){

                                $sh= $error['utilisateur'];

                                  $show= "<h4 class='text-center  alert alert-danger'> $sh</h4>";

                               }else{
                                 $show= "";

                               }
                               echo $show;
                             ?>
<div class="form">
        <h2> user connection</h2>
        <p class="erreur_message">
            veillez remplir tous les champs
        </p>
        <form action="" method="POST">
            <label for="">pseudo</label>
            <input type="text" name="pseudo" required autocomplete="off">
            
            <label for="">mot_de_passe</label>
            <input type="password" name="mdp" required autocomplete="off">
            <input type="submit" value="se connecter" name="button">
        </form>
    </div>
</body>
</html>