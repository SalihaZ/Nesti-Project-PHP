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
    public static function approveComment($comment)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE comments SET state_comments = ? WHERE id_comment = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $comment->getId_comment(),
                $comment->getId_comment()
            ]
        );
        Database::disconnect();
    }

    // Blocks a comment
    public static function dissaproveComment($comment)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE comments SET state_comments = ? WHERE id_comment = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                "w",
                $comment->getId_comment()
            ]
        );
        Database::disconnect();
    }
}
