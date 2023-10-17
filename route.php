<?php

use controller\GameController;

include_once './controller/GameController.php';
include_once 'config.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$controller = new GameController();

$action = 'home'; // acción por defecto si no envían
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

$params = explode('/', $action);

switch ($params[0]){
    case 'home':
        $controller->showHomeLocation();
        break;
    case 'listar':
        $controller->home();
        break;
    case 'agregarJuego':
        $controller->addGame();
        break;
    case 'agregarCompania':
        $controller->addCompany();
        break;
    case 'formulario':
        $controller->showForm();
        break;
    case 'login':
        $controller->login();
        break;
    case 'loguear':
        $controller->loginUser();
        break;
    default:
        echo "404 Page Not Found";
        break;
}
?>