<?php

class GeneroModel {
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=web2_tpe;charset=utf8', 'root', '');
    }
}