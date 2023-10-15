<?php
require_once './app/models/cancion.model.php';
require_once './app/views/cancion.view.php';

class CancionController {
    private $model;
    private $modelGenero;
    private $view;

    public function __construct() {
       $this->model = new CancionModel();
       $this->modelGenero = new GeneroModel();
       $this->view = new CancionView(); 
    }

    function showCanciones(){
        $canciones = $this->model->getCanciones();
        $this->view->showCanciones($canciones);
    }
    
    function showCancion($id){
        $cancion = $this->model->getCancionById($id);
        $this->view->showCancion($cancion);
    }
    
    function filtroCanciones($id_genero){
        $canciones = $this->model->filtroPorCancion($id_genero);
        $genero = $this->modelGenero->getGenero($id_genero);
        // var_dump("generos",$generos); die();
        $this->view->showCanciones($canciones, $genero);
    }
}