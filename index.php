<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include("./app/config.php");

$loc =  filter_input(INPUT_GET, "loc", FILTER_SANITIZE_STRING);
if (!isset($loc)) {
    $loc = "recipes";
}

$action =  filter_input(INPUT_GET, "action", FILTER_SANITIZE_STRING);

if(!isset($loc)){
    $loc = "recipes";
}

switch ($loc) {
    
    // Login part
    case "login":
        include(PATH_CTRL . "controller_login.php");
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

// //
// function getConnectedUser()
// {

//     $connectedUser = null;

//     if (isset($_COOKIE["user"])) {
//         $candidate = UserDao::findOneBy("username", $_COOKIE["user"]["username"]);
//         if ($candidate != null) {
//             if ($candidate->isPassword($_COOKIE["user"]["password"])) {
//                 $connectedUser = $candidate; {
//                 }
//             }
//         }
//     }

//     return $connectedUser;
// }


    // if (isset($_POST["user"])) {
    //     $candidate = UserDao::findOneBy("username", $_POST["user"]["username"]);
    //     if ($candidate != null) {
    //         if ($candidate->isPassword($_POST["user"]["password"])) {
    //             $connectedUser = $candidate;
    //             setcookie("user[username]", $_POST["user"]["username"], 2147483647, '/');
    //             setcookie("user[password]", $_POST["user"]["password"], 2147483647, '/');
    //         }
    //     } else {
    //         $loc = "login";
    //     }
    // }
