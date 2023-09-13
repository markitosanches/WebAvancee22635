<?php


Class Person{
    public $name;
    public $address;
    public $zipCode;
    public $phone;
    public $email;
}

$peter = new Person;
$peter->name = 'Peter';

var_dump($peter);



?>