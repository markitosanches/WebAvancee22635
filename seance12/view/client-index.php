<?php
echo RequirePage::header('Client');
?>
<body>
    <div class="container">
        <h1>Client</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Phone</th>
                <th>Courriel</th>
            </tr>

            <?php
            foreach($clients as $row){
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
        <a href="client-create.php" class="btn">Ajouter</a>
    </div>
    
</body>
</html>