<?php

require_once './models/AdminFilmModel.php';
require_once './views/AdminFilmView.php';

class AdminFilmController
{

    function __construct()
    {
        $this->model = new AdminFilmModel();
        $this->view = new AdminFilmView();
    }


    function formFilm()
    {
        $generos = $this->model->getGenre();

        $this->view->formFilm($generos);
    }

    function saveFilm()
    {
        $film = $_POST['film'];
        $description = $_POST['description'];
        $actors = $_POST['actors'];
        $img = $_POST['img'];
        $id_genre = $_POST['genre'];
        $this->model->addMovie($film, $description, $actors, $img, $id_genre);
        $this->view->showLocationFilms();
    }


    function showFilms()
    {
        $films = $this->model->getFilms();
        $this->view->listFilms($films);
    }

    function editFormMovie($id)
    {
        $movie = $this->model->getMovieByID($id);
        $generos = $this->model->getGenre();
        $this->view->editMovie($movie, $generos);
    }

    function editMovie($id)
    {
        $id_movie = $id;
        $film = $_POST['film'];
        $description = $_POST['description'];
        $actors = $_POST['actors'];
        $img = $_POST['img'];
        $id_genre = $_POST['genre'];


        $this->model->updateMovie($film, $description, $actors, $img, $id_genre, $id_movie);
        $this->view->showLocationFilms();
    }

    function deleteMovie($id)
    {
        $this->model->deleteMovieDB($id);
        $this->view->showLocationFilms();
    }
}
