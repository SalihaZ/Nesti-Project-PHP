<?php

include_once(PATH_MODEL . 'Database.php');

class UserDao
{

     // Fetch all data of the users in DB
      public function readAll()
      {
          $pdo = Database::getPdo();
          $sql = "SELECT * FROM users";
          $result = $pdo->query($sql);
  
          if ($result) {
              $arrayUsers = $result->fetchAll(PDO::FETCH_CLASS, 'User');
          } else {
              $arrayUsers = [];
          }
          return $arrayUsers;
      }

    public static function create($user) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO crudPhp_user (name,firstname,birthDate,tel, email, pays,comment, metier,url) values(?, ?, ?, ? , ? , ? , ? , ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $user->getName(),
                $user->getFirstname(),
                $user->getBirthDate(),
                $user->getTel(),
                $user->getEmail(),
                $user->getPays(),
                $user->getComment(),
                $user->getMetier(),
                $user->getUrl()
            ]
        );
        Database::disconnect();
    }

    public static function update($user)  {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE crudPhp_user SET name = ?,firstname = ?,birthDate = ?,tel = ?, email = ?, pays = ?, comment = ?, metier = ?, url = ? WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $user->getName(),
                $user->getFirstname(),
                $user->getBirthDate(),
                $user->getTel(),
                $user->getEmail(),
                $user->getPays(),
                $user->getComment(),
                $user->getMetier(),
                $user->getUrl(),
                $user->getId()
            ]
        );

        Database::disconnect();
    }

    public static function delete($user)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM crudPhp_user  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($user->getId()));
        Database::disconnect();
    }

    public static function findById($id)
    {
        return self::findOneBy("id", $id);
    }

    public static function exists($fieldName, $value)
    {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM nesti_php where $fieldName = ?";
        $q = $pdo->prepare($sql);
        $q->execute([$value]);
        $result = false;

        if ($q->rowCount() != 0) {
            $result = true;
        }

        return $result;
    }

    public static function findOneBy($fieldName, $value) {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM nesti_php where $fieldName = ?";
        $q = $pdo->prepare($sql);
        $q->execute([$value]);
        $arrayUsers = $q->fetchObject('User');
        
        return $arrayUsers ?? null;
    }
}
