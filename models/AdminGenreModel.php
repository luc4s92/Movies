<?php

class AdminGenreModel{

    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=filmPirata3;charset=utf8', 'root', '');
    }

    function createGenre($genre) {
        $sentencia = $this->db->prepare("INSERT INTO genres(genre) VALUES(?)");
        $sentencia->execute(array($genre));
    }

    function getGenre(){
        $sentencia = $this->db->prepare( "select * from genres");
        $sentencia->execute();
        $genre = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $genre;
    }

    function getGenreById($id){
        $sentencia = $this->db->prepare("SELECT * FROM genres  WHERE id_genre=?" );
        $sentencia->execute(array($id));
        $genre = $sentencia->fetch(PDO::FETCH_OBJ);
        return $genre;
    }
    function getMoviesByGenre($id){
        $sentencia = $this->db->prepare("SELECT movies.film,genres.genre FROM movies INNER JOIN genres ON movies.id_genre = genres.id_genre WHERE genres.id_genre=? " );
        $sentencia->execute(array($id));
        $genre = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $genre;
    }

    function updateGenre($id,$genre){
        $sentencia = $this->db->prepare("UPDATE genres set genre=? WHERE id_genre=?");
        $sentencia->execute(array($genre,$id));
    }

    function deleteGenreDB($id){
        $sentencia = $this->db->prepare("DELETE FROM genres where id_genre=?");
        $sentencia->execute(array($id));
    }
}