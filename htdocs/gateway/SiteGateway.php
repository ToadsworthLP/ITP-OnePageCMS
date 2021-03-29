<?php
include_once "../gateway/DatabaseGateway.php";
include_once "../model/Site.php";
include_once "../utility/DB.php";

class SiteGateway extends DatabaseGateway
{
    public static function fetch(int $id): Site
    {
        $result = DB::get()->run("SELECT * FROM `site` WHERE id = :id", ["id" => $id])->fetch();

        if ($result === false) throw new InvalidArgumentException("No database entry exists for ID " . $id);

        $site = new Site($id);
        $site->name = $result["name"];
        $site->required_permissions = $result["required_permissions"];
        $site->published = $result["published"];
        $site->menu_option = $result["menu_option"];

        return $site;
    }

    public static function create(object $object): int
    {
        /** @var Site $site */
        $site = $object;

        DB::get()->run("INSERT INTO `site` (`name`, `required_permissions`, `published`, `menu_option`)
                            VALUES (:name, :required_permissions, :published, :menu_option)",
            [
                "name" => $site->name,
                "required_permissions" => $site->required_permissions,
                "published" => $site->published,
                "menu_option" => $site->menu_option
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
                "required_permissions" => $site->required_permissions,
                "published" => $site->published,
                "menu_option" => $site->menu_option,
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