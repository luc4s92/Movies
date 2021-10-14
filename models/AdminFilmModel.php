<?php

class AdminFilmModel
{


    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=filmPirata;charset=utf8', 'root', '');
    }


    function getFilms(){
        $sentencia = $this->db->prepare( "select * from movies INNER JOIN genres ON movies.id_genre = genres.id_genre");
        $sentencia->execute();
        $films = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $films;
    }


    function getGenre()
    {
        $sentencia = $this->db->prepare("select * from genres");
        $sentencia->execute();
        $generos = $sentencia->fetchAll(PDO::FETCH_OBJ);

        // foreach($generos as $key => $genero ) {
        //   $generos[$key]['films']= $this->getProductos($genero['id_genre']);
        // }
        return $generos;
    }


    function addMovie($film, $description, $actors, $img, $id_genre)
    {
        $sentencia = $this->db->prepare('INSERT INTO movies(film,description,actors,img,id_genre) VALUES(?,?,?,?,?)');
        $sentencia->execute(array($film, $description, $actors, $img, $id_genre));
        
    }

    
    function getMovieByID($id){
        $sentencia = $this->db->prepare("select * from movies  INNER JOIN genres ON movies.id_genre = genres.id_genre  WHERE id_movie=?");
        $sentencia->execute(array($id));
        $movie = $sentencia->fetch(PDO::FETCH_OBJ);
        return $movie;
    }

    function updateMovie($film,$description,$actors,$img,$id_genre,$id_movie){
        $sentencia = $this->db->prepare("UPDATE movies set film=?,description=?,actors=?,img=?,id_genre=? WHERE id_movie=?");
        $sentencia->execute(array($film,$description,$actors,$img,$id_genre,$id_movie));
    }

    function deleteMovieDB($id){
        $sentencia = $this->db->prepare("DELETE FROM movies where id_movie=?");
        $sentencia->execute(array($id));
    }
}
