<?php

class Pages{

    static public $page = 'test'; 

    static public function redirect($url){
        header("location:$url");
    }

}


?>



