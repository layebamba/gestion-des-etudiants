<?php
class Nonboursier extends Etudiant{
    private $ID_E;
    private $ADRESSE;

    public function __construct($ID_E='',$ADRESSE='',$MATRICULE='',$NOM='',$PRENOM='',$EMAIL='',$TELEPHONE='',$DATENAISSANCE='')

    {
        parent:: __construct($MATRICULE,$NOM,$PRENOM,$EMAIL,$TELEPHONE,$DATENAISSANCE);
        $this->ID_E=$ID_E;
        $this->ID_T=$ADRESSE;




    }
 
    //SETTER AND GETTER
        public function getID_E()
        {
                return $this->ID_E;
        }
        public function setID_E($ID_E)
        {
                $this->ID_E = $ID_E;

                return $this;
        }
        public function getADRESSE()
        {
                return $this->ADRESSE;
        }
        public function setADRESSE($ADRESSE)
        {
                $this->ADRESSE = $ADRESSE;

                return $this;
        }
}






?>