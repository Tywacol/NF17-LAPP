<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html
    ; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <title>Société De Chemins de Fer Admin</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <h1 class="display-1">Vous avez supprimé la gare</h1>
    </div>
    <?php
    
      include_once '../lib/dbconnect.php';

      //Déclaration des variables
      $gare = $_POST['Selection_Gare'];

      //Suppression dans la BDD
      $sql = "DELETE FROM gare WHERE gare.id_gare='$gare'";
      $result = $connexion->prepare($sql);
      $result->execute();

      echo "<a href='suppression_gare.php' class='btn-lg white'><button type='button' class='btn btn-primary btn-lg btn-block'>Supprimer une autre gare</button></a>";
      echo "<a href='admin.html' class='btn-lg white'><button type='button' class='btn btn-secondary btn-lg btn-block'>Revenir au menu principal administrateur</button></a>";
      $connexion=null;
     ?>
  </body>
</html>
