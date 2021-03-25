<?php
include_once "../model/Role.php";

class RoleGateway
{
    public static function getRole(int $id) : Role {
        $result = DB::get()->run("SELECT * FROM `role` WHERE id = :id", ["id" => $id])->fetch();
        $role = new Role($id);
        $role->name = $result["name"];
        $role->permissions = $result["permissions"];

        return $role;
    }

    public static function createRole(Role $role) {
        // TODO implement
    }

    public static function updateRole(Role $role) {
        // TODO implement
    }
}