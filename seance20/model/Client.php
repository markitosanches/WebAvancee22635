<?php

class Client extends CRUD {

    protected $table = 'client';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom', 'adresse', 'phone', 'code_postal', 'courriel', 'ville_id'];

    public function clientVille(){
        $sql = "SELECT client.*, ville FROM $this->table INNER JOIN ville ON ville.id = ville_id";
        $stmt = $this->query($sql);
        $clientVille = $stmt->fetchAll();
        return $clientVille;
    }
}

?>