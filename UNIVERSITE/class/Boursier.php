<?php
class Boursier extends Etudiant {
private $ID_E;
private $ID_T;

public function ___construct($ID_E='',$ID_T='',$MATRICULE='',$NOM='',$PRENOM='',$EMAIL='',$TELEPHONE='',$DATENAISSANCE=''){
parent::___construct($MATRICULE,$NOM,$PRENOM,$EMAIL,$TELEPHONE,$DATENAISSANCE);
$this->ID_E=$ID_E;
$this->ID_T=$ID_T;

}
// GETTER AND SETTER; 
public function getID_E()
{
return $this->ID_E;
}
public function setID_E($ID_E)
{
$this->ID_E = $ID_E;

return $this;
}
public function getID_T()
{
return $this->ID_T;
}
public function setID_T($ID_T)
{
$this->ID_T = $ID_T;

return $this;
}
}

?>