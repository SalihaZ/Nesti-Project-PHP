<?php

include_once(PATH_MODEL . 'Database.php');

class ArticleDAO
{

    // Fetch all data of the articles in DB
    public function readAll()
    {

        $pdo = Database::getPdo();
        $sql = "SELECT * FROM articles";
        $result = $pdo->query($sql);

        if ($result) {
            $arrayArticles = $result->fetchAll(PDO::FETCH_CLASS, 'Article');
        } else {
            $arrayArticles = [];
        }

        return $arrayArticles;
    }
}
