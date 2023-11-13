{{ include('header.php', {title: 'Client Create'}) }}
<body>
    <div class="container">
        <form action="{{path}}client/store" method="post">
            <label>Nom
                <input type="text" name="nom">
            </label>
            <label>Adresse
                <input type="text" name="adresse">
            </label>
            <label>Ville
                <input type="text" name="ville">
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
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>