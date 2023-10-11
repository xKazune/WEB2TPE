<?php

namespace model;

use PDO;

class GameModel
{
    private $db;
    function __construct() //instanciamos conexion con la base de datos
    {
        $this->db = new PDO('mysql:host=localhost;'.'dbname='.DB_NAME.';charset=utf8', DB_USER_NAME, DB_PASSWORD);
    }

    function getGames() {
        $sentencia= $this->db->prepare("SELECT * FROM games");
        $sentencia->execute();
        $ciudades = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $ciudades;
    }
}