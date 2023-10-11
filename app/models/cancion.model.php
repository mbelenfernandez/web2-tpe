<?php

require_once 'config.php'; 

class CancionModel{
    private $db;

    function __construct() {
        $this->db = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);

    }

    function getCanciones() {
        $query = $this->db->prepare('SELECT * FROM cancion');
        $query->execute();
    
        $canciones = $query->fetchAll(PDO::FETCH_OBJ);
    
        return $canciones;
    }

    function getCancionById($id) {
        $query = $this->db->prepare('SELECT * FROM cancion c INNER JOIN genero g ON c.id_genero = g.id_genero WHERE c.id_cancion = ?');
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

    function filtroPorCancion($id){
        $query = $this->db->prepare('SELECT titulo, artista FROM cancion where id_genero=?');
        $query->execute([$id]);
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
}