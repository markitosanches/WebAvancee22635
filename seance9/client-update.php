<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$update = $crud->update('client', $_POST);



?>