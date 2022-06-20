<?php

class Hotels{
    private $Id;
    private $Nom_Hotel;
    private $Description;
    private $Photo;
    private $Adress;
    
    public function getId() {
        return $this->Id;
    }
    public function setId($id) {
        $this->Id = $id;
    }

    public function getNom_Hotel() {
        return $this->Nom_Hotel;
    }
    public function setNom_Hotel($nom_Hotel) {
        $this->Nom_Hotel = $nom_Hotel;
    }

    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($description) {
        $this->Description = $description;
    }

    public function getPhoto() {
        return $this->Photo;
    }
    public function setPhoto($photo) {
        $this->Photo = $photo;
    }
    public function getAdress() {
        return $this->Adress;
    }
    public function setAdress($adress) {
        $this->Adress = $adress;
    }
  
}
     
?>