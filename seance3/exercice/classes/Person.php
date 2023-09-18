<?php

abstract class Person {
    private $name;
    private $address;
    private $zipCode;
    private $phone;
    private $email;

  public function setName($name)
  {
    $this -> name = $name;
  }

  public function setPhone($phone)
  {
    $this -> phone = $phone;
  }
 
  public function getName()
  {
    return $this -> name;
  }
 
  public function getPhone()
  {
    return $this -> phone;
  }
}
?>