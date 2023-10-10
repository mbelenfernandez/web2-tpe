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

    function  removeGeneros ($id){
        $this->model->deleteGenero($id);
        header('Location: ' . BASE_URL);
    }

    function editGenero($id){
        $this->view->showFormEditGenero();

        if ((!empty($_POST))) {
            $descripcion = $_POST['descripcion'];
            $id = $_POST['id_genero']; // O de donde provenga el valor de $id

            
            if (empty($descripcion)) {
                // $this->view->showError("Debe completar todos los campos");
                echo"Error";
                return;
            }

            $ok = $this->model->updateGenero($id, $descripcion);
    
            if ($ok) {
                // redirigo la usuario a la pantalla principal
                header('Location: ' . BASE_URL);
            } else {
                // $this->view->showerror("Error al insertar la deuda");
                echo"errorrrr";
            }
        }
    }
}
