<?php 
require_once 'connexion.php';

if($_POST)
{
 $resultat = $connexion->prepare("insert into user(username,password,email,firstname,lastname) values (:username,:password,:email,:firstname,:lastname)");

 $resultat->bindValue(':username',$_POST['username'],PDO::PARAM_STR);
 $resultat->bindValue(':password',$_POST['password'],PDO::PARAM_STR);
 $resultat->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
 $resultat->bindValue(':firstname',$_POST['firstname'],PDO::PARAM_STR);
 $resultat->bindValue(':lastname',$_POST['lastname'],PDO::PARAM_STR);

 $resultat->execute();

 
}
?>


<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>formulaire user</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>


  <form  method="post">
  <div class="form-group">
    <label for="username">username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="username">
  </div>

  <div class="form-group">
    <label for="Password">Password</label>
    <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
  </div>
  
  <div class="form-group">
    <label for="firstname">firstname</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
  </div>

  <div class="form-group">
    <label for="lastname">lastname</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
  </div>
  
</form>
   



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>