<?php
require_once('classes/Employee.php');
require_once('classes/Client.php');

$emp = new Employee('Peter', 'Lis');

$emp->setProps(10100, 'Pie Ix');
var_dump($emp);

echo "<br>";

$client = new Client('Annie', 'Lis');
$client->adresse = 'Maisonneuve';

var_dump($client);

?>