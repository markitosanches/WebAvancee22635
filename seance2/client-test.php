<?php
require_once('classes/Client.php');

$obj = new Client;
//$obj->nom = "Peter";
// $obj->adresse = "Pie IX";
// $obj->phone = "468-777777";
//$obj->setNom('Peter');

$obj->setProp('Lisa', 'Pie Ix', '514777');

//var_dump($obj);
//print_r($obj);
echo "<br>";
//echo $obj->nom;
//echo $obj->getNom();
echo $obj->getProp();
echo "<br>";

//$obj2  = new Client;

// var_dump($obj2);

?>