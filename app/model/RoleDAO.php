<?php

class RoleDAO extends BaseDAO
{
    // Creates role(s) for a new user (association foreing key(s))
    public static function createRoles($user)
    {
        $roles = $user->getRoles_user();

        foreach ($roles as $value) {

            $pdo = Database::getPdo();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO $value (fk_id_user) values(?)";
            $q = $pdo->prepare($sql);
            $q->execute(
                [
                    $user->getId_user(),
                ]
            );
            Database::disconnect();
        }
    }

    // Fetchs role(s) for users
    public static function readUserRoles($user) {

        $roles = ['admins', 'moderators', 'chiefs'];
        $id = $user->getId_user();
        $user_roles = [];

        foreach ($roles as $value) {

            $pdo = Database::getPdo();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT fk_id_user FROM $value WHERE fk_id_user = $id";
            $q = $pdo->prepare($sql);
            $q->execute();
         
            if ($q->rowcount() == 1) {
                $user_roles[] = $value;
            }

            Database::disconnect();
        }

        if (empty ($user_roles)) {
            $user_roles[] = 'Utilisateur';
        }
        return $user_roles;
    }
}
