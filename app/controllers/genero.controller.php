<?php
require_once './app/models/genero.model.php';
require_once './app/views/genero.view.php';

class GeneroController {
    private $model;
    private $view;

    public function __construct() {
       $this->model = new GeneroModel();
       $this->view = new GeneroView(); 
    }

    function showGenero (){
        $generos = $this->model->getGeneros();
        $this->view->showGenero($generos);
    }

    function filtroGenero($id){
        $canciones = $this->model->filtroPorGenero($id);
        $this->view->showCanciones($canciones);
    }
}