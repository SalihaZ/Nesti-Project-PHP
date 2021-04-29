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
                        $recipe->setId_recipe($last_id);

                        $_SESSION['recipeCreated'] = '';

                        header('Location:' . BASE_URL . "recipes/edit/" . $last_id);
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
                    $ingredients_recipe = IngredientRecipeDAO::findAllIngredientsForOneRecipe($id_recipe);


                    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

                        // $article->setCustomer_name_article(($_POST["articleCustomerName"]));
                        // $article->setState_article(($_POST["stateArticle"]));

                        // ArticleDAO::updateArticle($article);
                        // $_SESSION['articleUpdated'] = '';
                    }

                    $this->_data['recipe'] = $recipe;
                    $this->_data['ingredients_recipe'] = $ingredients_recipe;
                }

                //ADD INGREDIENT
                if (isset($_GET['id'])) {
                    if ((isset($_GET['option'])) && (($_GET['option']) == "addingredient")) {

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) {

                            $id_recipe = $_POST["id_recipe"];
                            $name_ingredient = $_POST["name_ingredient"];
                            $quantity_ingredient = $_POST["quantity_ingredient"];
                            $name_unit_ingredient = $_POST["unit_ingredient"];

                            $data = [];

                            $id_ingredient = ProductDAO::findIDIngredientWith($name_ingredient);
                            if ($id_ingredient == null) {
                                $id_ingredient = ProductDAO::createProduct($name_ingredient);
                                IngredientDAO::createIngredient($id_ingredient);
                            }

                            $id_measure_unit_ingredient = MeasureUnitDAO::findIDMeasureUnitWith($name_unit_ingredient);
                            if ($id_measure_unit_ingredient == null) {
                                $id_measure_unit_ingredient = MeasureUnitDAO::createMeasureUnit($name_unit_ingredient);
                            }
                            
                            $data["id_ingredient"] = $id_ingredient;
                            $data["id_measure_unit_ingredient"] = $id_measure_unit_ingredient;
                            $data['quantity_ingredient'] = $quantity_ingredient;
                            $data['id_recipe']= $id_recipe;
                          
                            echo json_encode($data);

                            IngredientRecipeDAO::addIngredientRecipe($id_recipe, $id_ingredient, $quantity_ingredient, $id_measure_unit_ingredient);
                            die();
                        }
                    }

                     // DELETE INGREDIENT
                    if ((isset($_GET['option'])) && (($_GET['option']) == "deleteingredient")) {

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST)) { 

                            $id_recipe = $_POST["id_recipe"];
                            $id_ingredient = $_POST["id_ingredient"];
                            $quantity_ingredient = $_POST["quantity_ingredient"];
                            $id_measure_unit_ingredient = $_POST["id_measure_unit"];

                            $data['delete'] = "succeed";

                            echo json_encode($data);

                            IngredientRecipeDAO::deleteIngredientRecipe($id_recipe, $id_ingredient, $quantity_ingredient, $id_measure_unit_ingredient);
                            die();

                        }

                    }                    
                }
            }
        }
    }
}
