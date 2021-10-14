<?php

require_once './libs/Smarty.class.php';


class AdminGenreView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }


    function adminGenre($genres)
    {
        //$this->smarty->assign('email', $_SESSION["email"]);
        $seve =false;
        $this->smarty->assign('genres', $genres);
        $this->smarty->assign('seve', $seve);
        $this->smarty->display('templates/adminGenre.tpl'); //cambiar el tpl

    }

    function editG($genre){
        $this->smarty->assign('genre',$genre);
        $this->smarty->display('templates/edit.tpl');
    }

    function showGenre($genres){
        $this->smarty->assign('genres',$genres);
        $this->smarty->display('templates/showGenre.tpl');
    }
}
