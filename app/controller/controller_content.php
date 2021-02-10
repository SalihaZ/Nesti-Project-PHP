<?php

switch ($loc) {

        // Login part
    case "login":
        include(PATH_VIEW . "login.php");
        break;

        // Recipes part
    case "recipes":
        switch ($action) {
            case "create":
                include(PATH_RECIPES . "recipes-create.php");
                break;
            case "edit":
                include(PATH_RECIPES . "recipes-edition.php");
                break;
            default:
                include(PATH_RECIPES  . "recipes.php");
                break;
        }
        break;

        // Articles part
    case "articles":
        switch ($action) {
            case "commands":
                include(PATH_ARTICLES . "articles-commands.php");
                break;
            case "edition":
                include(PATH_ARTICLES . "articles-edition.php");
                break;
            case "imports":
                include(PATH_ARTICLES . "articles-imports.php");
                break;
            default:
                include(PATH_ARTICLES . "articles.php");
                break;
        }
        break;

        // Users part
    case "users":
        switch ($action) {
            case "create":
                include(PATH_USER . "users-create.php");
                break;
            case "edition":
                include(PATH_USER . "users-edition.php");
                break;
            default:
                include(PATH_USER . "users.php");
                break;
        }
        break;

        // Statistics part
    case "statistics":
        include(PATH_STATISTICS . "statistics.php");
        break;

    default:
        include(PATH_ERRORS . "error404.php");
        break;
}
