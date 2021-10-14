<?php

require_once './models/AdminGenreModel.php';
require_once './views/AdminGenreView.php';

class AdminGenreController {

    function __construct()
    {
        $this->model = new AdminGenreModel();
        $this->view = new AdminGenreView();
    }


    function saveGenre(){
        $genre = $_POST['genre'];
        $this->model->createGenre($genre);
        $genre = $this->model->getGenre();
        $this->view->adminGenre($genre);
    }

    function showGenre(){
        $genres = $this->model->getGenre();
        $this->view->adminGenre($genres);
    }

    function viewGenre($id){
        $genre = $this->model->getMoviesByGenre($id);
        $this->view->showGenre($genre);
    }


    function editFormGenre($id){
        $genre = $this->model->getGenreById($id);
        $this->view->editG($genre);
    }

    function editGenre($id){
        $id_genre = $id;
        $nuevoGenre = $_POST['new-genre'];      
        $this->model->updateGenre($id_genre,$nuevoGenre);
    }

    function deleteGenre($id){
        $this->model->deleteGenreDB($id);
        //redirigir al home desde la vista (view)
    }
}