<?php
require_once "./app/controllers/genero.controller.php";
require_once "./app/controllers/cancion.controller.php";
require_once "./app/controllers/login.controller.php";
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




// parsea la accion para separar accion real de parametros
$params = explode('/', $action);

switch ($params[0]) {
    case 'generos':
        $controller = new GeneroController();
        $controller->showGenero();
        break;
    case 'canciones':
        $controller = new CancionController();
        $controller->showCanciones();
        break;
    case 'cancion':
        $controller = new CancionController();
        $controller->showCancion(1);
        break;
    case 'login':
        $controller = new LoginController();
        $controller->showLogin();
        break;
    case 'abmGenero':
        $controller = new AbmGeneroController();
        $controller->listarGeneros();
        break;
    case 'abmCancion':
        $controller = new AbmCancionController();
        $controller->listarCanciones();
        break;
    case 'agregarGenero':
        $controller = new AbmGeneroController();
        $controller->addGenero();
        break;
    case 'eliminarGenero':
        $controller = new AbmGeneroController();
        $controller->removeGeneros($params[1]);
        break;
    case 'eliminarCancion':
        $controller = new AbmCancionController();
        $controller->removeCanciones($params[1]);
        break;
    case 'agregarCancion':
        $controller = new AbmCancionController();
        $controller->addCancion();
        break;
    case 'editarGenero':
        $controller = new AbmGeneroController();
        $controller->editGenero($params[1]);
        break;
    case 'updateGenero':
        $controller = new AbmGeneroController();
        $controller->updateGenero($params[1]);
        break;
    case 'canciones':
        $controller = new cancionController();
        // $controller->editGenero($params[1]);
        break;
    default:
        echo "404 Page Not Found";
        break;
}
