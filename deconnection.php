<?php
session_start();
if(isset($_SESSION['utilisateur'])){
unset($_SESSION['utilisateur']);
header("Location:donner.php");
}
?>