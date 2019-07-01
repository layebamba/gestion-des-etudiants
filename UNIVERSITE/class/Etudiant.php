<?php
 abstract  class Etudiant{
private $MATRICULE;
private $NOM;
private $PRENOM;
private $EMAIL;
private $TELEPHONE;
private $DATENAISSANCE;
public function __construct($MATRICULE='',$NOM='',$PRENOM='',$EMAIL='',$TELEPHONE='',$DATENAISSANCE='')
{
  $this->MATRICULE=$MATRICULE;
  $this->NOM=$NOM;
  $this->PRENOM=$PRENOM;
  $this->EMAIL=$EMAIL;
  $this->TELEPHONE=$TELEPHONE;
  $this->DATENAISSANCE=$DATENAISSANCE;
}
//GETTER AND SETTER
  public function getMATRICULE()
  {
    return $this->MATRICULE;
  }
  public function setMATRICULE($MATRICULE)
  {
    $this->MATRICULE = $MATRICULE;

    return $this;
  }
  public function getNOM()
  {
    return $this->NOM;
  } 
  public function setNOM($NOM)
  {
    $this->NOM = $NOM;

    return $this;
  } 
  public function getPRENOM()
  {
    return $this->PRENOM;
  }
  public function setPRENOM($PRENOM)
  {
    $this->PRENOM = $PRENOM;

    return $this;
  }
  public function getEMAIL()
  {
    return $this->EMAIL;
  } 
  public function setEMAIL($EMAIL)
  {
    $this->EMAIL = $EMAIL;

    return $this;
  }
  public function getTELEPHONE()
  {
    return $this->TELEPHONE;
  } 
  public function setTELEPHONE($TELEPHONE)
  {
    $this->TELEPHONE = $TELEPHONE;

    return $this;
  }
  public function getDATENAISSANCE()
  {
    return $this->DATENAISSANCE;
  }
  public function setDATENAISSANCE($DATENAISSANCE)
  {
    $this->DATENAISSANCE = $DATENAISSANCE;

    return $this;
  }
}
    



?>