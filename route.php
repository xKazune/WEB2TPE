<?php

use controller\GameController;

include_once '.\controller\GameController.php';
include_once 'config.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$db = new PDO('mysql:host=localhost;'.'dbname=tpe_web2;charset=utf8', 'root', '');

$controller = new GameController();

echo "Hello world!";

$controller->home();