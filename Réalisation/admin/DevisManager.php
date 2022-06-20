<?php
 include 'Devis.php';
class DevisManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');
           
        return $this->Connection;
        
    }
    
    public function Ajouter($devis){

       $nom =  $devis->getNom_Hotel();
       $description =$devis->getDescription();
       $photo= $devis->getPhoto();
       $adress= $devis->getAdress();
       
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
            $devis = new Hotels();
            $devis->setId($value_Data['id']);
            $devis->setNom_Hotel($value_Data['Nom_Hotel']);
            $devis->setDescription($value_Data['Description']);
            $devis->setPhoto($value_Data['Photo']);
            $devis->setAdress($value_Data['Adress']);
            
            array_push($TableData, $devis);
        }
          return $TableData;
    }

// pour afficher dans input
    public function edit($id){
        $SelectRowId = "SELECT * FROM Hotels WHERE Id= $id";
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
        $RowDelet = "DELETE FROM Hotels WHERE id='$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    public function Modifier($id,$Nom_Hotel,$Description,$Photo,$Adress){
        // Requête SQL
        $RowUpdate = "UPDATE Hotels SET 
        Nom_Hotel='$Nom_Hotel', Description='$Description', Photo='$Photo',Adress='$Adress'
        WHERE id='$id'";

        mysqli_query($this->getConnection(),$RowUpdate);

    }

}
?>