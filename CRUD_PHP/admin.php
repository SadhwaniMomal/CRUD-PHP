<?php
    require "./Classes/Database.php";
    require "./Classes/User.php";
    $conn = Database::connection();


    // if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //     $name = $_POST['name'];
    //     $email = $_POST['email'];
    //     $password = $_POST['password'];
  
    //   if(User::update($conn , $name , $email , $password)){
    //     header("Location: admin.php");
  
    //   }
        
    //  }
    $users = User::showAll($conn);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <!-- Bootstrap CDN CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
    <div class="row">
        <div class="col">
        <h3 class="text-center"> Data </h3>
         <!-- table -->
         <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user) : ?>
                <tr>
                    <th scope="row"> <?= $user['id'] ?> </th>
                    <td> <?= $user['name'] ?> </td>
                    <td> <?= $user['email'] ?> </td>
                    <td> <?= $user['password'] ?> </td>
                    <td> <a href="update.php?id=<?= $user['id'] ?>" class="text-center text-white bg-primary text-decoration-none rounded p-2"> Update </a></td>
                    <td> <a href="delete.php?id=<?= $user['id'] ?>" class="text-center text-white bg-danger text-decoration-none rounded p-2"> Delete </a></td>
                </tr>
                <?php endforeach ; ?>
            </tbody>
        </table>
        </div>
    </div>
   </div>
</body>
</html>