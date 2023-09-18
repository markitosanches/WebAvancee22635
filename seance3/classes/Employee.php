<?php

require_once('Person.php');


class Employee extends Person{
    public $salaire;
    public $poste;
    public $numero;


    public function setProps($salaire, $adresse){
        $this->salaire = $salaire;
        $this->adresse = $adresse;
    }


}


?>