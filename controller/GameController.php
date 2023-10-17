<?php

namespace controller;

include_once '.\model\GameModel.php';
include_once '.\view\GameView.php';

use model\GameModel;
use view\GameView;

class GameController
{
    private GameModel $gameModel;

    private GameView $gameView;
    function __construct()
    {
        $this->gameModel = new GameModel();
        $this->gameView = new GameView();
    }

    function home() {
        $games = $this->gameModel->getGamesandCompany();
        $compa = $this->gameModel->getCompany();
        $this->gameView->showHome($games, $compa);
    }

    function showHomeLocation(){
        $this->gameView->showHomeLocation();
    }

    function showForm(){
        $company = $this->gameModel->getCompany();
        $this->gameView->showForm($company);
    }
    
    function addGame(){
        $gameName = $_POST ['gameName'];
        $genre = $_POST ['genre'];
        $year = $_POST ['year'];
        $score = $_POST ['score'];
        $company = $_POST ['company'];
        $this->gameModel->insertGame($gameName,$genre,$year,$score,$company);
        $this->gameView->showHomeLocation();
    }

    function addCompany(){
        $companyName = $_POST ['companyName'];
        $this->gameModel->insertCompany($companyName);
        $this->gameView->showHomeLocation();
    }

    function loginUser(){
        $this->gameView->showLogin();
    }
}