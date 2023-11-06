<?php
RequirePage::model('CRUD');
RequirePage::model('User');
RequirePage::model('Privilege');
RequirePage::library('Validation');

class ControllerUser extends controller {

    public function index(){
        $user = new user;
        $select = $user->select('username');
        
        $privilege = new Privilege;
        $i=0;
        foreach($select as $user){
             $selectId = $privilege->selectId($user['privilege_id']);
             $select[$i]['privilege']= $selectId['privilege'];
             $i++;
        }
        return Twig::render('user/index.php', ['users'=>$select]);
    }

    public function create(){
        return Twig::render('user/create.php');
    }

    public function store(){
        $validation = new Validation;
        extract($_POST);
        $validation->name('utilisateur')->value($username)->max(50)->required()->pattern('email');
        $validation->name('mot de passe')->value($password)->max(20)->min(6);

        if(!$validation->isSuccess()){
            // var_dump($validation->getErrors());
            $errors =  $validation->displayErrors();
            //echo $errors;
         return Twig::render('user/create.php', ['errors' =>$errors]);
         exit();
        }

        $user = new user;

        $options = [
            'cost' => 10
        ];
        $salt = "H3@_l?a";
        $passwordSalt = $_POST['password'].$salt;
        $_POST['password'] =  password_hash($passwordSalt, PASSWORD_BCRYPT, $options);
        
        $insert = $user->insert($_POST);

        return $insert;
    }


}


?>