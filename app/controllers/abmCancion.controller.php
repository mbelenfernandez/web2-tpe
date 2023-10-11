<?php
require_once './app/views/abmCancion.view.php';
require_once './app/models/cancion.model.php';

class AbmCancionController {
    private $model;
    private $view;

    public function __construct() {
       //AuthHelper::verify();
       $this->view = new AbmCancionView(); 
       $this->model = new CancionModel();

    }

    function listarCanciones (){
        $canciones = $this->model->getCanciones();
        $this->view->listarCanciones($canciones);
    }

    public function addCancion()
    {
        $this->view->showFormCancion();
        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];
        $duracion = $_POST['duracion'];
        $letra = $_POST['letra'];
        $id_genero = $_POST['id_genero'];
        if (empty($titulo) || empty($artista) || empty($duracion) || empty($letra) || empty($id_genero)) {
            echo "Campos incompletos";
            return;
        }

        $id = $this->model->insertCancion($titulo,$artista,$duracion,$letra,$id_genero);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            echo "Error insertando canción";
        }
    }

    function  removeCanciones ($id){
        $this->model->deleteCancion($id);
        header('Location: ' . BASE_URL);
    }
}