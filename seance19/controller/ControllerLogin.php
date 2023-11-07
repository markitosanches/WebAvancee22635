<?php

RequirePage::model('CRUD');
RequirePage::model('User');
RequirePage::library('Validation');

class ControllerLogin extends controller {

    public function index(){
        Twig::render('auth/index.php');
    }

    public function auth(){
        $validation = new Validation;
        extract($_POST);
        $validation->name('utilisateur')->value($username)->max(50)->required()->pattern('email');
        $validation->name('mot de passe')->value($password)->max(20)->min(6);

        if(!$validation->isSuccess()){
            $errors =  $validation->displayErrors();
         return Twig::render('auth/index.php', ['errors' =>$errors,  'user' => $_POST]);
         exit();
        }

        $user= new User;
        $sql = "SELECT * FROM user WHERE username = ?";

        $stmt = $user->prepare($sql);
        $stmt->execute(array($_POST['username']));

        $count = $stmt->rowCount();

        if($count === 1){
            $salt = "H3@_l?a";
            $saltPassword = $_POST['password'].$salt;
            //echo $saltPassword;
            $info_user = $stmt->fetch();
           // echo $info_user['password'];
            
            if(password_verify($saltPassword, $info_user['password'])){
                //session
                session_regenerate_id();
                $_SESSION['user_id'] = $info_user['id'];
                $_SESSION['username'] = $info_user['username'];
                $_SESSION['privilege'] = $info_user['privilege_id'];
                $_SESSION['fingerPrint'] = md5($_SERVER['HTTP_USER_AGENT'].$_SERVER['REMOTE_ADDR']);

                RequirePage::url('client');

            }else{
                $errors = "<ul><li>Verifier le mot de passe</li></ul>";
                return Twig::render('auth/index.php', ['errors' =>$errors,  'user' => $_POST]); 
            }

        }else{
            $errors = "<ul><li>Verifier le username</li></ul>";
            return Twig::render('auth/index.php', ['errors' =>$errors,  'user' => $_POST]); 
        }
    }

    public function logout(){
        session_destroy();
        RequirePage::url('login');
    }
}


?>