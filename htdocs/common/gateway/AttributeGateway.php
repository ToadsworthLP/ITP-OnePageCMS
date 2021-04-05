<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/utility/DB.php";
include_once "common/model/BlockAttribute.php";
include_once "common/gateway/BlockGateway.php";

class AttributeGateway extends DatabaseGateway
{
    public static function fetchAll(?array $params = null): array
    {
        $result = self::fetchFromTable("attribute", $params);

        $instances = array();
        foreach ($result as $entry) {
            $attribute = new BlockAttribute($entry["id"]);
            $attribute->forceBlockID($entry["block"]);
            $attribute->name = $entry["name"];

            array_push($instances, $attribute);
        }

        return $instances;
    }

    public static function fetch(?array $params = null): ?BlockAttribute
    {
        $result = self::fetchAll($params);
        return count($result) > 0 ? $result[0] : null;
    }

    public static function create(object $object): int
    {
        /** @var BlockAttribute $attribute */
        $attribute = $object;

        DB::get()->run("INSERT INTO `attribute` (`block`, `name`)
                            VALUES (:block, :name)",
            [
                "block" => $attribute->getBlock()->getID(),
                "name" => $attribute->name
            ]);

        return DB::get()->pdo()->lastInsertId();
    }

    public static function update(object $object): void
    {
        /** @var BlockAttribute $attribute */
        $attribute = $object;

        DB::get()->run("UPDATE `attribute`
                            SET block = :block, name = :name
                            WHERE id = :id",
            [
                "block" => $attribute->getBlock()->getID(),
                "name" => $attribute->name,
                "id" => $attribute->getID()
            ]);
    }

    public static function delete(object $object): void
    {
        /** @var BlockAttribute $attribute */
        $attribute = $object;

        DB::get()->run("DELETE FROM `attribute` WHERE `id` = :id",
            ["id" => $attribute->getID()]);
    }
}