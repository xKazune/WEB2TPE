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
        $games = $this->gameModel->getGames();
        $this->gameView->showHome($games);
    }
}