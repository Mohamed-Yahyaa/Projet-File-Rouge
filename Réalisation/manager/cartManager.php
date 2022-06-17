<?php
include "../classe/favorisLine.php";
include "../classe/favoris.php";
include "../classe/hotelsclass.php";


class favorisManager {

    public $name ;

    private $Connection = Null;

    private function getConnection(){
      

            $this->Connection = mysqli_connect('localhost', 'root', '', 'hotels');
           
         
        return $this->Connection;
    }


  public function initCode() {
    if(!isset($_COOKIE['cartCookie']))
    {
        $expire=time() + (86400 * 30);//however long you want
        $cookieId = uniqid();
        setcookie('cartCookie', $cookieId, $expire);
        $_SESSION["hotels"] = array();
        $this->addCartCookie($cookieId);
    }
  }
    
    // Add product to cart
    public function addHotels($favoris, $hotels){
        $favorisId = $favoris->getId();
        $hotelsId = $hotels->getId();
        $sql = "INSERT INTO favoris_Line(idHotels,idFavoris ) VALUES('$hotelsId', '$favorisId')";
        $result = mysqli_query($this->getConnection(), $sql);
        if($result){
            $this->getConnection()->close();
        }

    }

    public function getIdFavoris($id){
        $sql = "SELECT * FROM favoris_Line INNER JOIN hotels on hotels.id_hotels=favoris_Line.idHotels WHERE favoris ='$favorisId'";
        $query = mysqli_query($this->getConnection(), $sql);
        $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
        
       
        $favorisLineList = array();
        foreach($result as $value){
            $hotels = new Hotel();
            $favorisLine = new favorisLine();
            $favorisLine->setIdfavorisLine($value['idfavorisLine']);
            $favorisLine->setIdfavoris($value['idfavoris']);
            $favorisLine->setIdhotels($value['idhotels']);
            
            $hotels->setId_hotels($value['id_hotels']);
            $hotels->setNom_hotels($value['nom_hotels']);
            $hotels->setDescription($value['description']);
            $hotels->setDate_expiration($value["date_expiration"]);
            $hotels->setAdresse($value["adresse"]);
            $hotels->setImage($value["photo"]);   

            $favorisLine->setHotels($hotels);
            array_push($favorisLineList, $favorisLine);
        }
        return $favorisLineList;
    }
    
    // pour ajouter session
    public function set($Favoris, $Hotels){
        session_start();
        $_SESSION["favoris"] = $cart;
        array_push($_SESSION["hotels"], $hotels);
        

    }

      // afficher session

      public function getCartHotels($favorisId){

        $sql = "SELECT * FROM  INNER JOIN hotels on favoris_Line.idFavorisLine = hotels.id_hotels WHERE favoris = $favorisId";
        $query = mysqli_query($this->getConnection(), $sql);
        $result =  mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
        $hotels = new Hotel();
        $hotelsList = array();
        foreach ($result as $value_Data) {
            $hotels->setId_hotels($value_Data['id_hotels']);
            $hotels->setNom_hotels($value_Data['nom_hotel']);
            $hotels->setDescription($value_Data['description']);
            $hotels->setDate_expiration($value_Data["date_expiration"]);
            $hotels->setAdresse($value_Data['adresse']);
            $hotels->setImage($value_Data['photo']);
            array_push($hotelsList, $hotels);
        }
          return $hotelsList;
        // if(isset($_SESSION["product"])){
        //     return $_SESSION["product"];
        // }

      }
      public function Hotels(){

        $sql = "SELECT * FROM  hotels ";
        $query = mysqli_query($this->getConnection(), $sql);
        $result =  mysqli_fetch_all($query, MYSQLI_ASSOC);
        return $result;
        $hotels = new Hotel();
        $hotelsList = array();
        foreach ($result as $value_Data) {
            $hotels = new Hotel();

            $hotels->setId_hotels($value_Data['id_hotels']);
            $hotels->setNom_hotels($value_Data['nom_hotels']);
            $hotels->setDescription($value_Data['description']);
            $hotels->setDate_expiration($value_Data["date_expiration"]);
            $hotels->setAdresse($value_Data['adresse']);
            $hotels->setImage($value_Data['photo']);
            array_push($hotelsList, $hotels);
        }
          return $hotelsList;
        // if(isset($_SESSION["product"])){
        //     return $_SESSION["product"];
        // }

      }

    //   public function getCartQuantity(){
    //       if(isset($_SESSION["quantity"])){
    //           return $_SESSION["quantity"];
    //       }
    //   }

          //supprimer session
    public function delete($id){
        if(isset($_SESSION["favoris"]["hotels"][$id])){
            unset($_SESSION["favoris"]["hotels"][$id]);
        }
    }

    
    // pour afficher  session 
    public function getHotelsCart($favorisLineId){
        $sql = "SELECT * FROM favoris_Line INNER JOIN hotels on favoris_Line.idHotels = produit.id_produit WHERE favorisLine = $favorisLineId";
        $query = mysqli_query($this->getConnection(),$sql);
        $result = mysqli_fetch_assoc($query);

        $favorisLine = new favorisLine();
        $favorisLine->setIdfavorisLine($result['idfavorisLine']);
        $favorisLine->setIdfavoris($result['idfavoris']);
        $favorisLine->setIdhotels($result['idhotels']);
        
        $hotels = new Hotel();
        $hotels->setId_hotels($result['id_hotels']);
        $hotels->setNom_hotels($result['nom_hotels']);
        $hotels->setDescription($result['description']);
        $hotels->setDate_expiration($result["date_expiration"]);
        $hotels->setAdresse($result["adresse"]);
        $hotels->setImage($result["photo"]);  

        $favorisLine->setHotels($hotels);

        return $favorisLine;
    }

    // Edit  cart line
    // public function editCartLine($idCartLine, $quantity){
    //     $sql = "UPDATE cart_line SET productCartQuantity = '$quantity' WHERE idCartLine=$idCartLine";
    //     mysqli_query($this->getConnection(), $sql);
        
    // }

  
  

// afficher  les produits : page index
    
// public function getAllHotels(){
    
   
//     $query = mysqli_query($this->getConnection() ,$SelctRow);
//     $hotels_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
//     $TableData = array();
//     foreach ( $hotels_data as $value_Data) {
              
                
//                 $hotels = new Hotel();

//                 $hotels->setId_hotels($value_Data['id_hotels']);
//                 $hotels->setNom_hotels($value_Data['nom_hotel']);
//                 $hotels->setDescription($value_Data['description']);
//                 $hotels->setDate_expiration($value_Data["date_expiration"]);
//                 $hotels->setAdresse($value_Data['adresse']);
//                 $hotels->setImage($value_Data['photo']);
              
//                 array_push($TableData, $hotels);
               
//             }
         
         
//                return $TableData;
// }
 
        
// afficher  les produits : page panier

        public function afficherHotels($id){
           
            $query = mysqli_query($this->getConnection() ,$SelctRow);
            $hotels_data = mysqli_fetch_all($query, MYSQLI_ASSOC);
            $hotels = new Hotel();

            
            foreach ($hotels_data as $value) {
                $hotels->setId_hotels($value['id_hotels']);
                $hotels->setNom_hotels($value['nom_hotel']);
                $hotels->setDescription($value['description']);
                $hotels->setDate_expiration($value["date_expiration"]);
                $hotels->setAdresse($value['adresse']);
                $hotels->setImage($value['photo']);
               
            }
              return $hotels;
        }
      
 

        function compteur(){ 
        if(isset($_SESSION["favoris"]) != null){
                $compteur = count($_SESSION["favoris"]["hotels"]) ;
            
            }else {
                $compteur = 0;
            
            }
            return $compteur;
        }

        function addCartCookie($cookie){
            $sql = "INSERT INTO favoris(userReference) VALUES('$cookie')";
            mysqli_query($this->getConnection(), $sql);
        }

        function getFvoris($userRefe){
            $sql = "SELECT * from favoris WHERE userReference = '$userRefe'";
            $query = mysqli_query($this->getConnection(), $sql);
            $result = mysqli_fetch_assoc($query);

            
            $favoris = new favoris();
            $favoris->setId($result["id"]);
            $favoris->setUserReference($result["userReference"]);

            $favorisLine = $this->getCartLine($cart->getId());
            $favoris->setIdfavorisLine($favorisLine);
            return $favoris;
        }

        function getHotelsfavorisLine($id){
            $sql =  "SELECT * FROM hotels
            INNER JOIN favoris_Line ON favoris_Line.idFavorisLine = hotels.id_hotels WHERE idFavorisLine = '$id' ";
            $query = mysqli_query($this->getConnection(), $sql);
            $result = mysqli_fetch_assoc($query);
            $hotels = new Hotel();
            $hotels->setId_hotels($result['id_hotels']);
            $hotels->setNom_hotels($result['nom_hotels']);
            $hotels->setDescription($result['description']);
            $hotels->setDate_expiration($result["date_expiration"]);
            $hotels->setAdresse($result["adresse"]);
            $hotels->setImage($result["photo"]);  
            
            return $hotels;
        }


        function deleteFavorisLine($id){
            $sql = "DELETE FROM favoris_Line WHERE idFavorisLine  = '$id'";
            mysqli_query($this->getConnection(), $sql);

        }
    }