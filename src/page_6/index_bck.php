<?php 
   session_start();
   

$_SESSION['P03']= $_POST['p03'];


   header("location: index.php"); 

?>