<?php
 include 'Favoris.php';
class FavorisManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');
           
        return $this->Connection;
        
    }
    
    public function Ajouter($favoris){

       $id_hotels =$favoris->getId_hotels();
     
       
        // requête SQL
        $insertRow="INSERT INTO favoris(id_hotel) 
                                VALUES('$id_hotels')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_Favoris(){
        $SelctRow = 'SELECT * FROM `favoris`
         INNER JOIN hotels ON favoris.id_hotel = hotels.id ';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $favoris = new Favoris();
            $favoris->setId_favoris($value_Data['id_favoris']);
            $favoris->setId_hotels($value_Data['id']);
            $favoris->setNom_Hotel($value_Data['Nom_Hotel']);
            $favoris->setDescription($value_Data['Description']);
            $favoris->setPhoto($value_Data['Photo']);
            $favoris->setAdress($value_Data['Adress']);
            
            array_push($TableData, $favoris);
        }
          return $TableData;
          
    }

// pour afficher dans input
 

    public function Supprimer($id){
        $RowDelet = "DELETE FROM favoris WHERE id_favoris='$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    

}
?>