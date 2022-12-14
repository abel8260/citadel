<?php 
   session_start();
   

$_SESSION['P04']= $_POST['p04'];


   header("location: index.php"); 

?>