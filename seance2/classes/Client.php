<?php

class Client{

    private $nom = 'Lisa';
    public $adresse;
    public $phone = '514-777777';
    public $courriel;
    public $naissance;

    private function setNom($nom){
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setProp($nom, $adresse = null, $phone = null){
        $this->setNom($nom);
        $this->adresse = $adresse;
        $this->phone = $phone;
    }

    public function getProp(){
        return "Salut $this->nom<br>
                Adresse: $this->adresse<br>
                Phone: $this->phone";
    }

}

?>