<?php

require_once './libs/Smarty.class.php';


class AdminGenreView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }


    function home(){
        $this->smarty->display('templates/home.tpl');
    }

    function formGenre(){
        $this->smarty->display('templates/formGenre.tpl');
    }

    function adminGenre($genres,$isLogIn)
    {
        
        $this->smarty->assign('genres', $genres);
        $this->smarty->assign('isLogIn', $isLogIn);
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

    function showLocationGenre(){
        header("Location: ".BASE_URL."showGenre");
    }
}
