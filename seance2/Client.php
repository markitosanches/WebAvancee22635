<?php

class Client{

    private $nom = 'Lisa';
    public $adresse;
    public $phone = '514-777777';
    public $courriel;
    public $naissance;

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }
}


$obj = new Client;

//$obj->nom = "Peter";
// $obj->adresse = "Pie IX";
// $obj->phone = "468-777777";

$obj->setNom('Peter');

var_dump($obj);

//print_r($obj);
echo "<br>";
//echo $obj->nom;
echo $obj->getNom();
echo "<br>";

$obj2  = new Client;

// var_dump($obj2);
?>