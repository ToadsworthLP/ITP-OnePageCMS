<?php
include_once "../model/Role.php";

/**
 * Database gateway class for Role objects
 */
class RoleGateway extends DatabaseGateway
{
    public static function fetch(int $id): Role
    {
        $result = DB::get()->run("SELECT * FROM `role` WHERE id = :id", ["id" => $id])->fetch();
        $role = new Role($id);
        $role->name = $result["name"];
        $role->permissions = $result["permissions"];

        return $role;
    }

    public static function create(object $object): int
    {
        // TODO: Implement create() method.
        return 0;
    }

    public static function update(object $object): void
    {
        // TODO: Implement update() method.
    }

    public static function delete(object $object): void
    {
        // TODO: Implement delete() method.
    }
}