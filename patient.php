<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.slim.js"
    integrity="sha256-ugvvN8kgo0lupsul2s8TI1osYRoGFAX4jICI9Adc="crossorigin="anonymous">
    </script>
    <script src="https://a jax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css
    /fontawesome.min.css">
    <script src="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <form action="" method="post">
       
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>patient</title>
    <link rel="stylesheet" href="patient.css">
</head>
<body>
<form action="#" method="post">
    
<?php

$connect = mysqli_connect("localhost", "root", "", "bts2024");

?>
<?php
//include ("../include/header.php"); 

//include ("../include/connection.php"); 
?>


<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<div class="col-md-2"  style="margin-left: -30px;">

<?php

  // include ("sidenav.php");      
?>

</div>
<div class="col-md-10">
<h5 class="text-center my-3">liste patients</h5>

<?php
       
           $query = "SELECT * FROM patient";
           $res = mysqli_query($connect,$query);

           $output = "";

           $output .= "

            <table class='table table-responsive table-bordered'>
                <tr style=' border-bottom:1px solid #000; border-top:px solid #000'>
              <th style='width: 10%; border-bottom:4px solid aqua;'>id</th>
              <th style='width: 10%; border-bottom:4px solid aqua;'>Nom</th>
              <th style='width: 10%; border-bottom:4px solid aqua;'>prenom</th>
              <th style='width: 10%; border-bottom:4px solid aqua;'>age</th>
              <th style='width: 10%; border-bottom:4px solid aqua;'>sexe</th>
              <th style='width: 10%; border-bottom:4px solid aqua;'>numtel</th>
           <th style='width: 10%; border-bottom:4px solid aqua;'>Action</th>
           </tr> ";

           if(mysqli_num_rows($res) < 1){
               $output .= " <tr> 
               <td colspan='7' class='text-center' >pas de patients enregistrés</td>
               </tr>"
               ;
           }

           while($row = mysqli_fetch_array($res)){
            $id= $_POST['Id_patient'];
               $output .="
                   <tr>
               <td>" .$row['Id_patient']. "</td>
               <td>" .$row['nom_patient']. "</td>
               <td>" .$row['prenom_patient']. "</td>
               <td>" .$row['age']. "</td>
               <td>" .$row['sexe']. "</td>
               <td>" .$row['numtel']. "</td>
               <td>
           <a class='btn btn-primary btn-sn' href='dossier.php?id=$id'>Edit</a>
            <a class='btn btn-primary btn-sn' href='delete.php?id=$id'>DELETE</a>
            </td>
               ";
           }

           $output .="
           </tr>
           </table>
           ";

           echo $output;


           

       ?>
       
<?php
// echo $show;
?>
 
 </form>
    </body>
    </html>