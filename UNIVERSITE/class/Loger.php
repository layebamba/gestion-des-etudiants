<?php
class LOGER extends BOURSIER{
    private $ID_B;
    private $ID_C;
   
   public function __construct($ID_E='',$ID_T='',$MATRICULE='',$NOM='',$PRENOM='',$EMAIL='',$TELEPHONE='0',$DATENAISSANCE='',$ID_B='',$ID_C='')
   {
        parent:: __construct($ID_E,$ID_T,$MATRICULE,$NOM,$PRENOM,$EMAIL,$TELEPHONE,$DATENAISSANCE);
        $this->ID_B=$ID_B;
        $this->ID_C=$ID_C;
      }

    

    /**
     * Get the value of ID_B
     */ 
    public function getID_B()
    {
        return $this->ID_B;
    }

    public function setID_B($ID_B)
    {
        $this->ID_B = $ID_B;

        return $this;
    }

    /**
     * Get the value of ID_C
     */ 
    public function getID_C()
    {
        return $this->ID_C;
    }

    
    public function setID_C($ID_C)
    {
        $this->ID_C = $ID_C;

        return $this;
    }
}


?>