<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html
    ; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <title>Société De Chemins de Fer</title>
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <?php
      $user = 'nf17p050';
      $password = 'klfRl2NH';
      $connexion = new PDO('pgsql:host=tuxa.sme.utc ; dbname=dbnf17p050; port=5432',$user,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



      $connexion=null;
     ?>
    <div>
    </div>
  </body>
</html>
