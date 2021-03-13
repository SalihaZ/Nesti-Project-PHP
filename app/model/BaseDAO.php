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

}
