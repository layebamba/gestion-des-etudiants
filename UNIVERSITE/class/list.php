<?php

require 'Serviceetudiant.php';
$Serviceetu=new Serviceetudiant();
$all = $Serviceetu->findAll();
//var_dump($all->fetchAll());
//require 'delet.php'
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <title>Document</title>
</head>
<body>
<table id="example" class="table table-striped table-bordered" style="width:100%"> 
  <thead>
      <tr>
        <th>ID</th>
        <th>MATRICULE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>DATENAISSANCE</th>
       
      </tr> 
</thead>  
    <?php
      while($etu = $all->fetch()){
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
       
      
      
      
      </tr>
      </tbody>
     
    <?php
    }
    ?>  
     <tfoot>
      <tr>
        <th>ID</th>
        <th>MATRICULE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>EMAIL</th>
        <th>TELEPHONE</th>
        <th>DATENAISSANCE</th>
      </tr> 

      </tfoot>
    </table>





<script>
$(document).ready(function() {
    $('#example').DataTable();
} );

</script>
    
</body>
</html>