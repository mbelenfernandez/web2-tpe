<?php
require_once "./app/controllers/genero.controller.php";
require_once "./app/controllers/cancion.controller.php";
require_once "./app/controllers/auth.controller.php";
require_once "./app/controllers/abmGenero.controller.php";
require_once "./app/controllers/abmCancion.controller.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'generos'; // accion por defecto
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// generos       ->  showGenero();
// canciones     ->  showCancion();
// abmGeneros    ->  listarGeneros();
// abmCancion    ->  listarCanciones();
// agregar       ->  addGenero();
// eliminar/:ID  ->  removeGenero($id); 
// editar/:ID    ->  editGenero($id);

$controllerGenero = new GeneroController();
$controllerCancion = new CancionController();
$controllerAbmGenero = new AbmGeneroController();
$controllerAbmCancion = new AbmCancionController();
$controllerAuth= new AuthController();

// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'generos':
        $controllerGenero->showGenero();
        break;
    case 'canciones':
        $controllerCancion->showCanciones();
        break;
    case 'cancion':
        $controllerCancion->showCancion(1);
        break;
    case 'abmGenero':
        $controllerAbmGenero->listarGeneros();
        break;
    case 'abmCancion':
        $controllerAbmCancion->listarCanciones();
        break;
    case 'agregarGenero':
        $controllerAbmGenero->addGenero();
        break;
    case 'eliminarGenero':
        $controllerAbmGenero->removeGeneros($params[1]);
        break;
    case 'eliminarCancion':
        $controllerAbmCancion->removeCanciones($params[1]);
        break;
    case 'agregarCancion':
        $controllerAbmCancion->addCancion();
        break;
    case 'editarGenero':
        $controllerAbmGenero->editGenero($params[1]);
        break;
    case 'updateGenero':
        $controllerAbmGenero->updateGenero($params[1]);
        break;
    case 'filtroCanciones':
        $controllerCancion->filtroCanciones($params[1]);
        break;
    case 'login':
        $controllerAuth->showLogin(); 
        break;
    case 'auth':
        $controllerAuth->auth();
        break;
    case 'logout':
        $controllerAuth->logout();
        break;   
    default:
        echo "404 Page Not Found";
        break;
}
