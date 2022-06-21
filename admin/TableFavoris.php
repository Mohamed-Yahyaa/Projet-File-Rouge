<?php
 include 'Devis copy.php';
class DevisManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');
           
        return $this->Connection;
        
    }
    
    public function Ajouter($devis){

       $id_favoris =  $devis->getId_favoris();
       $id_hotels =$devis->getId_hotels();
     
       
        // requête SQL
        $insertRow="INSERT INTO favoris(id_favoris,id_hotels) 
                                VALUES('$id_favoris','$id_hotels')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_devis(){
        $SelctRow = 'SELECT id_favoris,id_hotels FROM favoris';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $devis = new Favoris();
            $devis->setId_favoris($value_Data['id_favoris']);
            $devis->setId_hotels($value_Data['id_hotels']);
           
            
            array_push($TableData, $devis);
        }
          return $TableData;
    }

// pour afficher dans input
 

    public function Supprimer($id){
        $RowDelet = "DELETE FROM favoris WHERE id_favoris='$id_favoris'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    

}
?>