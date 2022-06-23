<?php

include "HotelsManager.php";
// include "Hotels.php";
// Trouver tous les employés depuis la base de données 
$HotelsManager = new HotelsManager();


if(!empty($_POST)){
	$hoteel = new Hotels;
	
	$hoteel->setNom_Hotel($_POST['Nom_Hotel']);
	$hoteel->setDescription ($_POST['Description']);
	$hoteel->setPhoto($_POST['Photo']);
	$hoteel->setAdress($_POST['Adress']);
	$HotelsManager->Ajouter($hoteel);
	
	// Redirection vers la page index.php
	header("Location: index.php");
}


?>

<form action="" method="POST">                                                          
	Nom: <input type="text" name="Nom_Hotel" >
	Description : <input type="text" name="Description" >
	Photo: <input type=""  name="Photo" >
	Adress: <input type=""  name="Adress" >
   
<button type="submit">ajouter</button>
</form>