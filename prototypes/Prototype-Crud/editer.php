<?php

include "HotelsManager.php";
$HotelsManager = new HotelsManager();
//afficher dans input
if(isset($_GET['id'])){
    $afficherValue = $HotelsManager->edit($_GET['id']);
}
// modifier les donnes
if(!empty($_POST)){
     
    
    $Nom_Hotel=  $_POST['Nom_Hotel'];
	$Description =   $_POST['Description'];
       $Photo= $_POST['Photo'];
      $Adress=  $_POST['Adress'];
	
        $HotelsManager->Ajouter($hoteel);
    $Date_de_naissance = $_POST['Date_de_naissance'];
    $HotelsManager->Modifier($id,$Nom_Hotel,$Description,$Photo,$Adress);
    header('Location: index.php');
}
?>

<body>
<form action="" method="POST">                                                          

Nom: <input type="text" name="Nom_Hotel" >
	Description : <input type="text" name="Description" >
	Photo: <input type=""  name="Photo" >
	Adress: <input type=""  name="Adress" >
<button type="submit">modifier</button>
</form>
</body>
