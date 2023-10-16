<?php
require_once "./app/controllers/genero.controller.php";
require_once "./app/controllers/cancion.controller.php";
require_once "./app/controllers/abmGenero.controller.php";
require_once "./app/controllers/abmCancion.controller.php";
require_once "./templates/show_error.phtml";
require_once "./app/controllers/auth.controller.php";

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$action = 'generos';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

// generos              ->      GeneroController ->showGenero();
// cancion/:id          ->      CancionController->showCancion($id);
// abmGenero            ->      AbmGeneroController->listarGeneros();
// abmCancion           ->      AbmCancionController->listarCanciones();
// agregarGenero        ->      AbmGeneroController->addGenero();
// eliminarGenero/:id   ->      AbmGeneroController->removeGeneros($id);
// eliminarCancion/:id  ->      AbmCancionController->removeCanciones($id);
// agregarCancion       ->      AbmCancionController->addCancion();
// editarGenero/:id     ->      AbmGeneroController->editGenero($id);
// editarCancion/:id    ->      AbmCancionController->editCancion($id);
// modificarLetra/:id   ->      AbmCancionController->editLetra($id);
// verLetra/:id         ->      AbmCancionController->verLetra($id);
// updateGenero/:id     ->      AbmGeneroController->updateGenero($id);
// updateCancion/:id    ->      AbmCancionController->updateCancion($id);
// updateLetra/:id      ->      AbmCancionController->updateLetra($id);
// canciones/:id        ->      CancionController->canciones($id);
// login                ->      AuthController->showLogin();
// auth                 ->      AuthController->auth();
// logout               ->      AuthController->logout();
// cancion/:id          ->      CancionController->showCancion($id);
// volverAbmCancion     ->      AbmCancionController->volver();
// volverAbmGenero      ->      AbmGeneroController->volver();

$params = explode('/', $action);

switch ($params[0]) {
    case 'generos':
        $controllerGenero = new GeneroController();
        $controllerGenero->showGeneros();
        break;
    case 'abmGenero':
        $controllerAbmGenero = new AbmGeneroController();
        $controllerAbmGenero->showGeneros();
        break;
    case 'abmCancion':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->showCanciones();
        break;
    case 'agregarGenero':
        $controllerAbmGenero = new AbmGeneroController();
        $controllerAbmGenero->addGenero();
        break;
    case 'eliminarGenero':
        $controllerAbmGenero = new AbmGeneroController();
        $controllerAbmGenero->removeGenero($params[1]);
        break;
    case 'eliminarCancion':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->removeCancion($params[1]);
        break;
    case 'agregarCancion':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->addCancion();
        break;
    case 'editarGenero':
        $controllerAbmGenero = new AbmGeneroController();
        $controllerAbmGenero->editGenero($params[1]);
        break;
    case 'editarCancion':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->editCancion($params[1]);
        break;
    case 'modificarLetra':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->editLetra($params[1]);
        break;
    case 'verLetra':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->showLetra($params[1]);
        break;
    case 'updateGenero':
        $controllerAbmGenero = new AbmGeneroController();
        $controllerAbmGenero->updateGenero($params[1]);
        break;
    case 'updateCancion':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->updateCancion($params[1]);
        break;
    case 'updateLetra':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->updateLetra($params[1]);
        break;
    case 'canciones':
        $controllerCancion = new CancionController();
        $controllerCancion->filterCanciones($params[1]);
        break;
    case 'login':
        $controllerAuth = new AuthController();
        $controllerAuth->showLogin();
        break;
    case 'auth':
        $controllerAuth = new AuthController();
        $controllerAuth->auth();
        break;
    case 'logout':
        $controllerAuth = new AuthController();
        $controllerAuth->logout();
        break;
    case 'cancion':
        $controllerCancion = new CancionController();
        $controllerCancion->showCancion($params[1]);
        break;
    case 'volverAbmCancion':
        $controllerAbmCancion = new AbmCancionController();
        $controllerAbmCancion->volver();
        break;
    case 'volverAbmGenero':
        $controllerAbmGenero = new AbmGeneroController();
        $controllerAbmGenero->volver();
        break;
    default:
        showError("404 Page Not Found");
        break;
}