<?php

if(isset($_POST['check'])){
    $bourse=false;
    $loge=false;
    $new_mat = "";
    $mat=$_POST['matricule'];
    $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
    $req=$bdd->prepare("
    SELECT ETUDIANT.ID_E,ETUDIANT.MATRICULE,ETUDIANT.NOM,ETUDIANT.PRENOM,BOURSIER.ID_E AS boursier,LOGER.ID_EB AS loger
    FROM ETUDIANT
    LEFT JOIN BOURSIER ON ETUDIANT.ID_E=BOURSIER.ID_E
    LEFT JOIN LOGER ON BOURSIER.ID_E=LOGER.ID_EB
    WHERE ETUDIANT.MATRICULE='$mat'");
    $req->execute();
    $result=$req->fetch();
    $new_mat = $result['MATRICULE']; 
    // var_dump($result);
    if ($result['boursier'] != NULL){
        $bourse = true;
        if($result['loger']!= NULL){
            $loge = true;
        }
        else {
            $loge=false;
        }
        
    }
    else {
        $bourse=false;
    }
    // var_dump($bourse);
    // var_dump($loge);

    // while ($result=$req->fetch())
    //  {
        
    // }
}



?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  </head>
  <body class="body1">
      <div class="container">

         
      <div class="btn-group" role="group" aria-label="Basic example" style="width:100%">
      <a type="button" class="btn btn-secondary" href="accueil1.php">accueil</a>
  <a type="button" class="btn btn-secondary" href="accueil.php">ajouter</a>
  <a type="button" class="btn btn-secondary" href="page1.php">liste des etudiants</a>
  <a type="button" class="btn btn-secondary" href="pages4.php">liste des boursier</a>
  <a type="button" class="btn btn-secondary" href="pages3.php">liste des etudiant non boursier</a>
  <a type="button" class="btn btn-secondary"href="rechercher.php">rechercher un etudiant</a>
  <a type="button" class="btn btn-secondary"href="recherche.php">rechercher boursier et loger</a>
  <a type="button" class="btn btn-secondary"href="checkstatut.php">checkstatut</a>

</div>
<br><br><br>
<h1>LE STATUT DE L'ETUDIANT</h1>
      <form class="navbar-form navbar-left" method="POST" action="#">
<div class="form-row">
      <div class="form-group col-md-6">
          <label for="id">MATRICULE</label>
        <input type="text" class="form-control" required name="matricule" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-secondary" name="check" value="rechercher">rechercher</button>
</div>

    <?php
      if(isset($_POST['check'])){
        if($bourse == true){
            if($loge = true){
                echo($new_mat." est Boursier, Loger");
            }
            else{
                echo($new_mat." est Boursier,Non Loger");

            }
        }
        else{
            echo($new_mat." n'est ni Boursier, ni Loger");

        }
      }
    ?>

      </div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>