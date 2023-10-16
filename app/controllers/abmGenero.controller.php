<?php
require_once './app/views/abmGenero.view.php';
require_once './app/models/genero.model.php';
require_once './app/helpers/auth.helper.php';
require_once 'templates/show_error.phtml';

class AbmGeneroController
{
    private $model;
    private $view;

    public function __construct()
    {
        AuthHelper::verify();
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
            header('Location: ' . BASE_URL . 'abmGenero');
        } else {
            echo "Error insertando género";
        }
    }

    function removeGeneros($id)
    {
        $existe = $this->model->verifyGeneroCancion($id);

        if ($existe) {
            showError("El género a eliminar está siendo usado por una canción");
        } else {
            $this->model->deleteGenero($id);
            header('Location: ' . BASE_URL . 'abmGenero');
        }
    }

    function editGenero($id)
    {
        $generos = $this->model->getGeneros();
        $this->view->listarGeneros($generos, $id);
    }

    function updateGenero($id)
    {
        if ($_POST) {
            $descripcion = $_POST['descripcion'];

            if (isset($descripcion) && !empty($descripcion)) {
                // $this->view->showError("Debe completar todos los campos");
                $this->model->updateGenero($id, $descripcion);
                header('Location: ' . BASE_URL . 'abmGenero');
            } else {
                echo "error";
            }
        }
    }

    function volver()
    {
        header('Location: ' . BASE_URL . 'abmGenero');
    }
}
