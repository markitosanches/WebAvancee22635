<?php

require_once('classes/Shapes.php');
require_once('classes/Circle.php');
require_once('classes/Rectangle.php');


//$shape = new Shapes;


$circle = new Circle(2);
echo $circle->calcArea();

//var_dump($circle);

echo "<br>";

$rectangle = new Rectangle(10, 4);
echo $rectangle->calcArea();

//var_dump($rectangle);
?>