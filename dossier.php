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
       <h5 class="text-center my-3">liste des dossiers medicaux</h5>
       
       <?php
              
                  $query = "SELECT * FROM dossier_medical";
                  $res = mysqli_query($connect,$query);
       
                  $output = "";
       
                  $output .= "
                  <table class='table table-responsive table-bordered'>
                       <tr>
                     <th>id</th>
                     <th>date_entree</th>
                     <th>heure</th>
                  <th style='width: 10%'>modifier</th>
                  
                  <th style='width: 10%'>archiver</th>
                  </tr> ";
                  
       
                  if(mysqli_num_rows($res) < 1){
                      $output .= " <tr> 
                      <td colspan='8' class='text-center' >pas de dossier_medical enregistrés</td>
                      </tr>"
                      ;
                  }
       
                  while($row = mysqli_fetch_array($res)){
       
                      $output .="
                          <tr>
                      <td>" .$row['id_dossier']. "</td>
                      <td>" .$row['date_entree']. "</td>
                      <td>" .$row['heure']. "</td>
                      <td>
                      <a href='../utilisateur/view.php?" .$row['id_patient']. "'>
                      <button id='$id' class='btn btn-LISTER'>Vue</button>
                       </a>  
                      </td>  
                   <td><a class='btn btn-primary btn-sn' href='modify.php?id=$row[id]'>modify</a>
                   <a class='btn btn-primary btn-sn' href='delete.php?id=$row[id]' >DELETE</a>
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