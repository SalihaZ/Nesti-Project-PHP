<?php

class CommentsDAO extends BaseDAO
{
    protected static $tableName = "comments";

    // Fetchs all data of the users in DB
    public static function readCommentsFromOneUser($id)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM comments WHERE fk_id_user = $id";
        $result = $pdo->query($sql);

        if ($result) {
            $arrayComments = $result->fetchAll(PDO::FETCH_CLASS, 'Comment');
        } else {
            $arrayComments = [];
        }
        return $arrayComments;
    }

    // Approve a comment
    public static function approveComment($id_comment)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE comments SET state_comment = ? WHERE id_comment = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                "a",
                $id_comment
            ]
        );
        Database::disconnect();
    }

    // Blocks a comment
    public static function disapproveComment($id_comment)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE comments SET state_comment = ? WHERE id_comment = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                "b",
                $id_comment
            ]
        );
        Database::disconnect();
    }

      // Finds the number of comments approved by the moderator
      public static function getNumberApprovedCommentsModerator($id_moderator)
      {
  
          $pdo = Database::getPdo();
          $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          $sql = "SELECT COUNT(fk_id_user) FROM comments WHERE fk_id_user = ? AND state_comment = 'a'";
          $result = $pdo->prepare($sql);
  
          $result->execute(
              [
                $id_moderator
              ]
          );
  
          $number = $result->fetch();
  
          Database::disconnect();
  
          return $number[0];
      }

          // Finds the number of comments approved by the moderator 
          public static function getNumberDisapprovedCommentsModerator($id_moderator)
          {
      
              $pdo = Database::getPdo();
              $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql = "SELECT COUNT(fk_id_user) FROM `comments` WHERE fk_id_user = ? AND state_comment = 'b'";
              $result = $pdo->prepare($sql);
      
              $result->execute(
                  [
                    $id_moderator
                  ]
              );
      
              $number = $result->fetch();
      
              Database::disconnect();
      
              return $number[0];
          }
}
