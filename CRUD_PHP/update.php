<?php
   require "./Classes/Database.php";
   require "./Classes/User.php";
   $conn = Database::connection();
   
   $id = $_GET['id'];

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

  if(User::update($conn , $id , $name , $email , $password )){
     header("Location: admin.php");

  }
    
 }
   $user = User::showOne($conn, $id);



?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPdate </title>
    <!-- Bootstrap CDN CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center">Update Data <?= $user['name'] ?> </h3>
        <form action="" method="post">
            <div class="mb-3">
                <input type="text" class="form-control" name="name" value="<?= $user['name'] ?>" >
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" value="<?= $user['password'] ?>">
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