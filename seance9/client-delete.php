<?php
require_once('class/CRUD.php');

$crud = new CRUD;
$delete = $crud->delete('client', $_POST['id']);

?>