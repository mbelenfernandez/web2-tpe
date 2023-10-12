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

    function editCancion($id){
        $canciones = $this->model->getCanciones();
        $this->view->listarCanciones($canciones, $id);
    }

    function editLetra($id){
        $canciones = $this->model->getCanciones();
        $this->view->editarLetra($canciones, $id);
    }

    function verLetra($id){
        $cancion = $this->model->getCancionById($id);
        $this->view->listarLetra($cancion, $id);
    }

    function updateCancion($id){
        if ($_POST) {
            $titulo = $_POST['titulo'];
            $artista = $_POST['artista'];
            $duracion = $_POST['duracion'];

            if ((isset($titulo) && !empty($titulo)) && (isset($artista) && !empty($artista)) && (isset($duracion) && !empty($duracion))) {
                // $this->view->showError("Debe completar todos los campos");
                $this->model->updateCancion($id, $titulo, $artista, $duracion);
                header('Location: ' . BASE_URL . 'abmCancion');
            } else {
                echo "error";
            }
        }
    }

    function updateLetra($id){
        if ($_POST) {
            $letra = $_POST['letra'];

            if (isset($letra) && !empty($letra)) {
                // $this->view->showError("Debe completar todos los campos");
                $this->model->updateLetra($id, $letra);
                header('Location: ' . BASE_URL . 'verLetra/' . $id);
            } else {
                echo "error";
            }
        }
    }

    function volver (){
        header('Location: ' . BASE_URL . 'abmCancion');
    }
}