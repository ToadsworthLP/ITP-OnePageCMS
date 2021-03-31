<?php
include_once "common/gateway/DatabaseGateway.php";
include_once "common/utility/DB.php";
include_once "common/model/Attribute.php";
include_once "common/gateway/BlockGateway.php";

class AttributeGateway extends DatabaseGateway
{
    public static function fetch(int $id): Attribute
    {
        $result = DB::get()->run("SELECT * FROM `attribute` WHERE id = :id", ["id" => $id])->fetch();

        if ($result === false) throw new InvalidArgumentException("No database entry exists for ID " . $id);

        $attribute = new Attribute($id);
        $attribute->setBlock(BlockGateway::fetch($result["block"]));
        $attribute->name = $result["name"];

        return $attribute;
    }

    public static function create(object $object): int
    {
        /** @var Attribute $attribute */
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
        /** @var Attribute $attribute */
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
        /** @var Attribute $attribute */
        $attribute = $object;

        DB::get()->run("DELETE FROM `attribute` WHERE `id` = :id",
            ["id" => $attribute->getID()]);
    }
}