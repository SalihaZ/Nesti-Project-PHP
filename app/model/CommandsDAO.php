<?php

class CommandsDAO extends BaseDAO
{
    protected static $tableName = "commands";

    // Finds the number of comments approved by the moderator 
    public static function getNumberCommandsUser($id_user)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT COUNT(fk_id_user) FROM `commands` WHERE fk_id_user = ?";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute(
            [
                $id_user
            ]
        );

        $number = $result->fetch();

        Database::disconnect();

        return $number['COUNT(fk_id_user)'];
    }
    
        public static function getLastCommandPriceUser($id_user){
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT commands.fk_id_user, price_articles.price_article FROM commands 
        INNER JOIN command_lines ON commands.id_command = command_lines.fk_id_command 
        INNER JOIN price_articles ON command_lines.fk_id_article = price_articles.fk_id_article 
        WHERE fk_id_user = $id_user ORDER BY date_creation_command DESC LIMIT 1";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

       
        if ($result->rowcount() == 1) {

            $number = $result->fetch();
    
        } else {
            $number['price_article'] = "0";
        } 

        Database::disconnect();

        return $number['price_article'];
    }

    public static function getAllCommandsPricesUser($id_user){
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = " SELECT commands.fk_id_user, SUM(price_articles.price_article) AS 'price_articles' FROM commands 
        INNER JOIN command_lines ON commands.id_command = command_lines.fk_id_command 
        INNER JOIN price_articles ON command_lines.fk_id_article = price_articles.fk_id_article 
        WHERE fk_id_user = $id_user";
        $result = $pdo->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

       
        if ($result->rowcount() == 1) {

            $number = $result->fetch();
    
        } else {
            $number['price_articles'] = "0";
        } 

        Database::disconnect();

        return $number['price_articles'];
    }
}
