<?php

abstract class CRUD extends PDO {

    public function __construct(){
        parent::__construct('mysql:host=localhost; dbname=ecommerce; port=3306; charset=utf8', 'root', '');
    }

    public function select($field='id', $order='ASC'){
        $sql="SELECT * FROM $this->table ORDER BY $field $order";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($value){
        $sql="SELECT * FROM $this->table WHERE $this->primaryKey = '$value'";
        $stmt = $this->query($sql);
        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
          RequirePage::url('home/error/404');
        }  
    }

    public function insert($data){

        $nomChamp = implode(", ",array_keys($data));
        $valeurChamp = ":".implode(", :", array_keys($data));

        $sql = "INSERT INTO $this->table ($nomChamp) VALUES ($valeurChamp)";
        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();

        return $this->lastInsertId();

    }

    public function delete($table, $value, $field = 'id'){

        $sql = "DELETE FROM $table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$field", $value);
        $stmt->execute();
        header('location:client-index.php');
    }

    public function update($table, $data, $field='id'){
      
        $queryField = null;
        foreach($data as $key=>$value){
            $queryField .="$key =:$key, ";
        }
        $queryField = rtrim($queryField, ", ");
        
        $sql = "UPDATE $table SET $queryField WHERE $field = :$field";

        $stmt = $this->prepare($sql);
        foreach($data as $key => $value){
            $stmt->bindValue(":$key", $value);
        }
        $stmt->execute();

        header('Location: ' . $_SERVER['HTTP_REFERER']);

    }




}


?>