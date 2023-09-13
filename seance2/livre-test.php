<?php

require_once('classes/Livre.php');


$livre = new Livre;
$livre->setProp('Harry Porter', 'bla bla bla', 10, 4);


//$livre->calculMarge();

//var_dump($livre);

echo $livre->getProp();

?>