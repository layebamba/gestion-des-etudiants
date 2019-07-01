<!doctype html>
<html lang="en">

<head>
  <title>connexion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="style1.css">
</head>

<body class="body1">
  <div class="container">

    <table style="border:1">
      <?php
//require 'form.php';
      /* function appel($class){
      require $class. ".PHP";
    }
    spl_autoload_register("appel");*/
      require 'Autoloader.php';
      Autoloader::register();


      try {
        $bdd = new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8", "root", "030589");
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      
      } catch (PDOException $e) {
        echo 'Error' . $e->getMessage();
      }


      /*$afficher=$bdd->prepare('SELECT DISTINCT * FROM ETUDIANT');
$afficher->execute(array());
$resultat = $afficher->fetchAll();
echo "<pre>";
print_r($resultat);
echo "</pre>";*/
     // $etudiant = new Serviceetudiant();
      //echo $etudiant->find('NOM');
      //require('Etudiantservice.php');
      $Serviceetu = new Serviceetudiant();
      $Serviceetu->setNom('laye');
      //echo $Serviceetu->getNom();
     // $etuservice = new Etudiantservice();
      //echo $Serviceetu->find("gaye");
     // echo  $Serviceetu->findAll();

      ?>
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









      <h1>veuillez ajouter a la liste</h1>
     
      <form  method="POST"  style="width:100%">
      <div class="forme">
        <div class="form-row">

          <div class="form-group col-md-6"> 
            <label for="MATRICULE">MATRICULE</label>
            <input type="text" class="form-control" id="nom" name="matricule" required placeholder=" MATRICULE"> 
          </div>
          </div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nom">NOM</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder=" votre nom"required>
          </div></div>
          <div class="form-row">
          <div class="form-group col-md-6">
            <label for="prenom">PRENOM</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="votre prenom"required>
          </div>

        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="eil">EMAIL</label>
          <input type="text" class="form-control" id="inputAddress" name="email" placeholder="exemple@gmail.com"required>
        </div>
        </div>
        <div class="form-row">
        <div class="form-group col-md-6">
          <label for="tel">TELEPHONE</label>
          <input type="tel" class="form-control" id="tel" name="tel" placeholder="phone number"required>
        </div>
        </div>
        <div class="form-row">

          <div class="form-group col-md-6">
            <label for="date">date de naissance</label>
            <input type="date" class="form-control" id="date" name="date"required>
          </div>

        </div>

        <div>
        <input type="radio" name="opt_rad" id="Nonboursier" value="oui" onclick="showHideNonboursier();">Nonboursier
        <input type="radio" name="opt_rad" id="Boursier" value="non" onclick="showHideBoursier();">Boursier
        <input type="radio" name="opt_rad" id="loger" value="non" onclick="showHideLoger();" />Loger
        </div>

  <div>
    <label>
      
      <fieldset id="infoNonboursier">
        <label for="name">Adresse :</label>
        <input type="text" name="adresse" id="adresse" placeholder="adresse">
      </fieldset>

     
      <fieldset id="infoBoursier">
        <label for="name">libelle:</label>
        <input type="text" name="libelle" id="libelle" placeholder="libelle">
        <label for="statut">type de bourse</label>
        <select name="statut" id="statut" size="1">
          <optgroup>
            <option value="20000">demi-pension</option>
            <option value="40000">pension complet</option>
          </optgroup>
        </select> <br>
        </fieldset>
        <label for="loger"></label>
        <fieldset id="infologer">
          <label for="name">numero chambre :</label>
          <input type="number" name="numero" id="libelle" placeholder="chambre">
        </fieldset>
      
    </label>

  </div>

    <button type="submit" class="btn btn-primary" name="valider">valider</button>
    </div>
  </form>
  
  
  <script>
    var nb=document.getElementById('infoNonboursier');
    nb.style.display='none';
    var b=document.getElementById('infoBoursier');http://localhost/UNIVERSITE/Index.php
    b.style.display='none';
    var l=document.getElementById('infologer');
    l.style.display='none';

     function showHideNonboursier(){
       nb.style.display='block';
       b.style.display='none';
       l.style.display='none';
    }
    function showHideBoursier(){
      nb.style.display='none';
       b.style.display='block';
       l.style.display='none';
    }
    function showHideLoger(){
      nb.style.display='none';
       b.style.display='none';
       l.style.display='block';
    }

      
  </script>

  <?php
  //var_dump($etudiant);
  if (isset($_POST['valider'])) {
    if (!empty($_POST['matricule'])) {
        $matricule = $_POST['matricule'];   
    }
    if (!empty($_POST['nom'])) {
    $nom = $_POST['nom'];
    }
    if (!empty($_POST['prenom'])) {
    $prenom = $_POST['prenom'];
  }
    if (!empty($_POST['email'])) {
    $email = $_POST['email'];
  }
    if (!empty($_POST['tel'])) {
    $tel = $_POST['tel'];
  }
    if (!empty($_POST['date'])) {
    $date = $_POST['date'];
  }
    
    if (!empty($_POST['adresse'])) {
      $adresse = $_POST['adresse'];
    }
    if (!empty($_POST['libelle'])) {
    $libelle=$_POST['libelle'];
  }
    if (!empty($_POST['statut'])) {
    $statut=$_POST['statut'];
  }
  if (!empty($_POST['numero'])) {
    $numero=$_POST['numero'];
  }

  

    

  


  }




 if (isset($adresse)) {
    $ins = $bdd->prepare("INSERT INTO ETUDIANT(MATRICULE,NOM,PRENOM,EMAIL,TELEPHONE,DATENAISSANCE)
    VALUES(?,?,?,?,?,?)");
    $ins->execute(array($matricule,$nom,$prenom,$email,$tel,$date));

    $select = $bdd->prepare("SELECT max(ID_E) as id FROM ETUDIANT");
    $select->execute(array());
    $all_select = $select->fetchAll();
    //var_dump($all_select);
    $ide = $all_select[0]['id'];
    echo $ide;

    $inse = $bdd->prepare("INSERT INTO NONBOURSIER(ID_E,ADRESSE)
    VALUES(?,?)");
    $inse->execute(array($ide,$adresse));
  }
  
  if (isset($matricule,$nom,$prenom,$email,$tel,$date,$libelle,$statut)) {
    echo "ay vgf h b";
    $inses = $bdd->prepare("INSERT INTO ETUDIANT(MATRICULE,NOM,PRENOM,EMAIL,TELEPHONE,DATENAISSANCE)
    VALUES(?,?,?,?,?,?)");
    $inses->execute(array($matricule,$nom,$prenom,$email,$tel,$date));

    $select = $bdd->prepare("SELECT max(ID_E) as id FROM ETUDIANT");
    $select->execute(array());
    $all_select = $select->fetchAll();
    $ide = $all_select[0]['id'];

    $ise=$bdd->prepare("SELECT ID_T FROM TYPE WHERE MONTANT=?");
    $ise->execute(array($statut));
    $typ=$ise->fetchAll();
    $idt=$typ[0]['ID_T'];
    echo $idt;
    //var_dump($typ);
  
  
   
    $insees = $bdd->prepare("INSERT INTO BOURSIER(ID_E,ID_T)
    VALUES(?,?)");
    $insees->execute(array($ide,$idt));
  }
//AJOUT DE LOGER
if(isset($matricule,$nom,$prenom,$email,$tel,$date,$numero)){
  $insesc = $bdd->prepare("INSERT INTO ETUDIANT(MATRICULE,NOM,PRENOM,EMAIL,TELEPHONE,DATENAISSANCE)
    VALUES(?,?,?,?,?,?)");
    $insesc->execute(array($matricule,$nom,$prenom,$email,$tel,$date));
// recuperation de id boursier
    $lo=$bdd->prepare("SELECT max(ID_B) as id FROM BOURSIER");
    $lo->execute(array());
    $log=$lo->fetchAll();
    //var_dump($log);
    $idee=$log[0]['id'];

    //echo $idee;
    //var_dump($loge);
    //recuperation de id etudiant
  /*  $select1=$bdd->prepare("SELECT max(ID_E) as id FROM ETUDIANT");
    $select1->execute(array());
    $all_select = $select1->fetchAll();
    
    $ide=$all_select[0]['id'];
    echo $ide;*/

//recuperation de id type
  /*  $ise=$bdd->prepare("SELECT ID_T FROM TYPE WHERE MONTANT=?");
    $ise->execute(array($statut));
    $typ=$ise->fetchAll();
    $idt=$typ[0]['ID_T'];
    echo $idt;*/
    //die();
    //recuperation de id chambre 
    $lo1=$bdd->prepare("SELECT ID_C FROM CHAMBRE WHERE NUMERO=?");
    $lo1->execute(array($numero));
    $log1=$lo1->fetchAll();
   // var_dump($log1);
    $loge1=$log1[0]['ID_C'];
    echo $loge1;
    //var_dump($loge1);
   // die();
  

      $inseess = $bdd->prepare("INSERT INTO LOGER(ID_B,ID_C)
    VALUES(?,?)");
    $inseess->execute(array($idee,$loge1));

  
  

  //die();



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