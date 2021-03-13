<?php

class ControllerRecipes extends BaseController
{

    public function initialize()
    {
        if (!isset($_GET['action'])) {
            $arrayRecipes = RecipeDAO::readAllRecipes();
            $this->_data['arrayRecipes'] = $arrayRecipes;
        }
    }
}
