<?php

class Database
{
    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
        } catch (PDOExpception $e) {
            echo $e->getMessage();
        }
    }
}