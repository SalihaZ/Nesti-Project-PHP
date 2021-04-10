<?php

class ArticleDAO
{

    // Fetch all data of the articles in DB
    public static function readAllArticles()
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

    public static function getPriceArticle($id_article)
    {
        $pdo = Database::getPdo();

        $sql = "SELECT price_articles.price_article FROM `price_articles`
        INNER JOIN articles ON articles.fk_id_product = price_articles.fk_id_article
        WHERE price_articles.fk_id_article = $id_article";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        if ($result) {
            $price_article = $result->fetch();
        } else {
            $price_article['price_article'] = '0';
        }

        Database::disconnect();

        return $price_article['price_article'];
    }

    public static function getNameArticle($id_article)
    {
        $pdo = Database::getPdo();

        $sql = "SELECT products.name_product FROM `products`
        INNER JOIN articles ON products.id_product = articles.fk_id_product
        WHERE articles.fk_id_product = $id_article";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        if ($result) {
            $name_article = $result->fetch();
        } else {
            $name_article['name_product'] = '0';
        }

        Database::disconnect();

        return $name_article['name_product'];
    }

    public static function getTypeArticle($id_article)
    {
        $pdo = Database::getPdo();

        $sql = "SELECT * FROM ingredients WHERE fk_product_ingredient = $id_article";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        if ($result->rowcount() == 1) {

            $type = "Ingredient";
        } else {

            $type = "Utensile";
        }

        return $type;
    }

    
    public static function getUnitArticle($id_article)
    {
        $pdo = Database::getPdo();

        $sql = "SELECT measure_units.name_measure_unit FROM `measure_units`
        INNER JOIN articles ON measure_units.id_measure_unit = articles.fk_id_measure_unit
        WHERE articles.id_article = $id_article";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        if ($result) {
            $unit = $result->fetch();
        } else {
            $unit['name_measure_unit'] = "Pas d'unité";
        }

        Database::disconnect();

        return $unit['name_measure_unit'];
    }


    
}
