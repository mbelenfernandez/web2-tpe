<?php
require_once './app/models/deuda.model.php';
require_once './app/views/deuda.view.php';

class GeneroController {
    private $model;
    private $view;

    public function __construct() {
       $this->model = new GeneroModel();
       $this->view = new GeneroView(); 
    }

    function showGenero (){
        $generos = $this->model->getGenero();
        $this->view->showGenero($generos);
    }

    function showCancion (){
        $canciones = $this->model->getCancion();
        $this->view->showCancion($canciones);
    }
}