<?php
require_once "./app/controllers/deuda.controller.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'listar'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// listar    ->    showDeuda();
// agregar   ->    addDeuda();
// eliminar/:ID  -> removeDeuda($id); 
// finalizar/:ID  -> finishDeuda($id);

// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'listar':
        $controller = new GeneroController();
        $controller->showGenero();
        break;
    case 'canciones':
        $controller = new GeneroController();
        $controller->showCancion();
        break;
    default:
        echo "404 Page Not Found";
        break;
}
