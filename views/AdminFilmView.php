<?php

require_once './libs/Smarty.class.php';

class AdminFilmView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function formFilm($genres)
    {
        $this->smarty->assign('genres', $genres);
        $this->smarty->display('templates/formFilms.tpl');
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

    function showLocationFilms(){
        header("Location: ".BASE_URL."showFilms");
    }

}
