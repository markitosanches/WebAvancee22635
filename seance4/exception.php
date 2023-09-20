<?php

function divide($dividend, $divisor){
    if($divisor == 0 ){
        throw new Exception('Division by Zero', 404);
    }
    return $dividend/$divisor;
}

try{
    echo divide(5, 0);
}catch(Exception $e){
    echo $e->getMessage()."<br>";
    echo $e->getCode()."<br>";
    echo $e->getFile()."<br>";
    echo $e->getLine()."<br>";
}



?>