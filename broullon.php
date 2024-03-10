<?php      
       if(isset($_POST['button']))
       {
        // Récupérer les valeurs soumises par le formulaire
       
       $nom_patient= $_POST['nom'];
       $prenom_patient=$_POST['prenom'];
       $age= $_POST['age'];
       $sexe= $_POST['sexe'];
       $Id_adresse= $_POST['Id_adresse'];
       $numtel= $_POST['numtel'];
       }
           
// Informations de connexion à la base de données
$serveur = "localhost";
$utilisateur = "root";
$motdepasse = "";
$basededonnees = "bts2024";

// Établir une connexion à la base de données

$connection = mysqli_connect($serveur, $utilisateur, $motdepasse, $basededonnees);

       // check connexion
       if($connection->connect_error){
       echo '<script> alert"reussie"</script>';
       }
       extract($_POST);
       $sql="UPDATE patient SET nom_patient='$nom_patient',prenom_patient='$prenom_patient',age=' $age',sexe=' $sexe',Id_adresse='$Id_adresse',numtel='$numtel'";
       if(mysqli_query($connection,$query)){
              
        //header("location:patient.php?msg=suppression reussie");
        echo"<script>alert('modification reussie')</script>";
       }
       else{
        echo"<script>alert('echec')</script>";
       }
       ?>
       
       $id=$_GET['id'];
       $query="UPDATE patient SET  nom_patient=?,prenom_patient=?,age=?,sexe=? ,numtel=?WHERE id_patient=?" ;
       $res=mysqli_query($connection,$query);
       if($res){
        //header("location:patient.php?msg=suppression reussie");
        echo"<script>alert('modification reussie')</script>";
       }
       else{
        echo"<script>alert('echec')</script>";
       }