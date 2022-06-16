<?php

class Hotel
{
    private $id_hotels;
    private $nom_hotels;
    private $description;
    private $adresse;
    private $date_expiration;
    private $photo;


    public function getId_hotels()
    {
        return $this->id_hotels;
    }

    public function setId_hotels($id_hotels)
    {
        $this->id_hotels = $id_hotels;
    }

    public function getNom_hotels()
    {
        return $this->nom_hotels;
    }

    public function setNom_hotels($nom_hotels)
    {
        $this->nom_hotels = $nom_hotels;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }


    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    public function getDate_expiration()
    {
        return $this->date_expiration;
    }

    public function setDate_expiration($date_expiration)
    {
        $this->date_expiration = $date_expiration;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }


}






