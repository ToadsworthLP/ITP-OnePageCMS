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
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("user", $params);

        $instances = array();
        foreach ($result as $entry) {
            $user = new User($entry["id"]);
            $user->username = $entry["username"];
            $user->password = $entry["password"];
            $user->email = $entry["email"];

            if($entry["role"] == NULL) {
                $user->forceRoleID(Role::DEFAULT_ROLE);
            } else {
                $user->forceRoleID($entry["role"]);
            }

            array_push($instances, $user);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?User
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
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