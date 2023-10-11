<?php
namespace view;

use Smarty;

include_once "libs/smarty/smarty/libs/Smarty.class.php";

class GameView
{
    private Smarty $smarty;

    function __construct () {
        $this->smarty = new Smarty();
    }
    function showHome ($games) {
        $this->smarty->assign('games',$games);
        $this->smarty->display('./templates/home.tpl');
    }
}