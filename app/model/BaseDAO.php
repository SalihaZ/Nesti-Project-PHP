<?php

class BaseDAO
{
    protected static $tableName;

    public static function findOneBy($fieldName, $value)
    {
        $pdo = Database::getPdo();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM " . static::$tableName . " where $fieldName = ?";
        $q = $pdo->prepare($sql);
        $q->execute([$value]);

        $entity = $q->fetchObject(static::getEntityClass());

        return $entity;
    }

    public static function getEntityClass()
    {
        return substr(get_called_class(), 0, -3);
    }

    // // Fetch all data of the users in DB
    // public function findAll()
    // {
    //     $pdo = Database::getPdo();
    //     $sql = "SELECT * FROM " . static::$tableName;
    //     $result = $pdo->query($sql);

    //     if ($result) {
    //         $arrayEntity = $result->fetchAll(PDO::FETCH_CLASS, static::getEntityClass());
    //     } else {
    //         $arrayEntity = [];
    //     }
    //     return $arrayEntity;
    // }
}
