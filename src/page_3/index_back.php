<?php
   session_start();
   


   $_SESSION['gold']= $_POST['gold'];
   
   $_SESSION['P02']= $_POST['p02'];
   $_SESSION['P01']= $_POST['p01'];



header("location: index.php"); 


?>