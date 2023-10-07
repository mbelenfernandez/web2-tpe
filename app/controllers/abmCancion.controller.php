<?php
require_once './app/views/abmCancion.view.php';
require_once './app/models/cancion.model.php';

class AbmCancionController {
    private $model;
    private $view;

    public function __construct() {
       $this->view = new AbmCancionView(); 
       $this->model = new CancionModel();

    }

    function listarCanciones (){
        $canciones = $this->model->getCanciones();
        $this->view->listarCanciones($canciones);
    }
}