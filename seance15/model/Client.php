<?php

class Client extends CRUD {

    protected $table = 'client';
    protected $primaryKey = 'id';

    protected $fillable = ['id', 'nom', 'adresse', 'phone', 'code_postal', 'courriel', 'ville_id'];

}

?>