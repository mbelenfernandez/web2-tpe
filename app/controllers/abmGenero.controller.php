<?php
require_once './app/views/abmGenero.view.php';
require_once './app/models/genero.model.php';

class AbmGeneroController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->view = new AbmGeneroView();
        $this->model = new GeneroModel();
    }

    function listarGeneros()
    {
        $generos = $this->model->getGeneros();
        $this->view->listarGeneros($generos);
    }

    public function addGenero()
    {
        $this->view->showFormGenero();
        $descripcion = $_POST['descripcion'];
        if (empty($descripcion)) {
            echo "Campos incompletos";
            return;
        }

        $id = $this->model->insertGenero($descripcion);
        if ($id) {
            header('Location: ' . BASE_URL);
        } else {
            echo "Error insertando género";
        }
    }
}
