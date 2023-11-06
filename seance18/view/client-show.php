{{ include('header.php', {title: 'Client Show'}) }}
<body>
    <div class="container">
        <h1>Details du client</h1>

        <p><strong>Nom:</strong> {{ client.nom }}</p>
        <p><strong>Adresse:</strong> {{ client.adresse }}</p>
        <p><strong>Phone:</strong> {{ client.phone }}</p>
        <p><strong>Courriel:</strong> {{ client.courriel }}</p>
        <p><strong>Ville:</strong> {{ ville }}</p>
        <a href="{{path}}client/edit/{{ client.id }}" class="btn">Modifier</a>
    </div>
</body>
</html>