<?php

class ControllerHome extends Controller {

    public function index(){
        return 'Hello';
    }

    public function error($e){
        return 'error '.$e;
    }

}

?>