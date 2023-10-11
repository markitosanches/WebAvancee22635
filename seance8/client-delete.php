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
//$id = $_POST['id'];

$sql = "DELETE FROM client WHERE id = ?";

$stmt = $pdo->prepare($sql);
if($stmt->execute(array($id))){
    header('location:client-index.php');
}else{
    print_r($stmt->errorInfo());
}



?>