<?php
class ConnectionDAO extends BaseDAO
{

    public static function checkUsername($username)
    {
        {
            $pdo = Database::getPdo();
        
            $sql = "SELECT * FROM users WHERE username_user = $username";
            $result = $pdo->prepare($sql);
           
            $result->setFetchMode(PDO::FETCH_CLASS, 'User');
    
            if ($result) {
                $user = $result->fetch();
            } else {
                $user = '';
            }
    
            Database::disconnect();
    
            return $user;
        }
    }

    public static function addLogUser($id_user)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO logs_users (date_connection_log_user, fk_id_user) VALUES (CURRENT_TIMESTAMP, $id_user)";
        $q = $pdo->prepare($sql);
        $q->execute();

        Database::disconnect();
       
    }

    public static function create($recipe)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO recipes (name_recipe, difficulty_recipe, number_person_recipe, state_recipe, time_recipe) VALUES(?, ?, ?, ?, ?)";
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

 // Fetch data of one user in DB
 public static function findOneUserBy($username)
 {
     $pdo = Database::getPdo();

     $sql = "SELECT * FROM users WHERE username_user = $username";
     $result = $pdo->prepare($sql);
     $result->setFetchMode(PDO::FETCH_CLASS, 'User');

     if ($result) {
         $user = $result->fetch();
     } else {
         $user = '';
     }

     Database::disconnect();

     return $user;
 }
}