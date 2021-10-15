<?php
require_once './libs/Smarty.class.php';
class UserView{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showLogin($error = ""){
        $this->smarty->assign('error', $error);  
        $this->smarty->display('templates/login.tpl');
    }

    function showHome(){
        header("Location: ".BASE_URL."home");
    }

}