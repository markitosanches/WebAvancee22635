{{ include('header.php', {title: 'User Create'}) }}
<body>
    <div class="container">
        <form action="{{path}}user/store" method="post">
            <span class="text-danger">{{ errors | raw }}</span>
            <label>Utilisateur
                <input type="text" name="username" value="">
            </label>
            <label>Mot de passe
                <input type="password" name="password" value="">
            </label>
            <input type="submit" value="sauvegarder" class="btn">
        </form>
    </div>
</body>
</html>