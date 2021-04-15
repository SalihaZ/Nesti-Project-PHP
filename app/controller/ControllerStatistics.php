<?php

class ControllerStatistics extends BaseController
{

    public function initialize()
    {

        // LOGS CONSULTATION

        $allLogsUsers = LogsUserDAO::readAllLogsUsers(); 

        foreach ($allLogsUsers as $logUser) {
            $format = 'Y-m-d H:i:s';
            $logUserDate = DateTime::createFromFormat($format, $logUser->getDate_connection_log_user()); // format each connection date
            $logByHours[$logUserDate->format('H')][] = $logUser; // sort the list of the logs by hours (hour is the key of the array $hoursLog)
    
        }

        foreach ($logByHours as $key => $logs) {
            $connectionPerHour[] = (object) array('name' => $key, 'data' => count($logs)); // count the number of logs for a given hour
        }

        array_multisort($connectionPerHour, SORT_ASC);



        // USERS
        $users = UserDAO::readAllUsers(); // get all the users

        usort($users, function ($u1, $u2) { // sort the array DESC according to the number of logs for each user
            return count($u2->getConnectionsUser()) <=> count($u1->getConnectionsUser());
            
        });

        $users = array_slice($users, 0, 10); // we keep the first 10

        $top10ConnectedUsers = [];
        foreach ($users as $user) {
            $top10ConnectedUsers[] = ["id" => $user->getId_user(), "name" => $user->getLastname_user() . ' ' . $user->getFirstname_user()];
        }

        // // CHEF
        // $chiefs = UserDAO::readAllUsers();
        
        // usort($chiefs, function ($c1, $c2) { // sort the array DESC according to the average grade of recipes for each chief
        //     return $c2->getAverageGrade() <=> $c1->getAverageGrade();
        // });
        // $chiefs = array_slice($chiefs, 0, 10); // we keep the first 10

        // RECIPES 

        $recipes = RecipeDAO::readAllRecipes();

        usort($recipes, function ($r1, $r2) { // sort the array DESC according to the grade of the recipe
            return $r2->getGradesRecipe() <=> $r1->getGradesRecipe();
        });

        $recipes = array_slice($recipes, 0, 10); // we keep the first 10

        var_dump($recipes);

        $top10Recipes = [];
        foreach ($recipes as $recipe) {
            $top10Recipes[] = ["id" => $recipe->getId_recipe(), "name" => $recipe->getName_recipe()];
        }

        // RETURN DATA
        $this->_data["connectionPerHour"] = $connectionPerHour;
        $this->_data["top10ConnectedUsers"] = $top10ConnectedUsers;
        $this->_data["top10Recipes"] = $top10Recipes;

      
        
        
    }
}
