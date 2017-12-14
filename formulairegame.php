<?php 
require_once 'connexion.php';


if($_POST)
{
 $resultat = $connexion->prepare("insert into game(title,description,image,category,available) values (:title,:description,:image,:category,:available)");

 $resultat->bindValue(':title',$_POST['title'],PDO::PARAM_STR);
 $resultat->bindValue(':description',$_POST['description'],PDO::PARAM_STR);
 $resultat->bindValue(':image',$_POST['image'],PDO::PARAM_STR);
 $resultat->bindValue(':category',$_POST['category'],PDO::PARAM_STR);
 $resultat->bindValue(':available',$_POST['available'],PDO::PARAM_INT);

 $resultat->execute();

 
}
?>
?>


<!DOCTYPE html>
<html lang="en">


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>formulaire game</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">

  </head>

  <body>


  <form action="" method="post">
  <div class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="title">
  </div>

  <div class="form-group">
    <label for="description">description</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>

  <div class="form-group">
  <label for="image">image</label>
  <input type="file" class="form-control" id="image" name="image" placeholder="image">
</div>

  <div class="form-group">
    <label for="category">category</label>
    <select class="form-control" name="category" id="category">
      <option value="fps">fps</option>
      <option value="rpg">rpg</option>
      <option value="puzzle game">puzzle game</option>
      
    </select>

    <div class="form-group">
    <label for="available">available</label>
    <input type="text" class="form-control" id="available" name="available" placeholder="available">
  </div>

  
  </div>
  
  
</form>
   



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>