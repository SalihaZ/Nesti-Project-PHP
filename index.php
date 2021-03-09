<?php
session_start();
include ('app/loader.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$loc =  filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);
$action =  filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

$UserSession = new Session();

if ($UserSession->isConnectUser()) {
    echo ("STATUS : Connected ;");

} else {
    echo ("STATUS : Not Connected ;");
    $loc = "connection";

}

switch ($loc) {

        // Connection part
    case "connection":
        include(PATH_CTRL . "controller_connection.php");
        break;

        // Disconnection part
    case "disconnection":
        include(PATH_CTRL . "controller_disconnection.php");
        break;

        // Recipes part
    case "recipes":
        include(PATH_CTRL . "controller_recipes.php");
        break;

        // Articles part
    case "articles":
        include(PATH_CTRL . "controller_articles.php");
        break;

        // Users part
    case "users":
        include(PATH_CTRL . "controller_users.php");
        break;

        // Statistics part
    case "statistics":
        include(PATH_STATISTICS . "statistics.php");
        break;

    default:
        include(PATH_ERRORS . "error404.php");
        break;
}

include(PATH_COMMON . "template.php");
