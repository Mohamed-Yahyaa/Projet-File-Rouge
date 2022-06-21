<?php

class Favoris{
    private $Id_favoris;
    private $Id_hotels;
   
  
    
    public function getId_favoris() {
        return $this->Id_favoris;
    }
    public function setId_favoris($id_favoris) {
        $this->Id_favoris = $id_favoris;
    }

    public function getId_hotels() {
        return $this->Id_hotels;
    }
    public function setId_hotels($id_hotels) {
        $this->Id_hotels = $id_hotels;
    }
 
}
     
?>