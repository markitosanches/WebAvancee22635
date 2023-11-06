<?php

class User extends CRUD {

    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $fillable = ['username', 'password'];

    
}

?>