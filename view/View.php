<?php
namespace view;

use Smarty;

include_once "libs/smarty/smarty/libs/Smarty.class.php";

class View
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

    function showAdminPanel($games,$compa){
        $this->smarty->assign('games',$games);
        $this->smarty->assign('compa', $compa);
        $this->smarty->display('./templates/adminPanel.tpl');
    }

    function showGamePanel(){
        $this->smarty->display('./templates/gamePanel.tpl');
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

    function showHomeAdmin ($games,$compa) {
        $this->smarty->assign('games',$games);
        $this->smarty->assign('compa', $compa);
        $this->smarty->display('./templates/adminPanel.tpl');
    }
    function redirection($ruta){

    }
}