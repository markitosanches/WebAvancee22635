<?php

RequirePage::model('CRUD');
RequirePage::model('Client');
RequirePage::model('Ville');
RequirePage::library('Validation');


class ControllerClient extends controller {
    public function index(){

        $client = new Client;
        $selectVille = $client-> clientVille();
//      $select = $client->select();
        return Twig::render('client-index.php', ['clients'=> $selectVille]);

    }

    public function create(){
        CheckSession::sessionAuth();
        if($_SESSION['privilege'] == 1 || $_SESSION['privilege'] == 2){
        $ville = new Ville;
        $selectVilles = $ville->select('ville');
        return Twig::render('client-create.php', ['villes'=>$selectVilles]);
        }
        RequirePage::url('login'); 
        }

    public function store(){
       // $ville = new Ville;
       // $insertVille = $ville->insert($_POST);
       // $_POST['ville_id'] = $insertVille;

       $validation = new Validation;
       extract($_POST);
       $validation->name('nom')->value($nom)->max(45)->min(3);
       $validation->name('adresse')->value($adresse)->max(45);
       $validation->name('phone')->value($phone)->max(20);
       $validation->name('ville')->value($ville_id)->pattern('int');
       $validation->name('code postal')->value($code_postal)->max(10);
       $validation->name('courriel')->value($courriel)->max(45)->pattern('email');


       if(!$validation->isSuccess()){
           // var_dump($validation->getErrors());
           $ville = new Ville;
           $selectVilles = $ville->select('ville');
           $errors =  $validation->displayErrors();
        return Twig::render('client-create.php', ['villes'=>$selectVilles,'errors' =>$errors, 'client' => $_POST]);
        exit();
       }

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
        //print_r($_POST);

        
       $validation = new Validation;
       extract($_POST);
       $validation->name('nom')->value($nom)->max(45)->min(3);
       $validation->name('adresse')->value($adresse)->max(45);
       $validation->name('phone')->value($phone)->max(20);
       $validation->name('ville')->value($ville_id)->pattern('int');
       $validation->name('code postal')->value($code_postal)->max(10);
       $validation->name('courriel')->value($courriel)->max(45)->pattern('email');


       if(!$validation->isSuccess()){
           // var_dump($validation->getErrors());
           $ville = new Ville;
           $selectVilles = $ville->select('ville');
           $errors =  $validation->displayErrors();
        return Twig::render('client-edit.php', ['villes'=>$selectVilles,'errors' =>$errors, 'client' => $_POST]);
        exit();
       }
        
        $client = new Client;
        $update = $client->update($_POST);

        //header('Location: ' . $_SERVER['HTTP_REFERER']);
        RequirePage::url('client/show/'.$_POST['id']);
    }

    public function destroy(){
        CheckSession::sessionAuth();
        if($_SESSION['privilege'] == 1){
            //print_r($_POST);
            $client = new Client;
            $update = $client->delete($_POST['id']);
            RequirePage::url('client/index');
        }else{
            RequirePage::url('login');
        }
        
    }
}

?>