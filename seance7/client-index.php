<?php
require_once('bd/connex.php');
$sql = "SELECT * FROM client";
$stmt = $pdo->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de client</title>
</head>
<body>
    <h1>Client</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Phone</th>
            <th>Courriel</th>
        </tr>

        <?php
        foreach($stmt as $row){
        ?>

            <tr>
                <td><a href="client-show.php?id=<?= $row['id']?>"><?= $row['nom']?></a></td>
                <td><?= $row['adresse']?></td>
                <td><?= $row['phone']?></td>
                <td><?= $row['courriel']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br><br>
    <a href="client-create.php">Ajouter</a>
    
</body>
</html>