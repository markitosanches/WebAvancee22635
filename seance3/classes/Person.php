<?php

abstract class Person {

    public $nom;
    public $prenom;
    protected $adresse;
    public $naissance;
    public $age;

    public function __construct($nom = null, $prenom = null){
        //constante magique
       // echo __CLASS__."<br>".__FILE__."<br>".__LINE__."<br>".__METHOD__;
       $this->nom = $nom;
       $this->prenom = $prenom;

    }

    public function setProp($nom){
        $this->nom = $nom;
    }

    
}


?>