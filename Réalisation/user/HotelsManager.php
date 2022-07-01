<?php
 include 'user.php';
class HotelsManager{

    private $Connection = Null;

    private function getConnection(){
      
            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');
           
        return $this->Connection;
        
    }
    
    public function Ajouter($hotels){

       $nom =  $hotels->getNom();
       $email =$hotels->getEmail();
       $password= $hotels->getPassword();
       
       
        // requête SQL
        $insertRow="INSERT INTO user(Nom,Email,`Password`) 
                                VALUES('$nom','$email','$password')";

        mysqli_query($this->getConnection(), $insertRow);
    }

    

    public function afficher_devis(){
        $SelctRow = 'SELECT id,Nom,Email,`Password` FROM user';
        $query = mysqli_query($this->getConnection() ,$SelctRow);
        $data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $TableData = array();
        foreach ($data as $value_Data) {
            $devis = new User();
            $devis->setId($value_Data['id']);
            $devis->setNom($value_Data['Nom']);
            $devis->setEmail($value_Data['Email']);
            $devis->setPassword($value_Data['Password']);
           
            
            array_push($TableData, $devis);
        }
          return $TableData;
    }

// pour afficher dans input
  
    public function Supprimer($id){
        $RowDelet = "DELETE FROM user WHERE id='$id'";
        mysqli_query($this->getConnection(), $RowDelet);
    }

    // public function Modifier($id,$Nom_Hotel,$Description,$Photo,$Adress){
    //     // Requête SQL
    //     $RowUpdate = "UPDATE Hotels SET 
    //     Nom_Hotel='$Nom_Hotel', Description='$Description', Photo='$Photo',Adress='$Adress'
    //     WHERE id='$id'";

    //     mysqli_query($this->getConnection(),$RowUpdate);

    // }

}
?>