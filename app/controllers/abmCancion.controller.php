<?php
require_once './app/views/abmCancion.view.php';
require_once './app/models/cancion.model.php';
require_once './app/helpers/auth.helper.php';
require_once './templates/show_error.phtml';

class AbmCancionController
{
    private $model;
    private $modelGenero;
    private $view;

    public function __construct()
    {
        AuthHelper::verify();
        $this->view = new AbmCancionView();
        $this->model = new CancionModel();
        $this->modelGenero = new GeneroModel();
    }

    function showCanciones()
    {
        $canciones = $this->model->getCanciones();
        $generos = $this->modelGenero->getGeneros();
        $this->view->showCanciones($canciones, $generos);
    }

    public function addCancion()
    {
        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];
        $duracion = $_POST['duracion'];
        $letra = $_POST['letra'];
        $id_genero = $_POST['id_genero'];

        if (empty($titulo) || empty($artista) || empty($duracion) || empty($letra) || empty($id_genero)) {
            showError("Campos incompletos");
            return;
        }

        $id = $this->model->insertCancion($titulo, $artista, $duracion, $letra, $id_genero);
        if ($id) {
            header('Location: ' . BASE_URL . 'abmCancion');
        } else {
            echo "Error insertando canción";
        }
    }

    function  removeCancion($id)
    {
        $this->model->deleteCancion($id);
        header('Location: ' . BASE_URL . 'abmCancion');
    }

    function showEditCancion($id)
    {
        $canciones = $this->model->getCanciones();
        $generos = $this->modelGenero->getGeneros();
        $this->view->showCanciones($canciones, $generos, $id);
    }

    function editLetra($id)
    {
        $canciones = $this->model->getCanciones();
        $this->view->editLetra($canciones, $id, "No se pudo acceder a la propiedad del arreglo");
    }

    function showLetra($id)
    {
        $cancion = $this->model->getCancionById($id);
        $this->view->showLetra($cancion, $id);
    }

    function updateCancion($id_cancion)
    {
        if ($_POST) {
            $titulo = $_POST['titulo'];
            $artista = $_POST['artista'];
            $duracion = $_POST['duracion'];
            $id_genero = $_POST['id_genero'];
            if ((isset($titulo) && !empty($titulo)) && (isset($artista) && !empty($artista)) && (isset($duracion) && !empty($duracion)) && (isset($id_genero) && !empty($id_genero))) {
                $this->model->updateCancion($id_cancion, $titulo, $artista, $duracion, $id_genero);
                header('Location: ' . BASE_URL . 'abmCancion');
            } else {
                echo "error actualizando cancion";
            }
        }
    }

    function updateLetra($id)
    {
        if ($_POST) {
            $letra = $_POST['letra'];

            if (isset($letra) && !empty($letra)) {
                $this->model->updateLetra($id, $letra);
                header('Location: ' . BASE_URL . 'verLetra/' . $id);
            } else {
                echo "error";
            }
        }
    }

    function volver()
    {
        header('Location: ' . BASE_URL . 'abmCancion');
    }
}
