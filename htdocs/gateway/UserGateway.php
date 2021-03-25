<?php
include_once "../utility/DB.php";
include_once "../model/User.php";
include_once "../gateway/RoleGateway.php";

class UserGateway
{
    public static function getUser(int $id) : User {
        $result = DB::get()->run("SELECT * FROM `user` WHERE id = :id", ["id" => $id])->fetch();
        $user = new User($id);
        $user->username = $result["username"];
        $user->password = $result["password"];
        $user->email = $result["email"];
        $user->setRole(RoleGateway::getRole($result["role"]));

        return $user;
    }

    public static function createUser(User $user) {
        // TODO implement
    }

    public static function updateUser(User $user) {
        // TODO implement
    }
}