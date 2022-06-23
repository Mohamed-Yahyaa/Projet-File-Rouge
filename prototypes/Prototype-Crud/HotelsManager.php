<?php
 include 'hotels.php';
class HotelsManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'yahya');
           
         
       
        
        return $this->Connection;
        
    }
    
    public function Ajouter($hotel){

     $nom =  $hotel->setNom_Hotel();
       $description =$hotel->setDescription ();
       $photo= $hotel->setPhoto();
       $address= $hotel->setAdress();
        // requête SQL
        $insertRow="INSERT INTO hotel (`Nom_Hotel`, `Description`, `Photo`, `Adress`) 
                                VALUES('$nom', '$description', '$photo','$address')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_hotels(){
        $SelctRow = 'SELECT Id, Nom_Hotel,`Description`,Photo,Adress FROM Hotels';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $hotel = new Hotels();
            $hotel->setId($value_Data['Id']);
            $hotel->setNom_Hotel($value_Data['Nom_Hotel']);
            $hotel->setDescription ($value_Data['Description']);
            $hotel->setPhoto($value_Data['Photo']);
            $hotel->setAdress($value_Data['Adress']);
            array_push($TableData, $hotel);
        }
          return $TableData;
    }

// pour afficher dans input
    public function edit($id){
        $SelectRowId = "SELECT * FROM Hotels WHERE id= $id";
        $result = mysqli_query($this->getConnection(),  $SelectRowId);
        // Récupère une ligne de résultat sous forme de tableau associatif
        $value_Data = mysqli_fetch_assoc($result);
        $hotel = new Hotels();
        $hotel->setId($value_Data['Id']);
        $hotel->setNom_Hotel($value_Data['Nom_Hotel']);
        $hotel->setDescription ($value_Data['Description']);
        $hotel->setPhoto($value_Data['Photo']);
        $hotel->setAdress($value_Data['Adress']);
        
        return $hotel;
    }

    public function Supprimer($id){
        $RowDelet = "DELETE FROM Hotels WHERE id= '$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$nom,$prenom,$date_de_naissance){
        // Requête SQL
        $RowUpdate = "UPDATE personnes SET 
        Nom='$nom', Prenom='$prenom', Date_de_naissance='$date_de_naissance'
        WHERE id=$id";

        mysqli_query($this->getConnection(),$RowUpdate);

    }

}
?>