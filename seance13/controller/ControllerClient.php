<?php

RequirePage::model('CRUD');
RequirePage::model('Client');
RequirePage::model('Ville');

class ControllerClient extends controller {
    public function index(){

        $client = new Client;
        $select = $client->select();
       // print_r($select);
        $view = new View('client-index');
        $view->output('clients', $select);
        // $view->output('name', 'Peter');
        // $view->output('address', 'Pie Ix');

    }

    public function create(){

        $ville = new Ville;
        $selectVilles = $ville->select('ville');
        // print_r($selectVilles);
        // die();
        $view = new View('client-create');
        $view->output('villes', $selectVilles);
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
        $view = new View('client-show');
        $view->output('client', $selectId);

    }

    public function edit($id){
        $client = new Client;
        $selectId = $client->selectId($id);
        $ville = new Ville;
        $selectVilles = $ville->select('ville');
        $view = new View('client-edit');
        $view->output('client', $selectId);
        $view->output('villes', $selectVilles);
    }
}

?>