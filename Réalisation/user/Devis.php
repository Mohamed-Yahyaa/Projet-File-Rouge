<?php

class User{
    private $Id;
    private $Nom;
    private $Email;
    private $Password;
    
    
    public function getId() {
        return $this->Id;
    }
    public function setId($id) {
        $this->Id = $id;
    }

    public function getNom() {
        return $this->Nom;
    }
    public function setNom($nom) {
        $this->Nom = $nom;
    }

    public function getEmail() {
        return $this->Email;
    }
    public function setEmail($email) {
        $this->Email = $email;
    }

    public function getPassword() {
        return $this->Password;
    }
    public function setPassword($password) {
        $this->Password = $password;
    }

  
}
     
?>