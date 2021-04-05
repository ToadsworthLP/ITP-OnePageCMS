<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/model/Site.php";
include_once "common/utility/DB.php";

class SiteGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("site", $params);

        $instances = array();
        foreach ($result as $entry) {
            $site = new Site($entry["id"]);
            $site->name = $entry["name"];
            $site->requiredPermissions = $entry["required_permissions"];
            $site->published = $entry["published"];
            $site->menuOption = $entry["menu_option"];

            array_push($instances, $site);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?Site
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
    }

    public static function create(object $object): int
    {
        /** @var Site $site */
        $site = $object;

        DB::get()->run("INSERT INTO `site` (`name`, `required_permissions`, `published`, `menu_option`)
                            VALUES (:name, :required_permissions, :published, :menu_option)",
            [
                "name" => $site->name,
                "required_permissions" => $site->requiredPermissions,
                "published" => $site->published,
                "menu_option" => $site->menuOption
            ]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var Site $site */
        $site = $object;

        DB::get()->run("UPDATE `site`
                            SET name = :name, required_permissions = :required_permissions, published = :published, menu_option = :menu_option
                            WHERE id = :id",
            [
                "name" => $site->name,
                "required_permissions" => $site->requiredPermissions,
                "published" => $site->published,
                "menu_option" => $site->menuOption,
                "id" => $site->getID()
            ]);
    }

    public static function delete(object $object): void
    {
        /** @var Site $site */
        $site = $object;

        DB::get()->run("DELETE FROM `site` WHERE `id` = :id",
            ["id" => $site->getID()]);
    }
}