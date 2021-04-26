<?php

class ControllerRecipes extends BaseController
{

    public function initialize()
    {
        #RECIPES
        if (!isset($_GET['action'])) {
            $arrayRecipes = RecipeDAO::readAllRecipes();
            $this->_data['arrayRecipes'] = $arrayRecipes;
        } else {

            #RECIPE/CREATE
            if ($_GET['action'] == 'create') {

                if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

                    $recipe = new Recipe;
                    $recipe->setName_recipe($_POST["name_recipe"]);
                    $recipe->setDifficulty_recipe($_POST["difficulty_recipe"]);
                    $recipe->setNumber_person_recipe($_POST["number_person_recipe"]);
                    $recipe->setState_recipe($_POST["stateRecipe"]);
                    $recipe->setTime_recipe($_POST["time_recipe"]);

                    // Pushes into DB
                    if (($recipe->getValid_recipe()) == true) {
                        $id_user = $_SESSION['id_user'];
                        $last_id = RecipeDAO::createRecipe($recipe, $id_user);
                        var_dump($last_id);
                        $recipe->setId_recipe($last_id);
                        
                        $_SESSION['recipeCreated'] = '';
                        
                        header('Location:' . BASE_URL . "recipes/edit/".$last_id);
                        exit();
                    }

                    $this->_data['recipe'] = $recipe;
                }
            }

             #RECIPE / EDITION
             if ($_GET['action'] == 'edit') {
                if (!isset($_GET['option'])) {

                    $id_recipe = $_GET['id'];

                    $recipe = RecipeDAO::findOneBy("id_recipe", $id_recipe);

                    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

                        // $article->setCustomer_name_article(($_POST["articleCustomerName"]));
                        // $article->setState_article(($_POST["stateArticle"]));
                       
                        // ArticleDAO::updateArticle($article);
                        // $_SESSION['articleUpdated'] = '';
                    }

                    $this->_data['recipe'] = $recipe;
                }
            }
        }
    }
}
