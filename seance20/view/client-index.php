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
                <th>Ville</th>
                {% if guest==false%}
                    <th>Delete</th>
                {% endif %}
            </tr>
            {% for client in clients %}
                <tr>
                    <td><a href="{{path}}client/show/{{ client.id}}">{{ client.nom }}</a></td>
                    <td>{{ client.adresse }}</td>
                    <td>{{ client.phone }}</td>
                    <td>{{ client.courriel }}</td>
                    <td>{{client.ville}}</td>
                    {% if guest==false%}
                    <td>
                        <form action="{{path}}client/destroy" method="post">
                            <input type="hidden" name="id" value="{{client.id}}">
                            <input type="submit" value="Delete" class="btn-danger" {% if session.privilege != 1 %} disabled {% endif %}>
                        </form>
                    </td>
                    {% endif %}
                </tr>
            {% endfor %}
        </table>
        <br><br>
        {% if session.privilege == 1 or session.privilege == 2  %}
        <a href="{{path}}client/create" class="btn">Ajouter</a>
        {% endif %}
    </div>
    
</body>
</html>