<?php
class Serviceetudiant{
    private $NOM;
     /**
     * Get the value of NOM
     */ 
    public function getNOM()
    {
        return $this->NOM;
    }
    public function setNOM($NOM)
    {
        $this->NOM = $NOM;

        return $this; 
    }
    public function Add(Etudiant $etudiant){
        $MATRICULE=$etudiant->getMatricule();
        $NOM=$etudiant->getNom();
        $PRENOM=$etudiant->getPrenom();
        $EMAIL=$etudiant->getEmail();
        $TELEPHONE=$etudiant->getTelephone();
        $DATENAISSANCE=$etudiant->getDateNaissance();
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        //$bdd=$this->connection();
        $db=$bdd->prepare("INSERT INTO ETUDIANT(MATRICULE,NOM,PRENOM,EMAIL,TELEPHONE,DATENAISSANCE)
        VALUES(:MATRICULE,:NOM,:PRENOM,:EMAIL,:TELEPHONE,:DATENAISSANCE)");
        $db->bindParam(':MATRICULE',$MATRICULE);
        $db->bindParam(':NOM',$NOM,PDO::PARAM_STR_CHAR);
        $db->bindParam(':PRENOM',$PRENOM,PDO::PARAM_STR_CHAR);
        $db->bindParam(':EMAIL',$EMAIL,PDO::PARAM_STR_CHAR);
        $db->bindParam(':TELEPHONE',$TELEPHONE, PDO::PARAM_INT);
        $db->bindParam(':DATENAISSANCE',$DATENAISSANCE,PDO::PARAM_INT);
        $db->execute();
        $db=$bdd->prepare("SELECT ID_E FROM ETUDIANT WHERE MATRICULE='$MATRICULE'");
        $db->execute();
         $resultat=$db->fetch();
        if(get_class($etudiant=="Boursier")){
         $db->prepare("INSERT INTO Boursier(ID_E,ID_T)
             VALUES(:ID_E,:ID_T)");
             $ID_E=$etudiant-> $resultat=$bdd->fetch();
             $ID_T=$etudiant->getID_T();
         }
        elseif (get_class($etudiant)=="Nonboursier"){
            $db=$bdd->prepare("INSERT INTO Nonboursier(ADRESSE)
            VALUES(:ADRESSE)");
            $db->execute();
            $ADRESSE=$etudiant->getADRESSE();
        } elseif (get_class($etudiant=="Loger")) {   
             $db=$this->prepare("INSERT INTO Loger(ID_B,ID_C)
           VALUES(:ID_B,:ID_C)");
        $Loger=$etudiant->getLoger();  }
    
}
public function find($nom){
  
    
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $q=$bdd->prepare("SELECT * FROM ETUDIANT WHERE nom='$nom'");
        $q->execute(array($nom));
       // $p=$q->fetchAll();
       // var_dump($p);
       return $q;
    }
    public function findBoursiers($prenom){
  
    
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $q=$bdd->prepare("SELECT * FROM ETUDIANT,BOURSIER WHERE prenom='$prenom'");
        $q->execute(array($prenom));
       // $p=$q->fetchAll();
       // var_dump($p);
       return $q;
    }
    public function findAll(){
       // if($table=='ETUDIANT')
        
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $q=$bdd->prepare("SELECT * FROM ETUDIANT");
        $q->execute(array());
        //$p=$q->fetchAll();
        //var_dump($p);
        return $q;
     }
       /* elseif($table=='BOURSIER')
         {
            $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
            $q=$bdd->prepare("SELECT * FROM BOURSIER");
            $q->execute(array());

            return $q;
         }
         elseif ($table=='NONBOURSIER')
          {
            $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
            $q=$bdd->prepare("SELECT * FROM NONBOURSIER");
            $q->execute(array());

            return $q;
             
         }
    }*/
    public function findNonBoursier(){
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $q=$bdd->prepare("SELECT * FROM ETUDIANT,NONBOURSIER WHERE ETUDIANT.ID_E=NONBOURSIER.ID_E");
        $q->execute(array());
        //$p=$q->fetchAll();
       // var_dump($p);
       return $q;

    }
    
    public function findBoursier(){
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $q=$bdd->prepare("SELECT * FROM ETUDIANT,BOURSIER WHERE ETUDIANT.ID_E=BOURSIER.ID_E");
        $q->execute(array());
        //$p=$q->fetchAll();
       // var_dump($p);
       return $q;

    }
    public function findetudiant(){
        $bdd=new PDO("mysql:host=localhost;dbname=UNIVERSITE;charset=utf8","root","030589");
        $q=$bdd->prepare("SELECT * FROM ETUDIANT,LOGER,CHAMBRE WHERE ETUDIANT.ID_E=LOGER.ID_B=LOGER.ID_C=CHAMBRE.ID_BAT");
        $q->execute(array());
        return $q;
    }




}
?>
