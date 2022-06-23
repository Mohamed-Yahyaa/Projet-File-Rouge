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
    public function setNom_Hotel($Nom_Hotel) {
        $this->Nom_Hotel = $Nom_Hotel;
    }

    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) {
        $this->Description = $Description;
    }

    public function getPhoto() {
        return $this->Photo;
    }
    public function setPhoto($Photo) {
        $this->Photo = $Photo;
    }
    public function getAdress() {
        return $this->Adress;
    }
    public function setAdress($Adress) {
        $this->Adress = $Adress;
    }

}
     
?>