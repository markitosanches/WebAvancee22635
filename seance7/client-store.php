<?php
require_once('bd/connex.php');
// print_r($_POST);
// echo "<br>";

// $_POST =Array ( [nom] => Peter [adresse] => pie [phone] => 5644 [code_postal] => h1h1h1 [courriel] => peter@gmail.com ) 

foreach($_POST as $key => $value){
    $$key=$value;
}

// echo $adresse;
// $a = 'b';
// $b = 'Test variable B';
// echo $b;

$sql = "INSERT INTO client (nom, adresse, phone, code_postal, courriel) VALUES (?,?,?,?,?)";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($nom, $adresse, $phone, $code_postal, $courriel))){
    $id = $pdo->lastInsertId();
   header('location:client-show.php?id='.$id);
}else{
    print_r($stmt->errorInfo());
}




?>