<?php
require_once './app/models/cancion.model.php';
require_once './app/views/cancion.view.php';

class CancionController {
    private $model;
    private $view;

    public function __construct() {
       $this->model = new CancionModel();
       $this->view = new CancionView(); 
    }

    function showCanciones($filtro = null){
        $canciones = $this->model->getCanciones();

        if($filtro){
            $canciones = [];
            $canciones = $filtro;
        }

        $this->view->showCanciones($canciones);
    }

    function showCancion($id){
        $cancion = $this->model->getCancionById($id);
        $this->view->showCancion($cancion);
    }

    function filtroCanciones($id){
        $canciones = $this->model->filtroPorCancion($id);
        $this->showCanciones($canciones);
    }
}