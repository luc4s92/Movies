<?php

require_once './models/UserModel.php';
require_once './views/UserView.php';

class UserController
{

    function __construct()
    {
        $this->model = new UserModel();
        $this->view = new UserView();
    }


    function login()
    {
        $this->view->showLogin();
    }


    function verifyLogin()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Obtengo el usuario de la base de datos
            $user = $this->model->getUser($email);
            var_dump($user);
            var_dump(password_verify($password, $user->password));
            var_dump($user->password);
            var_dump($password);
            var_dump($user && password_verify($password, (password_hash($user->password, PASSWORD_DEFAULT))));
            // Si el usuario existe y las contraseñas coinciden
            if ($user && password_verify($password, password_hash($user->password, PASSWORD_DEFAULT))) {

                session_start();
                $_SESSION["email"] = $email;

                $this->view->showHome();
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }

    function logout()
    {
        session_start();
        session_destroy();
        $this->view->showLogin("Te deslogueaste!");
    }
}
