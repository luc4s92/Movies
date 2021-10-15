<?php

class UserModel{
    
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=filmPirata;charset=utf8', 'root', '');
    }

    function getUser($email){
        $sentencia = $this->db->prepare('SELECT * FROM user WHERE email = ?');
        $sentencia->execute(array($email));
        $user = $sentencia->fetch(PDO::FETCH_OBJ);
        return $user;
    }


}