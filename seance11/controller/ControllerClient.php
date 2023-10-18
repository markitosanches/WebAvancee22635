<?php


class ControllerClient extends controller {
    public function index(){
        return require_once('view/client-index.php');
    }
}

?>