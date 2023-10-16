<?php
require_once './app/models/cancion.model.php';
require_once './app/views/cancion.view.php';

class CancionController
{
    private $model;
    private $modelGenero;
    private $view;

    public function __construct()
    {
        $this->model = new CancionModel();
        $this->modelGenero = new GeneroModel();
        $this->view = new CancionView();
    }

    function showCanciones()
    {
        $canciones = $this->model->getCanciones();
        $this->view->showCanciones($canciones);
    }

    function showCancion($id)
    {
        $cancion = $this->model->getCancionById($id);
        $this->view->showCancion($cancion);
    }

    function filterCanciones($id_genero = NULL)
    {
        if ($id_genero) {
            $canciones = $this->model->getCancionByGenero($id_genero);
            $genero = $this->modelGenero->getGenero($id_genero);
            $this->view->showCanciones($canciones, $genero);
        } else {
            $canciones = $this->model->getCanciones();
            $genero = "Todos";
            $this->view->showCanciones($canciones,$genero);
        }

    }
}
