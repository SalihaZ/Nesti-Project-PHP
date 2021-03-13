<?php

class RecipeDAO
{

    // Fetch all data DB Recipe
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

        return $arrayRecipes;
    }

    public static function create($recipe) {
        $pdo = Database::connect(); 
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO recipes (name_recipes, difficulty_recipes, number_person_recipes, state_recipes, time_recipes) values(?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $recipe->getName_recipes(),
                $recipe->getDifficulty_recipes(), 
                $recipe->getNumber_person_recipes(), 
                $recipe->getState_recipes(),
                $recipe->getTime_recipes()
            ]
        );

        Database::disconnect();
    }
}
