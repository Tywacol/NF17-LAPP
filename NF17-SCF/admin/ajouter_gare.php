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
      <h1 class="display-1">Vous avez ajouté une gare !</h1>
    </div>
    <?php
      $user = 'nf17p050';
      $password = 'klfRl2NH';
      $connexion = new PDO('pgsql:host=tuxa.sme.utc ; dbname=dbnf17p050; port=5432',$user,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      //Pas besoin de rentrer l'id de la gare ( auto increment );

      //Déclaration des variables
      $verif=true;
      $nom = $_POST["Nom_Gare"];
      $ville = $_POST["Ville_Gare"];
      $adresse = $_POST["Adresse_Gare"];
      $TZ = $_POST["TimeZone_Gare"];

      //Si un champs est vide
      if(empty($nom)||empty($ville)||empty($adresse)){
        echo "<p>Vous avez oublié de remplir un champs</p>";
        $verif=false;
        echo '<a href="ajout_gare.html"><input type="button" value="Modifier" class="button"></a>';
      }
      //Si la gare rentrée d'une ville a le même nom qu'un autre gare de cette même ville
      $contrainte = "SELECT * FROM gare";
      $contr = $connexion->prepare($contrainte);
      $contr->execute();
      while($row=$contr->fetch(PDO::FETCH_ASSOC)){
        if($nom==$row['nom']&&$ville==$row['ville']){
          echo "<p>Le nom de la gare a déjà été rentré pour cette ville</p>";
          $verif=false;
        }
      }

      //Implémentation dans la BDD
      if($verif){
        $sql = "INSERT INTO gare(nom,ville,adresse,zone_horaire) VALUES (NULL,'$nom','$ville','$adresse','$TZ')";
        $result = $connexion->prepare($sql);
        $result->execute();
      }

      $connexion=null;
     ?>
  </body>
</html>
