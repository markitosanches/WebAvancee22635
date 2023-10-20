<?php

RequirePage::model('CRUD');
RequirePage::model('Client');

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
        $view = new View('client-create');
    }

    public function store(){
        echo 'Store client';
    }
}

?>