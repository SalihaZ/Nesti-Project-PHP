<?php

include_once(PATH_MODEL . 'Database.php');

class UserDAO extends BaseDAO
{
    protected static $tableName = "users";

     // Fetch all data of the users in DB
      public function readAll()
      {
          $pdo = Database::getPdo();
          $sql = "SELECT * FROM users";
          $result = $pdo->query($sql);
  
          if ($result) {
              $arrayUsers = $result->fetchAll(PDO::FETCH_CLASS, 'User');
            
              foreach ($arrayUsers as $user) {
                 $roles_user = RoleDAO::readUserRoles($user);
                 $user->setRoles_user($roles_user);
              }

          } else {
              $arrayUsers = [];
          }
          return $arrayUsers;
      }

    public static function createUser($user) {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (username_user, password_user, lastname_user, firstname_user, email_user, state_user, address1_user, address2_user, fk_id_city, postcode_user) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $user->getUsername_user(),
                $user->getPassword_user(),
                $user->getLastname_user(),
                $user->getFirstname_user(),
                $user->getEmail_user(),
                $user->getState_user(),
                $user->getAddress1_user(),
                $user->getAddress2_user(),
                $user->getFk_id_city(), 
                $user->getPostcode_user()
            ]
        );
        $last_id = $pdo->lastInsertId();
        Database::disconnect();
        return $last_id;
    }


    // public static function update($user)  {
    //     $pdo = Database::connect();
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "UPDATE crudPhp_user SET name = ?,firstname = ?,birthDate = ?,tel = ?, email = ?, pays = ?, comment = ?, metier = ?, url = ? WHERE id = ?";
    //     $q = $pdo->prepare($sql);
    //     $q->execute(
    //         [
    //             $user->getName(),
    //             $user->getFirstname(),
    //             $user->getBirthDate(),
    //             $user->getTel(),
    //             $user->getEmail(),
    //             $user->getPays(),
    //             $user->getComment(),
    //             $user->getMetier(),
    //             $user->getUrl(),
    //             $user->getId()
    //         ]
    //     );

    //     Database::disconnect();
    // }

    // public static function delete($user)
    // {
    //     $pdo = Database::connect();
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "DELETE FROM crudPhp_user  WHERE id = ?";
    //     $q = $pdo->prepare($sql);
    //     $q->execute(array($user->getId()));
    //     Database::disconnect();
    // }

    // public static function findById($id)
    // {
    //     return self::findOneBy("id", $id);
    // }

    // public static function exists($fieldName, $value)
    // {
    //     $pdo = Database::connect();
    //     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     $sql = "SELECT * FROM nesti_php where $fieldName = ?";
    //     $q = $pdo->prepare($sql);
    //     $q->execute([$value]);
    //     $result = false;

    //     if ($q->rowCount() != 0) {
    //         $result = true;
    //     }

    //     return $result;
    // }

}
