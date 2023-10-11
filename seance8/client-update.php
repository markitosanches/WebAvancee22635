<?php

if($_SERVER['REQUEST_METHOD'] != 'POST'){
    header('location:client-index.php');
    exit;
}
require_once('bd/connex.php');

//print_r($_POST);

foreach($_POST as $key => $value){
    $$key=$value;
}

$sql = "UPDATE client SET nom = ?, adresse = ?, phone = ?, code_postal = ?, courriel = ? WHERE id = ?";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($nom, $adresse, $phone, $code_postal, $courriel, $id))){
    header('location:client-index.php');
}else{
    print_r($stmt->errorInfo());
}



?>