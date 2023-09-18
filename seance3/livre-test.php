<?php

require_once('classes/Livre.php');

//$obj = new Livre;
//$obj->titre = 'Harry Porter';

//$obj->setProp('HP', 'blabla', 10, 4);

//echo $obj->getProp();

//var_dump($obj);


$obj = new Livre;
$obj->calculMarge();
$obj->date= '2010-10-10';

//echo $obj->getProp();
//var_dump($obj);

?>