<?php
   require "./Classes/Database.php";
   require "./Classes/User.php";
   $conn = Database::connection();
   
   $id = $_GET['id'];

   if(User::delete($conn, $id)){
    header ("Location:admin.php");
   }


?>
