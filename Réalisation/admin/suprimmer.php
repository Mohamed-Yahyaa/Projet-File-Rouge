<?php
    include "DevisManager.php";

if(isset($_GET['id'])){
    $id = $_GET['id'] ;

    // Trouver tous les employés depuis la base de données 
    $devisManager = new DevisManager();
    $devisManager->Supprimer($id);
        
    header('Location: index.php');
}
?>