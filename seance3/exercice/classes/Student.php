<?php

require_once "Person.php";

class Student extends Person {
    private $idStudent;

    public function __construct($name,$address,$zipCode, $phone, $email, $idStudent ){
      $this->name = $name;
      $this->address = $address;
      $this->zipCode = $zipCode;
      $this->phone = $phone;
      $this->email = $email;
      $this->idStudent = $idStudent;
    }
  }

?>