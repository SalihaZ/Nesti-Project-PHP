<?php

include(PATH_ENTITIES . "Recipe.php");
include(PATH_MODEL . "RecipeDAO.php");

// Constructor Obj Recipe
$model = new RecipeDAO();
$arrayRecipes = $model->readAll();

// function blabla()
// {
//     var_dump($_POST);
   
//     if (!empty($_POST)) {
//         var_dump($recipe);
//         $recipe->setParametersFromArray($_POST);
//         if ($recipe->isValid()) {
//             RecipeDAO::create($recipe);
//         }
//     }
// }

