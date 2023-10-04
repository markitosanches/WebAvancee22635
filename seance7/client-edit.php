<?php

if(isset($_GET['id']) && $_GET['id']!=null ){
    $id= $_GET['id'];

    require_once('bd/connex.php');
    $sql = "SELECT * FROM client WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array($id));

    $count = $stmt->rowCount();
    // echo $count;
    // die();
    if($count == 1){
        $client = $stmt->fetch();

        //print_r($client);
    
        //echo $client['nom'];
        foreach($client as $key => $value){
            $$key = $value;
        }
    }else{
        header('location:client-index.php');
    }

}else{
    header('location:client-index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creer un client</title>
    <style>
        input{
            display: block;
            margin: 5px;
        }
    </style>
</head>
<body>
    <h1>Client Edit</h1>
    <form action="client-update.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <label>Nom
            <input type="text" name="nom" value="<?= $nom; ?>">
        </label>
        <label>Adresse
            <input type="text" name="adresse"  value="<?= $adresse; ?>">
        </label>
        <label>Phone
            <input type="text" name="phone"  value="<?= $phone; ?>">
        </label>
        <label>Code Postal
            <input type="text" name="code_postal"  value="<?= $code_postal; ?>">
        </label>
        <label>Courriel
            <input type="email" name="courriel"  value="<?= $courriel; ?>">
        </label>
        <input type="submit" value="save">
    </form>
    
</body>
</html>