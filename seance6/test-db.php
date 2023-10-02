<?php
require_once('bd/connex.php');
$sql = "Select * from ecommerce.produit";

$stmt = $pdo->query($sql);
//var_dump($stmt);

$produit = $stmt->fetchAll();


var_dump($produit);
echo "<br>";
print_r($produit);
echo "<br>";
echo $produit[0]['nom'];


?>