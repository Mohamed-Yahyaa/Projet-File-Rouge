<?php
 include 'hotels.php';
class HotelsManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');
           
        return $this->Connection;
        
    }
    
    public function Ajouter($hotels){

       $nom =  $hotels->getNom_Hotel();
       $description = htmlspecialchars($hotels->getDescription());
       $photo= $hotels->getPhoto();
       $adress= $hotels->getAdress();
       
        // requête SQL
        $insertRow="INSERT INTO hotels(Nom_Hotel,`Description`,Photo,Adress) 
                                VALUES('$nom','$description','$photo','$adress')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_devis(){
        $SelctRow = 'SELECT id,Nom_Hotel,Photo,Adress,`Description` FROM hotels';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $hotels = new Hotels();
            $hotels->setId($value_Data['id']);
            $hotels->setNom_Hotel($value_Data['Nom_Hotel']);
            $hotels->setDescription($value_Data['Description']);
            $hotels->setPhoto($value_Data['Photo']);
            $hotels->setAdress($value_Data['Adress']);
            
            array_push($TableData, $hotels);
        }
          return $TableData;
    }



    public function Supprimer($id){
        $RowDelet = "DELETE FROM Hotels WHERE id='$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

  

}
?>