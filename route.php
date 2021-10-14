<?php

require_once 'controllers/AdminGenreController.php';
require_once 'controllers/AdminFilmController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$adminGController = new AdminGenreController();
$adminFController = new AdminFilmController();

switch ($params[0]) {
    case 'showGenre':
        $adminGController->showGenre();
        break;
    case 'createGenre':
        $adminGController->newGenre();
        break;
    case 'saveGenre':
        $adminGController->saveGenre();
        break;
    case 'viewGenre':
        $adminGController->viewGenre($params[1]);
        break;
    case 'editFormGenre':
        $adminGController->editFormGenre($params[1]);
        break;
    case 'editGenre':
        $adminGController->editGenre($params[1]);
        break;
    case 'deleteGenre':
        $adminGController->deleteGenre($params[1]);
        break;
    case 'formFilm':
        $adminFController->formFilm();
        break;
    case 'saveFilm':
        $adminFController->saveFilm();
        break;
    case 'showFilms':
        $adminFController->showFilms();
        break;
    case 'editFormMovie':
        $adminFController->editFormMovie($params[1]);
        break;
    case 'editMovie':
        $adminFController->editMovie($params[1]);
        break;
    case 'deleteMovie':
        $adminFController->deleteMovie($params[1]);
        break;
    case 'home':
        $adminGController->home();
        break;

    default:
        echo ('404 Page not found');
        break;
}
