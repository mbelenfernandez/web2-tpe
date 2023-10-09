<?php

class CancionModel{
    private $db;

    function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2_tpe;charset=utf8', 'root', '');
    }

    function getCanciones() {
        $query = $this->db->prepare('SELECT * FROM cancion');
        $query->execute();
    
        $canciones = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $canciones;
    }

    function getCancionById($id) {
        $query = $this->db->prepare('SELECT * FROM cancion WHERE id_cancion = ?');
        $query->execute([$id]);
    
        $cancion = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $cancion;
    }

    function insertCancion($titulo,$artista,$duracion,$letra,$id_genero) {
        $query = $this->db->prepare('INSERT INTO cancion (titulo, artista, duracion, letra, id_genero) VALUES(?,?,?,?,?)');
        $query->execute([$titulo,$artista,$duracion,$letra,$id_genero]);
        return $this->db->lastInsertId();
    }

    function deleteCancion($id) {
        $query = $this->db->prepare('DELETE FROM cancion WHERE id_cancion=?');
        $query->execute([$id]);
    }
}