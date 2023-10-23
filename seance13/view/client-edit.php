<?php
echo RequirePage::header('Client Edit');
?>
<body>
    <div class="container">
        <form action="./store" method="post">
            <label>Nom
                <input type="text" name="nom" value="<?= $client['nom']?>">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="<?= $client['adresse']?>">
            </label>
            <label>Ville
                <select name="ville_id">
                    <option value="">Selectionner une ville</option>
                    <?php
                    foreach($villes as $row){
                        ?>
                        <option value="<?= $row['id'];?>" <?php if($client['ville_id'] == $row['id']) { echo "selected"; }?>><?= $row['ville'];?></option>
                        <?php
                    }
                    ?>
                </select>
            </label>
            <label>Phone
                <input type="text" name="phone" value="<?= $client['phone']?>">
            </label>
            <label>Code Postal
                <input type="text" name="code_postal" value="<?= $client['code_postal']?>">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="<?= $client['courriel']?>">
            </label>
            <input type="submit" value="save">
        </form>
    </div>
</body>
</html>