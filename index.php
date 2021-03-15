<?php
session_start();
include ('app/Autoloader.php');

// Head
include(PATH_COMMON . 'head.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$loc =  filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);
$action =  filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);
$id =  filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);

$UserSession = new Session();

if ($UserSession->isConnectUser()) {
    echo ("STATUS : Connected ;");

} else {
    echo ("STATUS : Not Connected ;");
    $loc = "connection";

}

$controller = null;

switch ($loc) {
   
        // Connection part
    case "connection":
        include(PATH_CTRL . "ControllerConnection.php");
        break;

        // Disconnection part
    case "disconnection":
        include(PATH_CTRL . "ControllerDisconnection.php");
        break;

        // Recipes part
    case "recipes":
        $controller = new ControllerRecipes();
        break;

        // Articles part
    case "articles":
        $controller = new ControllerArticles();
        break;

        // Users part
    case "users":
       $controller = new ControllerUsers();
    break;

        // Statistics part
    case "statistics":
        $controller = new ControllerStatistics();
        break;

    default:
        include(PATH_ERRORS . "error404.php");
        break;
}

extract($controller->getData());

include(PATH_COMMON . "template.php");
