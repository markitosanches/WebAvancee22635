<?php
echo RequirePage::header('Client Create');
?>
<body>
    <div class="container">
        <form action="client-store.php" method="post">
            <label>Nom
                <input type="text" name="nom">
            </label>
            <label>Adresse
                <input type="text" name="adresse">
            </label>
            <label>Ville
                <select name="ville_id">
                </select>
            </label>
            <label>Phone
                <input type="text" name="phone">
            </label>
            <label>Code Postal
                <input type="text" name="code_postal">
            </label>
            <label>Courriel
                <input type="email" name="courriel">
            </label>
            <input type="submit" value="save">
        </form>
    </div>
</body>
</html>