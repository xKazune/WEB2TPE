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
        $select= $this->db->prepare("SELECT * FROM games");
        $select->execute();
        $games = $select->fetchAll(PDO::FETCH_OBJ);
        return $games;
    }

    function getGamesandCompany() {
        $select= $this->db->prepare("SELECT * FROM games INNER JOIN company ON games.company_ID = company.company_ID;");
        $select->execute();
        $games = $select->fetchAll(PDO::FETCH_OBJ);
        return $games;
    }

    // FUNCIONA PARA OBTENER LOS DATOS DE LAS COMPAÑIAS
    function getCompany() {
        $select= $this->db->prepare("SELECT * FROM company");
        $select->execute();
        $company = $select->fetchAll(PDO::FETCH_OBJ);
        return $company;
    }
    
    function insertGame($gameName, $genre, $year, $score, $company) {
        $select= $this->db->prepare('INSERT INTO games (game_ID, game_name, genre, year, score, company_ID) VALUES (NULL,?,?,?,?,?)');
        $select->execute([$gameName, $genre, $year, $score, $company]);
    }
    
    function insertCompany($companyName){
        $select= $this->db->prepare('INSERT INTO company(company_ID, company_name) VALUES (NULL,?)');
        $select->execute([$companyName]);
    }
}