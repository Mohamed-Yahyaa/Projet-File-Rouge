<?php
    include "FavorisManager.php";

if(isset($_GET['id'])){
    $id = $_GET['id'] ;

    // Trouver tous les employés depuis la base de données 
    $hotelsManager = new FavorisManager();
    $hotelsManager->Supprimer($id);
        
    header('Location:listFavorise.php');
}
?>