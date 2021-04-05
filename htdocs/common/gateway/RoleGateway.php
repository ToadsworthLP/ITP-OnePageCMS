<?php
include_once "common/model/Role.php";

/**
 * Database gateway class for Role objects
 */
class RoleGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("role", $params);

        $instances = array();
        foreach ($result as $entry) {
            $role = new Role($entry["id"]);
            $role->name = $entry["name"];
            $role->permissions = $entry["permissions"];

            array_push($instances, $role);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?Role
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
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