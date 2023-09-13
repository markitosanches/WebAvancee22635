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


    public function setProp($titre, $description, $prix, $cout){
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->cout = $cout;
        $this->calculMarge();
    }
    private function calculMarge(){
        $this->marge = $this->prix - $this->cout;
    }

    public function getProp(){
        return "Livre: $this->titre <br> 
                Description: $this->description <br> 
                Prix: $this->prix <br> 
                Cout: $this->cout <br> 
                Marge: $this->marge <br> 
        ";
    }

}




?>