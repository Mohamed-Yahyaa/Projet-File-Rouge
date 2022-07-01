<?php
    include "HotelsManager.php";

if(isset($_GET['id'])){
    $id = $_GET['id'] ;

    // Trouver tous les employés depuis la base de données 
    $hotelsManager = new HotelsManager();
    $hotelsManager->Supprimer($id);
        
    header('Location: index.php');
}
?>