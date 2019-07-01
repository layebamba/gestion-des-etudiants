<?php
class TYPE{
     private $LIBELLE;
     private $MONTANT;

     public function __construct($LIBELLE='',$MONTANT='0')
     {
         $this->LIBELLE=$LIBELLE;
         $this->MONTANT=$MONTANT;
     }
   

         public function getLIBELLE()
         {
                  return $this->LIBELLE;
         } 
         public function setLIBELLE($LIBELLE)
         {
                  $this->LIBELLE = $LIBELLE;

                  return $this;
         } 
         public function getMONTANT()
         {
                  return $this->MONTANT;
         }
         public function setMONTANT($MONTANT)
         {
                  $this->MONTANT = $MONTANT;

                  return $this;
         }
}
















?>