<?php
class Chambre{
      private $ID_BAT;
      private $NUMERO;
      public function __construct($ID_BAT='',$NUMERO)
      {
          $this->ID_BAT=$ID_BAT;
          $this->NUMERO=$NUMERO;  
      }

             public function getID_BAT()
          {
                    return $this->ID_BAT;
          }
          public function setID_BAT($ID_BAT)
          {
                    $this->ID_BAT = $ID_BAT;

                    return $this;
          }
          public function getNUMERO()
          {
                    return $this->NUMERO;
          }
          public function setNUMERO($NUMERO)
          {
                    $this->NUMERO = $NUMERO;

                    return $this;
          }
}

















?>