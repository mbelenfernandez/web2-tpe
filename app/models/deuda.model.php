<?php

class GeneroModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2_tpe;charset=utf8', 'root', '');
    }

    function getGenero() {
        $query = $this->db->prepare('SELECT * FROM genero');
        $query->execute();
    
        $genero = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $genero;
    }

    function getCancion() {
        $query = $this->db->prepare('SELECT * FROM cancion');
        $query->execute();
    
        $cancion = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $cancion;
    }
}