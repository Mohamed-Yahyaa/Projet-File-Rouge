<?php
    include "gestion.php";

if(isset($_GET['id'])){

    // Trouver tous les employés depuis la base de données 
    $gestion = new Gestion();
    $id = $_GET['id'] ;
    $gestion->SupprimerCategorie($id);

    header('Location: Table.php');
}