<?php
require 'Serviceetudiant.php';
$Serviceetu=new Serviceetudiant();
//$all_select = $Serviceetu->find("NOM");
//var_dump($all->fetchAll());
?>

<!doctype html>
<html lang="en">
  <head>
    <title>rechercher boursier</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style1.css">
  </head>
  <body class="body1">
    
  
  <div  class="container">
<h1>RECHERCHER UN BOURSIER ET LOGER</h1>
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
  <form class="navbar-form navbar-left" method="POST" action="#">
<div class="form-row">
      <div class="form-group col-md-6">
        <input type="number" class="form-control" name="id" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-secondary" name="ok" value="rechercher">rechercher</button>
</div>

    </form>


    <table id="example" class="table table-striped table-bordered" style="width:100%"> 
  <thead>
      <tr>
        <td>ID</td>
        <td>MATRICULE</td>
        <td>NOM</td>
        <td>PRENOM</td>
        <td>EMAIL</td>
        <td>TELEPHONE</td>
        <td>DATENAISSANCE</td>
        <td>ID_B</td>
        <td>ID_T</td>
        <td>ID_L</td>
        <td>ID_C</td>
       
      </tr> 
</thead> 
<?php
if(isset($_POST['ok'])){
    if(!empty($_POST['id'])){
        $id=$_POST['id'];
    }


    
}
if(isset($id)){
    $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
    $select = $bdd->prepare("SELECT * FROM ETUDIANT,BOURSIER,LOGER WHERE ID_C='$id'");
    $select->execute(array($id));
   $all_select = $select->fetch();
    
  //var_dump($all_select);
  // $ide = $all_select[$nom];
  //echo $all_select(array($nom));


  if($etu = $all_select){
       
    ?>
    <tbody> 
      <tr>
        <td><?php echo $etu['ID_E'];?></td>
        <td><?php echo $etu['MATRICULE'];?></td>
        <td><?php echo $etu['NOM'];?></td>
        <td><?php echo $etu['PRENOM'];?></td>
        <td><?php echo $etu['EMAIL'];?></td>
        <td><?php echo $etu['TELEPHONE'];?></td>
        <td><?php echo $etu['DATENAISSANCE'];?></td>
        <td><?php echo $etu['ID_B'];?></td>
        <td><?php echo $etu['ID_T'];?></td>
        <td><?php echo $etu['ID_L'];?></td>
        <td><?php echo $etu['ID_C'];?></td>
       
      
      
      
      </tr>
      </tbody>
     
    <?php
    
  }}
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