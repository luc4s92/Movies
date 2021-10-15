<?php

require_once './models/AdminGenreModel.php';
require_once './views/AdminGenreView.php';
require_once "./helpers/AuthHelper.php";

class AdminGenreController
{
    private $model;
    private $view;
    private $authHelper;

    function __construct()
    {
        $this->model = new AdminGenreModel();
        $this->view = new AdminGenreView();
        $this->authHelper = new AuthHelper();
    }


    function home()
    {
        $this->view->home();
    }

    function saveGenre()
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
            $genre = $_POST['genre'];
            $this->model->createGenre($genre);
            $genre = $this->model->getGenre();
            $this->view->showLocationGenre();
        }else{
            header("Location: " . BASE_URL . "login");
        }
        

    }

    function showGenre()
    {
        $isLogIn = $this->authHelper->checkLogIn();
        $genres = $this->model->getGenre();
        $this->view->adminGenre($genres, $isLogIn);
    }

    function newGenre()
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if($isLogIn){
            $this->view->formGenre();
        }else{
            header("Location: " . BASE_URL . "login");
        }
    }

    function viewGenre($id)
    {
        $genre = $this->model->getMoviesByGenre($id);
        $this->view->showGenre($genre);
    }


    function editFormGenre($id)
    {
        $isLogIn = $this->authHelper->checkLogIn();
        if ($isLogIn) {
            $genre = $this->model->getGenreById($id);
            $this->view->editG($genre);
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function editGenre($id)
    {
        $isLogIn = $this->authHelper->checkLogIn();
        $id_genre = $id;
        if ($isLogIn) {
            $nuevoGenre = $_POST['new-genre'];
            $this->model->updateGenre($id_genre, $nuevoGenre);
            $this->view->showLocationGenre();
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }

    function deleteGenre($id)
    {

        $isLogIn = $this->authHelper->checkLogIn();
        if ($isLogIn) {
            $this->model->deleteGenreDB($id);
            $this->view->showLocationGenre();
        } else {
            header("Location: " . BASE_URL . "login");
        }
    }
}
