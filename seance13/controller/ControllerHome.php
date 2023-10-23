<?php

class ControllerHome extends Controller {

    public function index(){
       $view = new view('home');
    }

    public function error($e = null){
        return 'error '.$e;
    }

}

?>