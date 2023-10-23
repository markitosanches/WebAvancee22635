<?php
echo RequirePage::header('Details du client');
?>
<body>
    <div class="container">
        <h1>Details du client</h1>

        <p><strong>Nom:</strong> <?= $client['nom']; ?></p>
        <p><strong>Adresse:</strong> <?= $client['adresse']; ?></p>
        <p><strong>Phone:</strong> <?= $client['phone']; ?></p>
        <p><strong>Courriel:</strong> <?= $client['courriel']; ?></p>
        <a href="" class="btn">Modifier</a>
    </div>
</body>
</html>