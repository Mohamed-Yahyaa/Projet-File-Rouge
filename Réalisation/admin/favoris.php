<?php

class Favoris{
    private $Id_favoris;
    private $Id_Hotel;
   
    public function getId_favoris() {
        return $this->getId_favoris;
    }
    public function setId_favoris($Id_favoris) {
        $this->getId_favoris = $Id_favoris;
    }

    public function getId_Hotels() {
        return $this->Id_Hotel;
    }
    public function setId_Hotels($Id_Hotel) {
        $this->Id_Hotel = $Id_Hotel;
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