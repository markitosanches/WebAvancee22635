{{ include('header.php', {title: 'Client List'}) }}
<body>
    <div class="container">
        <h1>Client</h1>
        <table>
            <tr>
                <th>Nom</th>
                <th>Adresse</th>
                <th>Phone</th>
                <th>Courriel</th>
                <th>Delete</th>
            </tr>
            {% for client in clients %}
                <tr>
                    <td><a href="{{path}}client/show/{{ client.id}}">{{ client.nom }}</a></td>
                    <td>{{ client.adresse }}</td>
                    <td>{{ client.phone }}</td>
                    <td>{{ client.courriel }}</td>
                    <td>
                        <form action="{{path}}client/destroy">
                            <input type="hidden" name="id" value="{{client.id}}">
                            <input type="submit" value="Delete" class="btn-danger">
                        </form>
                    </td>
                </tr>
            {% endfor %}
        </table>
        <br><br>
        <a href="{{path}}client/create" class="btn">Ajouter</a>
    </div>
    
</body>
</html>