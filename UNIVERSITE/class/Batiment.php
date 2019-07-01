<?php
class Batiment{
    private $id_bat;
    private $nom;
    private $numero;

    public function __construct($id_bat='',$nom='',$numero='')
    {
      $this->id_bat=$id_bat;
      $this->nom=$nom;
      $this->numero=$numero;  
    }
    
    

      /**
       * Get the value of id_bat
       */ 
      public function getId_bat()
      {
            return $this->id_bat;
      }

      /**
       * Set the value of id_bat
       *
       * @return  self
       */ 
      public function setId_bat($id_bat)
      {
            $this->id_bat = $id_bat;

            return $this;
      }

      /**
       * Get the value of nom
       */ 
      public function getNom()
      {
            return $this->nom;
      }

      /**
       * Set the value of nom
       *
       * @return  self
       */ 
      public function setNom($nom)
      {
            $this->nom = $nom;

            return $this;
      }

      /**
       * Get the value of numero
       */ 
      public function getNumero()
      {
            return $this->numero;
      }


      /**
       * Set the value of numero
       *
       * @return  self
       */ 
      public function setNumero($numero)
      {
            $this->numero = $numero;

            return $this;
      }
} 



?>