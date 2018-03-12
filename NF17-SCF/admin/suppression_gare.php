<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html
    ; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <title>Société De Chemins de Fer</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="container text-center">
      <h1 class="display-1">Vous allez supprimer une gare</h1>
    </div>
    <?php
      $user = 'nf17p050';
      $password = 'klfRl2NH';
      $connexion = new PDO('pgsql:host=tuxa.sme.utc;dbname=dbnf17p050;port=5432',$user,$password);
      $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //Requete des gares
      echo "<form class='container' method='POST' action='supprimer_gare.php'>";
      echo "<div class='form-group'>";
      $sql = "SELECT gare.nom FROM gare";
      $result = $connexion->prepare($sql);
      $result->execute();
      echo "<label for='Selection_Gare'>Nom de la gare</label>";
      echo "<select class='form-control' id='Selection_Gare' name='Selection_Gare'>";
      while ($row=$result->fetch(PDO::FETCH_ASSOC)){
        echo "<option  value=".$row['nom'].">";
        echo $row['nom'];
        echo "</option>";
      }
      echo "</select>";
      echo "TEST";
      $connexion=null;
     ?>
        </div>
        <button type="submit" class="btn btn-primary">Supprimer la gare</button>
      </form>
  </body>
</html>
