
<?php
require 'Serviceetudiant.php';
$Serviceetu=new Serviceetudiant();
$all = $Serviceetu->findNonBoursier();
?>
<!doctype html>
<html lang="en">
  <head>
    <title>nonboursier</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
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
 

<br>
<br>
<br>
        
          <table  id="example" class="table table-striped table-bordered" style="width:100%">
          <tr>
              <th>ID</th>
              <th>MATRICULE</th>
              <th>NOM</th>
              <th>PRENOM</th>
              <th>EMAIL</th>
              <th>TELEPHONE</th>
              <th>DATENAISSANCE</th>
              <th>ID_NB</th>
              <th>ID_E</th>
              <th>ADRESSE</th>
          </tr>
   <?php
     while($etu = $all->fetch()){
    ?>
      <tr>
            <td><?php echo $etu['ID_E'];?></td>
            <td><?php echo $etu['MATRICULE'];?></td>
            <td><?php echo $etu['NOM'];?></td>
            <td><?php echo $etu['PRENOM'];?></td>
            <td><?php echo $etu['EMAIL'];?></td>
            <td><?php echo $etu['TELEPHONE'];?></td>
            <td><?php echo $etu['DATENAISSANCE'];?></td>
            <td><?php echo $etu['ID_NB'];?></td>
            <td><?php echo $etu['ID_E'];?></td>
            <td><?php echo $etu['ADRESSE'];?></td>
      </tr>
    <?php
    }
    ?>  
</table>








 
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>