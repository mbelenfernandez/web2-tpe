<?php

class UserModel {
    private $db;

    function __construct() {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    }

    public function getByUsername($usuario) {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE username = ?');
        $query->execute([$usuario]);

        return $query->fetch(PDO::FETCH_OBJ);
    }
}