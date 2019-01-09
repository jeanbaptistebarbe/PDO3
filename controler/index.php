<?php
//Instenciation de l'objet clients. 
//$client devient une instance de la classe clients.
//la methode magique construct est appelée automatiquement 
//grace au mot clé new.
$clients= new clients();
$clientListLimit20=$clients->getClientListLimit20();
?>

