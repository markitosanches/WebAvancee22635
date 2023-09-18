<?php

require_once 'classes/Student.php';
require_once 'classes/Teacher.php';

$student = new Student();
$student -> setName('Lisa');
$student -> setPhone('514-777-88888');

$teacher = new Teacher();
$teacher -> setName('Peter');
$teacher -> setPhone('514-999-88888');

echo "Student Name: ".$student -> getName();
echo "<br>Student Phone: ".$student -> getPhone();

echo "<br>Teacher Name:".$teacher -> getName();
echo "<br>Teacher Phone:".$teacher -> getPhone();


?>