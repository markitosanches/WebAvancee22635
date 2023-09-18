<?php

class Livre{
    public $isbn;
    public $titre;
    public $date;
    public $genre;
    public $prix;
    public $description;
    public $cout;
    public $marge;


    public function __construct(){
        $this->titre = 'ABC';
        $this->description = 'blablabablabal';
        $this->prix = 20;
        $this->cout = 5;
        //$this->calculMarge();
    }
    public function calculMarge(){
        $this->marge = $this->prix - $this->cout;
    }

    public function __destruct(){
        echo "Livre: $this->titre <br> 
                Description: $this->description <br> 
                Prix: $this->prix <br> 
                Cout: $this->cout <br> 
                Marge: $this->marge <br> 
        ";
    }
}




?>