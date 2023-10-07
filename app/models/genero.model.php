<?php

class GeneroModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2_tpe;charset=utf8', 'root', '');
    }

    function getGeneros() {
        $query = $this->db->prepare('SELECT * FROM genero');
        $query->execute();
    
        $generos = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $generos;
    }

    function insertGenero($descripcion) {
        $query = $this->db->prepare('INSERT INTO genero (descripcion) VALUES(?)');
        $query->execute([$descripcion]);
        return $this->db->lastInsertId();
    }

    function deleteGenero($id) {
        $query = $this->db->prepare('DELETE genero WHERE id_genero=?');
        $query->execute([$id]);
    }

    function updateGenero($id, $descripcion) {
        $query = $this->db->prepare('UPDATE genero SET descripcion = ? WHERE id_genero=?');
        $query->execute([$descripcion,$id]);
    }
}