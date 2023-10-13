<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('client', $_POST);

header("location:client-show.php?id=$insert");

?>