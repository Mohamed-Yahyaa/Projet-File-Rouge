<?php

class Produit_Categorie{

    private $Nom ; 
    private $Prix ; 
    private $id ; 
    private $reference;
    
    public function getId_Produit() {
        return $this->id;
    }
    public function setId_Produit($id) {
        $this->id = $id;
    }
    
    public function getNom_Produit() {
        return $this->Nom;
    }
    public function setNom_Produit($Nom) {
        $this->Nom = $Nom;
    }
    

    public function getPrix() {
        return $this->Prix;
    }
    public function setPrix($Prix) {
        $this->Prix = $Prix;
    }
    public function getReference() {
        return $this->reference;
    }
    public function setReference($reference) {
        $this->reference = $reference;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) {
        $this->Description = $Description;
    }
   
    public function getCategorie_produit() {
        return $this->Categorie;
    }
    public function setCategorie_produit($Categorie) {
        $this->Categorie = $Categorie;
    }


    public function getPhoto(){
        return $this->Photo;
    }
    public function setPhoto($Photo) {
        $this->Photo = $Photo;
    }

   


// categorie   
   
    public function getId_Categorie() {
        return $this->id;
    }
    public function setId_Categorie($id) {
        $this->id = $id;
    }

    public function getNom_Categorie() {
        return $this->Categorie;
    }
    public function setNom_Categorie($Categorie) {
        $this->Categorie = $Categorie;
    }


}