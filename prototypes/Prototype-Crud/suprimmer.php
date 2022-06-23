<?php
    include "HotelsManager.php";

if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
    $HotelsManager = new HotelsManager();
    $id = $_GET['id'] ;
    $HotelsManager->Supprimer($id);
        
    header('Location: index.php');
}
?>