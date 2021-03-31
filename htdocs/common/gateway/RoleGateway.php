<?php
include_once "common/model/Role.php";

/**
 * Database gateway class for Role objects
 */
class RoleGateway extends DatabaseGateway
{
    public static function fetch(int $id): Role
    {
        $result = DB::get()->run("SELECT * FROM `role` WHERE id = :id", ["id" => $id])->fetch();

        if($result === false) throw new InvalidArgumentException("No database entry exists for ID ".$id);

        $role = new Role($id);
        $role->name = $result["name"];
        $role->permissions = $result["permissions"];

        return $role;
    }

    public static function create(object $object): int
    {
        /** @var Role $role */
        $role = $object;

        $sql = "INSERT INTO `role` (`name`, `permissions`)
                VALUES (:name, :permissions)";

        DB::get()->run($sql,
            [
                "name" => $role->name,
                "permissions" => $role->permissions
            ]
        );

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var Role $role */
        $role = $object;

        $sql = "UPDATE `role`
                SET `name` = :name, `permissions` = :permissions
                WHERE id = :target";

        DB::get()->run($sql,
            [
                "name" => $role->name,
                "permissions" => $role->permissions,
                "target" => $role->getID()
            ]
        );
    }

    public static function delete(object $object): void
    {
        /** @var Role $role */
        $role = $object;

        $sql = "DELETE FROM `role` WHERE `id` = :id";

        DB::get()->run($sql,
            ["id" => $role->getID()]
        );
    }
}