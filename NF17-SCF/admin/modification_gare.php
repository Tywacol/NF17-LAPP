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
      <h1 class="display-1 test">Veuillez selectionner la gare à modifier</h1>
    </div>
    <?php
      include_once '../lib/dbconnect.php';
      //Requete des gares
      echo "<form class='container' method='POST' action='modifier_gare.php'>";
      echo "<div class='form-group'>";
      $sql = "SELECT gare.id_gare, gare.nom, gare.ville FROM gare";
      $result = $connexion->prepare($sql);
      $result->execute();
      echo "<label for='Selection_Gare'>Nom de la gare</label>";
      echo "<select class='form-control' id='Selection_Gare' name='Selection_Gare'>";
      while ($row=$result->fetch(PDO::FETCH_ASSOC)){
        echo "<option  value=".$row['id_gare'].">";
        echo $row['nom']." - ".$row['ville'];
        echo "</option>";
      }
      echo "</select>";
      $connexion=null;
     ?>
    </div>
        <button type="submit" class="btn btn-primary">Modifier la gare</button>
      </form>
  </body>
</html>
