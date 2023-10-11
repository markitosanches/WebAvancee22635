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
    <title>client</title>
</head>
<body>
    <h1>Client</h1>
    <p><strong>Nom: </strong><?= $nom; ?></p>
    <p><strong>Adresse: </strong><?= $adresse; ?></p>
    <p><strong>Phone: </strong><?= $phone; ?></p>
    <p><strong>Courriel: </strong><?= $courriel; ?></p>
    <a href="client-edit.php?id=<?= $id; ?>">Edit</a>
    <form action="client-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
        <br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>