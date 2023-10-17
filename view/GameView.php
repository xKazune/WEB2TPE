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

    function showHome ($games,$compa) {
        $this->smarty->assign('games',$games);
        $this->smarty->assign('compa', $compa);
        $this->smarty->display('./templates/home.tpl');
    }

    function showHomeLocation(){
        $this->smarty->display('./templates/header.tpl');
        $this->smarty->display('./templates/footer2.tpl');
    }

    function showForm($company){
        $this->smarty->assign('company', $company);
        $this->smarty->display('./templates/formularioJuego.tpl');
    }

    function showLogin(){
        $this->smarty->display('./templates/login.tpl');
    }
}