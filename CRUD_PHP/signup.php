<?php
   require "./Classes/Database.php";
   require "./Classes/User.php";
   $conn = Database::connection();
  

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];

    if(User::insert($conn , $name , $email , $password)){
        // echo "Insert Successfully";
        header("Location:signup.php");

    }
      
   }


?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
    <!-- Bootstrap CDN CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Signup </h3>
        <form action="" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="***">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-success" >
            </div>
        </form>
        </div>
    </div>
   </div>
</body>
</html>