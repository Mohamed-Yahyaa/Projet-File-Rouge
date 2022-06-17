<?php
 include 'produit-categorie.php';
class Gestion{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');         
       
        
        return $this->Connection;
        
    }
    
 

    
    public function afficher(){
        $SelctRow = 'SELECT * FROM hotels
         INNER JOIN favoris ON hotels.id_hotels = favoris.idHotels';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $TableData = array();
        foreach ( $produits_data as $value_Data) {
                  
                   
                   $produit = new Produit_Categorie();
                   $produit->setId_Produit($value_Data['id_produit']);   
                   $produit->setNom_Produit($value_Data['nom_produit']);   
                   $produit->setDescription($value_Data['description']); 
                   $produit->setReference($value_Data['reference']);        
                       
                   array_push($TableData, $produit);
                   
                }
             
             
                   return $TableData;
    }
    //Afficher produit
    public function AjouterProduit($produit){
        
       $idProduit = $produit->getId_Produit () ;   
       $Nom_produit =  $produit->getNom_Produit();   
       $Description = $produit->getDescription();   
       $Reference = $produit->getReference();
       $Categorie_produit = $produit->getCategorie_produit();   
       $photo = $produit->getPhoto();    
        // requête SQL
        $insertRow="INSERT INTO produit(`id_produit`, `nom_produit`,  `description`,`reference`,   `categorie_produit`,photo) 
                      VALUES('$idProduit', '$Nom_produit' , '$Description'  ,'$Reference', '$Categorie_produit','$photo')";

        mysqli_query($this->getConnection(), $insertRow);
    }




    public function upload_photo($fileName, $tempname){

        $folder = '../img/'.$fileName;
        move_uploaded_file($tempname, $folder);
    } 

    //afficher categorie
    public function afficherCategorie(){

            $SelctRow = 'SELECT * FROM categorie';                 
                   $query = mysqli_query($this->getConnection() ,$SelctRow);
                   $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
                   $TableData = array();
                   foreach ( $produits_data as $value_Data) {
                    $produit = new Produit_Categorie();
                    $produit->setId_Categorie($value_Data['id_categorie']);
                    $produit->setNom_Categorie($value_Data["nom_categorie"]); 
                    array_push($TableData, $produit);
                }
                return $TableData;   
    }

    // afficher modification
    public function afficherProduit($id){
        $SelctRow = "SELECT * FROM produit                                                                                                            
        INNER JOIN categorie  ON produit.categorie_produit = categorie.id_categorie WHERE  produit.id_produit = '$id'  " ;
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $produits_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
        $TableData = array();
        foreach ( $produits_data as $value_Data) {
                  
                   
                   $produit = new Produit_Categorie();
                   $produit->setId_Produit($value_Data['id_produit']); 
                   $produit->setNom_Produit($value_Data['nom_produit']);   
                   $produit->setDescription($value_Data['description']);
                   $produit->setReference($value_Data['reference']);         
                   $produit->setCategorie_produit($value_Data["categorie_produit"]);   
                   $produit->setNom_Categorie($value_Data["nom_categorie"]);  
                   $produit->setPhoto($value_Data["photo"]);  
                   array_push($TableData, $produit);
                   
                }
                   return $TableData;
    }

    // modifier

    public function Modifier($produit){
        // Requête SQL


        $id = $produit->getId_Produit() ;   
        $Prix = $produit->getPrix();   
        $Nom_produit =  $produit->getNom_Produit();   
        $Description = $produit->getDescription();   
        $Reference = $produit->getReference();
        $photo = $produit->getPhoto(); 

        $RowUpdate = "UPDATE produit SET 
        nom_produit='$Nom_produit', `description`= '$Description',`reference`= '$Reference', photo='$photo' WHERE  id_produit = $id" ;

        mysqli_query($this->getConnection(),$RowUpdate);
    }
    // suprimmer
    public function Supprimer($id){
        $RowDelet = "DELETE FROM produit WHERE nom_produit= 'kolabi'";
        mysqli_query($this->getConnection(), $RowDelet);
    
    }
    // ajouter categorie

    public function ajouterCategorie($categorie){

         $Nom_categorie = $categorie->getNom_Categorie();    
         // requête SQL
         $insertRow="INSERT INTO categorie(`nom_categorie`) 
                       VALUES('$Nom_categorie')";
 
         mysqli_query($this->getConnection(), $insertRow);
             
    }
    // suprimmer categorie
    public function SupprimerCategorie($id){
        $RowDelet = "DELETE FROM categorie WHERE id_categorie= '$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    
    }

}