<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/utility/DB.php";
include_once "common/model/User.php";
include_once "common/gateway/RoleGateway.php";

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

        if ($result === false) throw new InvalidArgumentException("No database entry exists for ID " . $id);

        $user = new User($id);
        $user->username = $result["username"];
        $user->password = $result["password"];
        $user->email = $result["email"];

        $role = $result["role"];
        $user->setRole($role == NULL ? RoleGateway::fetch(Role::DEFAULT_ROLE) : RoleGateway::fetch($role));

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