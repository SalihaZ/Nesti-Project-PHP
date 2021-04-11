<?php

class ArticleDAO extends BaseDAO
{
    
    protected static $tableName = "articles";

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

            $type = "Ingrédient";
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

    public static function getRefArticle($id_article)
    {
        $pdo = Database::getPdo();

        $sql = "SELECT ref_package FROM `packages` WHERE fk_id_article = $id_article";
        $result = $pdo->query($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        if ($result) {
            $ref = $result->fetch();
        } else {
            $ref['ref_package'] = "0";
        }

        Database::disconnect();

        return $ref['ref_package'];
    }

     // Block one article 
     public static function deleteArticle($id_article)
     {
         $pdo = Database::getPdo();
         $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $sql = "UPDATE articles SET state_article = ? WHERE id_article = ?";
         $q = $pdo->prepare($sql);
         $q->execute(
             [
                 "b",
                 $id_article
             ]
         );
         Database::disconnect();
     }

     public static function getStockArticle($id_article)
     {
         $pdo = Database::getPdo();
 
         $sql = "SELECT packages.quantity_bought_package -  SUM(command_lines.command_quantity) AS stock FROM packages
         INNER JOIN articles ON articles.id_article = packages.fk_id_article
         INNER JOIN command_lines ON command_lines.fk_id_article = articles.id_article
         WHERE articles.id_article = $id_article";
         $result = $pdo->query($sql);
         $result->setFetchMode(PDO::FETCH_ASSOC);
 
         if ($result->rowcount() == 1) {
             $stock = $result->fetch();
         } else {
             $stock['stock'] = "0";

         }
 
         Database::disconnect();
 
         return $stock['stock'];
     }



 


    
}
