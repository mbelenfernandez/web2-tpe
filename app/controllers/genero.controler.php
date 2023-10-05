<?php
include_once './app/models/genero.model.php';
include_once './app/views/genero.view.php';

class GeneroController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new GeneroModel();
        $this->view = new GeneroView();
    }

    function showGenero() {
        $this->view->showGenero();
    }
}