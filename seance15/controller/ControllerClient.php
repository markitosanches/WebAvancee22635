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
       // $ville = new Ville;
       // $insertVille = $ville->insert($_POST);
       // $_POST['ville_id'] = $insertVille;
        $client = new Client;
        $insert = $client->insert($_POST);
        RequirePage::url('client/show/'.$insert);
    }


    public function show($id){
        
        $client = new Client;
        $selectId = $client->selectId($id);
        $ville = new Ville;
        $selectVille = $ville->selectId($selectId['ville_id']);
        return Twig::render('client-show.php', ['client'=>$selectId, 'ville'=>  $selectVille['ville']]);
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

        $client = new Client;
        $update = $client->update($_POST);

        //header('Location: ' . $_SERVER['HTTP_REFERER']);
        RequirePage::url('client/show/'.$_POST['id']);
    }

    public function destroy(){
        //print_r($_POST);
        $client = new Client;
        $update = $client->delete($_POST['id']);
        RequirePage::url('client/index');
    }
}

?>