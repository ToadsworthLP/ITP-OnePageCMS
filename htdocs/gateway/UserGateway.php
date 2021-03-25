<?php
include_once "../gateway/DatabaseGateway.php";
include_once "../utility/DB.php";
include_once "../model/User.php";
include_once "../gateway/RoleGateway.php";

/**
 * Database gateway class for User objects
 */
class UserGateway extends DatabaseGateway
{
    public static function fetch(int $id): User
    {
        $sql = "SELECT * FROM `user` WHERE `id` = :id";

        $result = DB::get()->run($sql,
            ["id" => $id]
        )->fetch();

        $user = new User($id);
        $user->username = $result["username"];
        $user->password = $result["password"];
        $user->email = $result["email"];
        $user->setRole(RoleGateway::fetch($result["role"]));

        return $user;
    }

    public static function create(object $object): int
    {
        /** @var User $user */
        $user = $object;

        $sql = "INSERT INTO `user` (`username`, `password`, `email`, `role`)
                VALUES (:username, :password, :email, :role)";

        DB::get()->run($sql,
            [
                "username" => $user->username,
                "password" => $user->password,
                "email" => $user->email,
                "role" => $user->getRole()->getID(),
            ]
        );

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var User $user */
        $user = $object;

        $sql = "UPDATE `user`
                SET `username` = :username, `password` = :password, `email` = :email, `role` = :role
                WHERE id = :target";

        DB::get()->run($sql,
            [
                "username" => $user->username,
                "password" => $user->password,
                "email" => $user->email,
                "role" => $user->getRole()->getID(),
                "target" => $user->getID()
            ]
        );
    }

    public static function delete(object $object): void
    {
        /** @var User $user */
        $user = $object;

        $sql = "DELETE FROM `user` WHERE `id` = :id";

        DB::get()->run($sql,
            ["id" => $user->getID()]
        );
    }
}