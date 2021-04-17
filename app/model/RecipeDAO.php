<?php

class RecipeDAO extends BaseDAO
{
    protected static $tableName = "recipes";

    // Fetch all data DB Recipe to fill a table
    public static function readAllRecipes()
    {
        $pdo = Database::getPdo();
        $sql = "SELECT * FROM recipes";
        $result = $pdo->query($sql);

        if ($result) {
            $arrayRecipes = $result->fetchAll(PDO::FETCH_CLASS, 'Recipe');
        } else {
            $arrayRecipes = [];
        }

        Database::disconnect();
        return $arrayRecipes;
    }

    // Creates a new recipe 
    public static function create($recipe)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO recipes (name_recipe, difficulty_recipe, number_person_recipe, state_recipe, time_recipe) values(?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $recipe->getName_recipe(),
                $recipe->getDifficulty_recipe(),
                $recipe->getNumber_person_recipe(),
                $recipe->getState_recipe(),
                $recipe->getTime_recipe()
            ]
        );

        Database::disconnect();
    }

    // Finds the number of recipes the chef has published 
    public static function getNumberRecipesChief($id_chief)
    {

        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT COUNT(fk_id_chief) FROM `recipes` WHERE fk_id_chief = ?";
        $result = $pdo->prepare($sql);

        $result->execute(
            [
                $id_chief
            ]
        );

        $number = $result->fetch();

        Database::disconnect();

        return $number[0];
    }

    public static function getNameLastRecipeChief($id_chief)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT fk_id_chief, date_creation_recipe, name_recipe FROM recipes WHERE fk_id_chief = $id_chief ORDER BY date_creation_recipe DESC LIMIT 1 ";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        if ($result->rowcount() == 1) {

            $name = $result->fetch();
        } else {
            $name['name_recipe'] = "Pas de première recette";
        }

        Database::disconnect();

        return $name['name_recipe'];
    }

    public static function getNameChiefRecipe($id_recipe){
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = " SELECT users.username_user FROM users
        INNER JOIN chiefs ON chiefs.fk_id_user = users.id_user
        INNER JOIN recipes ON recipes.fk_id_chief = chiefs.fk_id_user
        WHERE recipes.id_recipe = $id_recipe";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

       
        if ($result->rowcount() == 1) {

            $name_chief = $result->fetch();
    
        } else {
            $name_chief['username_user'] = "Pas de chef";
        } 

        Database::disconnect();

        return $name_chief['username_user'];
    }

    public static function getGradeRecipe($id_recipe)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT ROUND(AVG(grade_out_of_5), 0) FROM `give_grades` WHERE fk_id_recipe = $id_recipe";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();


        if ($result->rowcount() >= 1) {

            $grade_recipe = $result->fetchAll();

        } else {
            $grade_recipe = "0";
        }

        Database::disconnect();

        return $grade_recipe;
    }


    public static function getGradeChief($id_chief)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT ROUND(AVG(grade_out_of_5), 0) FROM `give_grades` 
        INNER JOIN recipes ON fk_id_recipe = id_recipe
        WHERE fk_id_chief = $id_chief ";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();


        if ($result->rowcount() >= 1) {

            $grade_chief = $result->fetchAll();

        } else {
            $grade_chief = "0";
        }

        Database::disconnect();

        return $grade_chief;
    }  
}
