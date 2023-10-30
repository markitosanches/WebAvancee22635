{{ include('header.php', {title: 'Client Edit'}) }}
<body>
    <div class="container">
        <form action="{{path}}client/update" method="post">
            <input type="hidden" name="id" value="{{ client.id}}">
            <label>Nom
                <input type="text" name="nom" value="{{ client.nom }}">
            </label>
            <label>Adresse
                <input type="text" name="adresse" value="{{ client.adresse }}">
            </label>
            <label>Ville
                <select name="ville_id">
                    <option value="">Selectionner une ville</option>
                    {%  for ville in villes%}
                        <option value="{{ ville.id}}" {% if ville.id == client.ville_id %} selected {% endif %}>{{ ville.ville }}</option>
                    {% endfor %}
                </select>
            </label>
            <label>Phone
                <input type="text" name="phone" value="{{ client.phone }}">
            </label>
            <label>Code Postal
                <input type="text" name="code_postal" value="{{ client.code_postal }}">
            </label>
            <label>Courriel
                <input type="email" name="courriel" value="{{ client.courriel }}">
            </label>
            <input type="submit" value="save" class="btn">
        </form>
    </div>
</body>
</html>