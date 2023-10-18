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

    function showGameEditForm($game_ID){
        $this->smarty->assign( 'game_ID', $game_ID);
        $this->smarty->display('./templates/editGameForm.tpl');

    }

    function showEditCompany($company_ID){
        $this->smarty->assign('company_ID', $company_ID);
        $this->smarty->display('./templates/editCompanyForm.tpl');
    }
    function redirection($ruta){

    }
}