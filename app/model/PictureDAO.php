<?php

class PictureDAO extends BaseDAO
{
    protected static $tableName = "images";

    public static function addPicture($image)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO images (name_image, extension_image) values(?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $image->getName_image(),
                $image->getExtension_image()
            ]
        );
        $last_id = $pdo->lastInsertId();
        Database::disconnect();
        return $last_id;
    }


    public static function linkPictureToRecipe($id_recipe, $id_image)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE recipes SET fk_id_image = ? WHERE id_recipe = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $id_image, 
                $id_recipe 
            ]
        );
        Database::disconnect();
    }

    public static function linkPictureToArticle($id_article, $id_image)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE articles SET fk_id_image = ? WHERE id_article = ?";
        $q = $pdo->prepare($sql);
        $q->execute(
            [
                $id_image, 
                $id_article
            ]
        );
        Database::disconnect();
    }

    public static function getPictureName($id_image)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT CONCAT(name_image, '.' ,extension_image) AS image_name FROM images WHERE id_image = $id_image";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();


        if ($result->rowcount() >= 1) {

            $image_name = $result->fetch();

        } else {
            $image_name = "0";
        }

        Database::disconnect();

        return $image_name;
    }
}
