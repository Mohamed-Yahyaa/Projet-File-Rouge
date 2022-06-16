<?php
include '../manager/cartManager.php';



$cartManager = new favorisManager ();

$cartManager->initCode();

if(isset($_POST['id'])){

    $id=$_POST['id'];
    $favorisLine = new favorisLine();
    $favoris = new favoris();
   

    $favoris = $cartManager->getCart($_COOKIE['cartCookie']);

    $hotels = $cartManager->afficherHotels($id);
    
    $favorisLine->setIdfavoris($favoris->getId());

    $favorisLine = $favoris->getgetIdfavorisLine()[0];
  
        // foreach($favorisLineList as $favorisLine){
        //     $quantityTotal += $cartLine->getProductCartQuantity();
        // }
    
    $cartManager->addHotels($favoris, $hotels);
    

    $cartManager->set($favoris, $hotels);

    header("location: index.php");

}
