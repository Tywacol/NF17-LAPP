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
      <h1 class="display-1">Consulter et supprimer des lieux d'intérêt</h1>
    </div>
    Liste de lieux d'intérêts
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Adresse</th>
          <th>Téléphone</th>
          <th>Type</th>
          <th>Gare</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

        <?php
        include_once '../lib/dbconnect.php';

        $sql = "SELECT * FROM lieu_interet, gare WHERE gare.id_gare = lieu_interet.fk_gare ORDER BY fk_gare";
        $result = $connexion->prepare($sql);
        $result->execute();
        while ($row=$result->fetch(PDO::FETCH_ASSOC)){
          echo "<tr>
                  <td>".$row['nom_lt']."</td>
                  <td>".$row['adresse_lt']."</td>
                  <td>".$row['telephone_lt']."</td>
                  <td>".$row['type_lieu']."</td>
                  <td>".$row['nom']."</td>
                  <td>
                  <a class='btn btn-warning'>Modifier</a>
                  <a class='btn btn-danger'>Supprimer</a>
                  </td>
               </tr>";
        }
        $connexion=null;
        ?>

      </tbody>
    </table>
    <a href='admin.html' class='btn-lg white'><button type='button' class='btn btn-primary btn-lg btn-block'>Revenir au menu principal administrateur</button></a>

  </body>
</html>
