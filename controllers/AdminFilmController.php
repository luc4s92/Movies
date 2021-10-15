<?php

require_once './models/AdminFilmModel.php';
require_once './views/AdminFilmView.php';
require_once "./helpers/AuthHelper.php";

class AdminFilmController
{
    private $model;
    private $view;
    private $authHelper;
    function __construct()
    {
        $this->model = new AdminFilmModel();
        $this->view = new AdminFilmView();
        $this->authHelper = new AuthHelper();

    }


    function formFilm()
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
            $generos = $this->model->getGenre();
        $this->view->formFilm($generos);
        }else{
            header("Location: " . BASE_URL . "login");
        }
        
    }

    function saveFilm()
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
        $film = $_POST['film'];
        $description = $_POST['description'];
        $actors = $_POST['actors'];
        $img = $_POST['img'];
        $id_genre = $_POST['genre'];
        $this->model->addMovie($film, $description, $actors, $img, $id_genre);
        $this->view->showLocationFilms();
    }else{
        header("Location: " . BASE_URL . "login");
    }

    }


    function showFilms()
    {
        $isLogIn = $this->authHelper->checkLogIn();
        $films = $this->model->getFilms();
        $this->view->listFilms($films,$isLogIn);
    }

    function showFilm($id){
        $film = $this->model->getMovieByID($id);
        $this->view->showMovie($film);
    }


    function editFormMovie($id)
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
        $movie = $this->model->getMovieByID($id);
        $generos = $this->model->getGenre();
        $this->view->editMovie($movie, $generos);
        }else{
            header("Location: " . BASE_URL . "login");
        }
    }

    function editMovie($id)
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
        $id_movie = $id;
        $film = $_POST['film'];
        $description = $_POST['description'];
        $actors = $_POST['actors'];
        $img = $_POST['img'];
        $id_genre = $_POST['genre'];

        $this->model->updateMovie($film, $description, $actors, $img, $id_genre, $id_movie);
        $this->view->showLocationFilms();
        }else{
            header("Location: " . BASE_URL . "login");
        }
    }

    function deleteMovie($id)
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
        $this->model->deleteMovieDB($id);
        $this->view->showLocationFilms();
        }else{
            header("Location: " . BASE_URL . "login");
        }
    }
}
