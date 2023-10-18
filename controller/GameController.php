<?php

namespace controller;

include_once '.\model\GameModel.php';
include_once '.\view\View.php';

use helpers\Helper;
use model\GameModel;
use view\View;

class GameController
{
    private GameModel $gameModel;

    private View $View;
    function __construct()
    {
        $this->gameModel = new GameModel();
        $this->View = new View();
    }

    function showAdminPanel($games, $compa){

        if(Helper::isLogged())
            $this->View->showAdminPanel($games, $compa);
    }

    function showGamePanel(){
        if(Helper::isLogged())
            $this->View->showGamePanel();
    }

    function home() {
        $games = $this->gameModel->getGamesandCompany();
        $compa = $this->gameModel->getCompany();
        $this->View->showHome($games, $compa);
    }
    function homeAdmin() {
        $games = $this->gameModel->getGamesandCompany();
        $compa = $this->gameModel->getCompany();
        $this->View->showHomeAdmin($games, $compa);
    }

    function showForm(){
        $company = $this->gameModel->getCompany();
        $this->View->showForm($company);
    }
    
    function addGame(){
        $gameName = $_POST ['gameName'];
        $genre = $_POST ['genre'];
        $year = $_POST ['year'];
        $score = $_POST ['score'];
        $company = $_POST ['company'];
        $this->gameModel->insertGame($gameName,$genre,$year,$score,$company);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function addCompany(){
        $companyName = $_POST ['companyName'];
        $this->gameModel->insertCompany($companyName);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function deleteGame($id){
        $this->gameModel->deleteGame($id);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function deleteCompany($id){
        $this->gameModel->deleteCompany($id);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function showGameEditForm($id){
        $this->View->showGameEditForm($id);
    }

    function editGame(){
        $game_ID = $_POST ['game_ID'];
        $gameName = $_POST ['gameName'];
        $genre = $_POST ['genre'];
        $year = $_POST ['year'];
        $score = $_POST ['score'];

        $this->gameModel->editGame($game_ID,$gameName, $genre, $year, $score);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function showCompanyEditForm($id){
        $this->View->showEditCompany($id);
    }

    function editCompany(){
        $company_ID = $_POST ['company_ID'];
        $companyName = $_POST ['companyName'];
        $this->gameModel->editCompany($company_ID, $companyName);
        header('Location: ' . BASE_URL . 'adminPanel');
    }

    function login(){
        $this->View->showLogin();
    }
    
    function loginUser(){
        $username = $_POST ['username'];
        $password = $_POST ['password'];
        $user = $this->gameModel->getUserByName($username);
        if (isset($user)){
            if (password_verify($password , $user[0]['password'])){
                session_start();
                $_SESSION['username'] = $username;
                header('Location: ' . BASE_URL . 'adminPanel');
            }
            else
                $this->View->showLogin();
        }
    }
}