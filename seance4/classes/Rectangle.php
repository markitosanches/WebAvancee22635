<?php

class Rectangle implements Shapes{
    private $height;
    private $width;

    public function __construct($h, $w){
        $this->height = $h;
        $this->width = $w;
    }

    public function calcArea(){
        return $this->height * $this->width;
    }
}

?>