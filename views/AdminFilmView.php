<?php

require_once './libs/Smarty.class.php';

class AdminFilmView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function adminFilm($genres,$films)
    {
        $this->smarty->assign('genres', $genres);
        $this->smarty->assign('films', $films);
        $this->smarty->display('templates/adminFilms.tpl');
    }

    function listFilms($films)
    {
        $this->smarty->assign('films', $films);
        $this->smarty->display('templates/filmsList.tpl');
    }


    function editMovie($movie,$genres){
        $this->smarty->assign('movie', $movie);
        $this->smarty->assign('genres', $genres);
        $this->smarty->display('templates/editFormMovie.tpl');
    }

}
