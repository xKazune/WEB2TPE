<?php

use controller\GameController;

require_once "./helpers/helper.php";
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
    case 'adminPanel':
        $controller->homeAdmin();
        break;
    case 'gamePanel':
        $controller->showGamePanel();
        break;
    case 'deleteGame':
        $controller->deleteGame($params[1]);
        break;
    case 'deleteCompany':
        $controller->deleteCompany($params[1]);
        break;
    case 'showEditGame':
        $controller->showGameEditForm($params[1]);
        break;
    case 'editGame':
        $controller->editGame();
        break;
    case 'showEditCompany':
        $controller->showCompanyEditForm($params[1]);
        break;
    case 'editCompany':
        $controller->editCompany();
        break;




    default:
        echo "404 Page Not Found";
        break;
}
?>