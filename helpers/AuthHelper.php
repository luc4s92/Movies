<?php

class AuthHelper{

    function __construct()
    {
        
    }

    function checkLogIn(){
        session_start();
        if(isset($_SESSION["email"])){
            return true;
        }
        else{
            return false;
        }
    }
}