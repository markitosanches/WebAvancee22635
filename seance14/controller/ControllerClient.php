<?php

RequirePage::model('CRUD');
RequirePage::model('Client');
RequirePage::model('Ville');

class ControllerClient extends controller {
    public function index(){

        $client = new Client;
        $select = $client->select();
        return Twig::render('client-index.php', ['clients'=>$select]);

    }

    public function create(){

        $ville = new Ville;
        $selectVilles = $ville->select('ville');
        return Twig::render('client-create.php', ['villes'=>$selectVilles]);
    }

    public function store(){
        //print_r($_POST);
        $client = new client;
        $insert = $client->insert($_POST);

        RequirePage::url('client/show/'.$insert);
    }


    public function show($id){
        
        $client = new Client;
        $selectId = $client->selectId($id);
        return Twig::render('client-show.php', ['client'=>$selectId]);
    }

    public function edit($id){
        $client = new Client;
        $selectId = $client->selectId($id);
        $ville = new Ville;
        $selectVilles = $ville->select('ville');
        return Twig::render('client-edit.php', ['client'=>$selectId, 
                                'villes'=>$selectVilles]);
    }
    public function update(){
        print_r($_POST);
    }
}

?>