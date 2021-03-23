<?php
class ConnectionDAO extends BaseDAO
{

    public function checkPassword($email, $password)
    {
        $pdo = Database::getPdo();
        $sql = 'SELECT u.id_users, u.lastname, u.firstname, u.username, u.email, u.password, u.state, u.creation_date, u.address1, u.address2, u.postcode, u.id_city FROM users u WHERE u.email=:email AND u.password=:password';
        $req->execute(array("email" => $email, "password" => $password));
        if ($data =  $req->fetch()) {
            $user->hydration($data);
        }
        $req->closeCursor(); // release the server connection so it's possible to do other query
        return $user;
    }

    public function addUserLog($idUser)
    {
        $req = self::$_bdd->prepare('INSERT INTO user_logs (connection_date,id_users) VALUES (CURRENT_TIMESTAMP,:id)');
        $req->execute(array("id" => $idUser));
        $req->fetch();
    }

      // Fetch data of one user in DB
      public static function findOneUser($id)
      {
          $pdo = Database::getPdo();
  
          $sql = "SELECT * FROM users WHERE id_user = $id";
          $result = $pdo->query($sql);
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